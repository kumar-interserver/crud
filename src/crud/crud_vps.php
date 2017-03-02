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
 * crud_vps()
 * @return void
 */
function crud_vps() {
		Crud::init('select * from vps', 'vps')
		->set_title('Virtual Private Servers')
		->go();
}