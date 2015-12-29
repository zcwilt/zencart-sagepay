<?php
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
// EOF: File protection

// Only output the SagePay Transaction information if it was recorded for this order!
if (isset($sagepay_form_transaction_info->fields)) {

// Strip slashes in case they were added to handle apostrophes:
    foreach ($sagepay_form_transaction_info->fields as $key => $value) {
        $sagepay_form_transaction_info->fields[$key] = stripslashes($value);
    }

// Display all SagePay Form status fields (in admin Orders page):
    $output = '<td><table>' . "\n";
    $output .= '<tr style="background-color : #cccccc; border-style : dotted;">' . "\n";
    $output .= '<td valign="top"><table>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_SAGEPAY_TRANSACTION_ID . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['vpstxid'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_VENDOR_TRANSACTION_CODE . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['vendor_tx_code'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_TEXT_STATUS . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['status'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_STATUS_DETAIL . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['status_detail'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_TX_AUTH_NO . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['tx_auth_no'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_AVSCV2 . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['avs_cv2'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_ADDRESS_RESULT . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['address_result'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_POSTCODE_RESULT . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['postcode_result'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_CV2_RESULT . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['cv2_result'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_3D_SECURE_STATUS . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['three_d_secure_status'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_CAVV_RESULT . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['cavv_result'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_CARD_TYPE . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['card_type'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_LAST_4_CARD_DIGITS . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['last_4_digits'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_PAYPAL_ADDRESS_STATUS . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['address_status'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '<tr><td class="main">' . "\n";
    $output .= MODULE_PAYMENT_SAGEPAY_FORM_PAYPAL_PAYER_STATUS . "\n";
    $output .= '</td><td class="main">' . "\n";
    $output .= $sagepay_form_transaction_info->fields['payer_status'] . "\n";
    $output .= '</td></tr>' . "\n";

    $output .= '</table></td>' . "\n";

    $output .= '</tr>' . "\n";
    $output .= '</table></td>' . "\n";
}

