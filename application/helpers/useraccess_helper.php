<?php


function is_logged_in()
{

	$ci = get_instance();
	if(!$ci->session->userdata('email')){
		redirect('login_Admin');
	} else {
		$role_id = $ci->session->userdata('role_id');
		$menu = $ci->uri->segment(1);

		$queryMenu = $ci->db->get_where('adminmenu',['menu' => $menu])->row_array();
		$menu_id = $queryMenu['id'];

		$userAccess = $ci->db->get_where('admin_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id

		]);

		if ($userAccess->num_rows() < 1) {
			redirect('admin/blocked');
		}
	}
}

function is_logged_inn()
{

	$cii = get_instance();
	if(!$cii->session->userdata('email')){
		redirect('login_User');
	} else {
		$role_id = $cii->session->userdata('role_id');
		$menu = $cii->uri->segment(1);

		$queryMenu = $cii->db->get_where('adminmenu',['menu' => $menu])->row_array();
		$menu_id = $queryMenu['id'];

		$userAccess = $cii->db->get_where('admin_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id

		]);

		if ($userAccess->num_rows() < 0) {
			redirect('admin/blocked');
		}

	
	}


	

}