<?php
/**
 * CRUD System
 * @author Joe Huss <detain@interserver.net>
 * @copyright 2018
 * @package MyAdmin
 * @category Admin
 */
use \MyCrud\Crud;

/**
 * crud_reusable_fantastico()
 * @return void
 */
function crud_reusable_fantastico()
{
	Crud::init('get_reusable_fantastico', 'licenses', 'function')
		->set_title('Reusable Fantastico')
		->go();
}
