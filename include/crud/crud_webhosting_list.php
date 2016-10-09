<?php
/**
 * CRUD System
 * Last Changed: $LastChangedDate: 2016-10-05 12:42:23 -0400 (Wed, 05 Oct 2016) $
 * @author detain
 * @version $Revision: 21022 $
 * @copyright 2016
 * @package MyAdmin
 * @category Admin
 */

/**
 * crud_webhosting_list()
 * @return void
 */
function crud_webhosting_list() {
	require_once(INCLUDE_ROOT . '/rendering/class.crud.php');
	crud::init("select websites.website_id as service_id, website_masters.website_name, website_cost, website_hostname, website_status, services_name, website_comment, '' as website_extra
 from websites left join website_masters on website_server=website_masters.website_id left join services on services_id=websites.website_type" , 'webhosting')
		->set_title("Website List")
		->go();
}
