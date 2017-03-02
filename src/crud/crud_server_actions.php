<?php
/**
 * CRUD System
 * Last Changed: $LastChangedDate: 2016-10-05 12:42:23 -0400 (Wed, 05 Oct 2016) $
 * @author detain
 * @version $Revision: 21022 $
 * @copyright 2017
 * @package MyAdmin
 * @category Admin
 */
use \detain\Crud\Crud;

/**
 * crud_server_actions()
 * @return void
 */
function crud_server_actions() {
		Crud::init("select vps_hostname, history_new_value, history_timestamp from history_log left join vps on vps_id=history_type where history_section='vpsqueueold' and vps_id is not null", 'vps')
		->set_title('Recent Server Commands')
		->go();
}