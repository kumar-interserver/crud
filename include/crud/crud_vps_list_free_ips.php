<?php
function crud_vps_list_free_ips() {
	require_once(INCLUDE_ROOT . '/rendering/class.crud.php');
	crud::init("select  get_vps_free_ips", 'vps')
		->set_title("Free/Available IPs For VPs Servers")
		->go();
}
