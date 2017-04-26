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
 * crud_dedicated_list()
 * @return void
 */
function crud_dedicated_list() {
		Crud::init('select server_id, username, servername, server_status from servers', 'domains')
		->set_title('Dedicated List')
		->enable_labels()
		->set_labels(['server_id' => 'ID','username' => 'Client','servername' =>  'Server Name', 'server_status' => 'Status'], true)
		->add_title_search_button([['server_status','=','active']], 'Active', 'info')
		->add_title_search_button([['server_status','in',['pending','pending-setup','pend-approval']]], 'Pending', 'info')
		->add_title_search_button([['server_status','in',['canceled','expired']]], 'Expired', 'info')
		->add_title_search_button([], 'All', 'info active')
		->disable_delete()
		->disable_edit()
		->add_row_button('none.view_dedicated_server&id=%id%', 'View Server', 'primary', 'cog')
		->go();
}
