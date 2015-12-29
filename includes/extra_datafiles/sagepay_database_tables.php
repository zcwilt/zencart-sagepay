<?php
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

if (!defined('DB_PREFIX')) {
    define('DB_PREFIX', '');
}
define('TABLE_SAGEPAY_TRANSACTION', DB_PREFIX . 'sagepay_transaction');


