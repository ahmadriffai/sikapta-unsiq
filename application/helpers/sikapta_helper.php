<?php


function is_login(){

    $sikapta = get_instance();

    if (!$sikapta->session->userdata('nim')) {
        redirect('auth');
    }else{
        $roleId = $sikapta->session->userdata('role_id');

        $menu = $sikapta->uri->segment(1);

        $menuId= $sikapta->db->get_where('menu', [
            'menu' => $menu
        ])->row_array()['id'];

        $menuRole = $sikapta->db->get_where('menu_role',[
            'role_id' => $roleId,
            'menu_id' => $menuId
        ]);
        

        if ($menuRole->num_rows() < 1) {
            redirect('auth/block');
        }
    }
}

function check_akses($roleId, $menuId){
    $sikapta = get_instance();

    $result = $sikapta->db->get_where('menu_role', [
        'role_id' => $roleId,
        'menu_id' => $menuId
    ]);

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}