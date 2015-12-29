<?php
// +----------------------------------------------------------------------+
// | SagePay Form Payment Services Module          			              |
// | 				       			        				              |
// | admin/includes/extra_datafiles/sagepay_form_database_tables.php      |
// | 				       			        				              |
// | Released under GPL   							                      |
// | 				       			        				              |
// | Designed by Nixak								                      |
// | Version 2.0 26th March 2011						                  |
// +----------------------------------------------------------------------+
// | $Id: sagepay_form v2.0 07944426031109222                             |
// +----------------------------------------------------------------------+
 
// File protection as per Zen-Cart suggestions
	if (!defined('IS_ADMIN_FLAG')) {
	  die('Illegal Access');
	}
// EOF: File protection

	if (!defined('DB_PREFIX')) {
    define('DB_PREFIX', '');
	}
	define('TABLE_SAGEPAY_TRANSACTION', DB_PREFIX . 'sagepay_transaction');

