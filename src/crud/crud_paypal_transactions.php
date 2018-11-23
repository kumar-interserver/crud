<?php
/**
 * CRUD System
 * @author Joe Huss <detain@interserver.net>
 * @copyright 2019
 * @package MyAdmin
 * @category Admin
 */
use \MyCrud\Crud;

/**
 * crud_paypal_transactions()
 * @return void
 */
function crud_paypal_transactions()
{
	Crud::init('select * from paypal')
		->set_title('Paypal Transactions')
		->go();
}
