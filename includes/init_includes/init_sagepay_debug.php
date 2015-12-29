<?php
/**
 * create the breadcrumb trail
 * see {@link  http://www.zen-cart.com/wiki/index.php/Developers_API_Tutorials#InitSystem wikitutorials} for more details.
 *
 * @package initSystem
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: init_add_crumbs.php 18697 2011-05-04 14:35:20Z wilt $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}
require_once(DIR_FS_CATALOG . DIR_WS_MODULES . 'payment/sagepay_zc/SagepayUtil.php');

if ($_GET['main_page'] == FILENAME_CHECKOUT_PROCESS  && $_SERVER['REQUEST_METHOD'] == 'POST') {

    errorLog(array(
        array('title' => 'Header Post data', 'content' => SagepayUtil::arrayToQueryString($_POST))
    ));
    errorLog(array(
        array('title' => 'Header Get data', 'content' => SagepayUtil::arrayToQueryString($_GET))
    ));

}
if ($_GET['main_page'] == FILENAME_CHECKOUT_SUCCESS) {

    errorLog(array(
        array('title' => 'CHECKOUT SUCCESS', 'content' => SagepayUtil::arrayToQueryString($_GET))
    ));
}

function errorLog($errorMessages)
{
    $logDir = defined('DIR_FS_LOGS') ? DIR_FS_LOGS : DIR_FS_SQL_CACHE;
    $message = date('M-d-Y h:i:s') .
        "\n=================================\n\n";
    foreach ($errorMessages as $errorMessage) {
        $message .= $errorMessage['title'] . "\n\n";
        $message .= $errorMessage['content'] . "\n\n";
        $message .= "=================================\n\n";
    }
//        $file = $logDir . '/' . 'Sagepay_Debug_' . time() . '_' . zen_create_random_value(4) . '.log';
    $file = $logDir . '/' . 'Sagepay_Debug_' . '.log';
    if ($fp = @fopen($file, 'a')) {
        fwrite($fp, $message);
        fclose($fp);
    }
}
