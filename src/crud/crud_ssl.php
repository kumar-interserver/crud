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
 * crud_ssl()
 * @return void
 */
function crud_ssl()
{
	Crud::init('select * from ssl_certs', 'ssl')
		->set_title('SSL Certificates')
		->go();
}
