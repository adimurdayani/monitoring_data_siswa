<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nis')) {
        redirect('login');
    } else {
        $role_id = $ci->session->userdata('kelas_id');
        // $username = $ci->session->userdata('username');
        // $menu = $ci->uri->segment(1);

        // $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        // $menu_id = $queryMenu['id'];

        // $userAccess = $ci->db->get_where('user_access_menu', [
        //     'role_id' => $role_id,
        //     'menu_id' => $menu_id
        // ]);

        if ($role_id != $role_id) {
            redirect('auth/login/blocked');
        }
    }
}