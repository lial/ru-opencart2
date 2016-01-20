<?php
// Text
$_['text_title']				= 'Кредитная или дебетовая карта';
$_['text_credit_card']			= 'Данные карты';
$_['text_wait']					= 'Пожалуйста подождите!';
$_['text_result']				= 'Результат';
$_['text_message']				= 'Сообщение';
$_['text_cvn_result']			= 'CVN result';
$_['text_avs_postcode']			= 'AVS postcode';
$_['text_avs_address']			= 'AVS address';
$_['text_eci']					= 'ECI (3D secure) result';
$_['text_tss']					= 'TSS result';
$_['text_card_bank']			= 'Card issue bank';
$_['text_card_country']			= 'Card country';
$_['text_card_region']			= 'Card region';
$_['text_last_digits']			= 'Last 4 digits';
$_['text_order_ref']			= 'Order ref';
$_['text_timestamp']			= 'Timestamp';
$_['text_card_visa']			= 'Visa';
$_['text_card_mc']				= 'Mastercard';
$_['text_card_amex']			= 'American Express';
$_['text_card_switch']			= 'Switch';
$_['text_card_laser']			= 'Laser';
$_['text_card_diners']			= 'Diners';
$_['text_auth_code']			= 'Auth code';
$_['text_3d_s1']				= 'Cardholder Not Enrolled, liability shift';
$_['text_3d_s2']				= 'Unable To Verify Enrolment, no liability shift';
$_['text_3d_s3']				= 'Invalid Response From Enrolment Server, no liability shift';
$_['text_3d_s4']				= 'Enrolled, But Invalid Response From ACS (Access Control Server), no liability shift';
$_['text_3d_s5']				= 'Successful Authentication, liability shift';
$_['text_3d_s6']				= 'Authentication Attempt Acknowledged, liability shift';
$_['text_3d_s7']				= 'Incorrect Password Entered, no liability shift';
$_['text_3d_s8']				= 'Authentication Unavailable, no liability shift';
$_['text_3d_s9']				= 'Invalid Response From ACS, no liability shift';
$_['text_3d_s10']				= 'RealMPI Fatal Error, no liability shift';

// Entry
$_['entry_cc_type']				= 'Тип карты';
$_['entry_cc_number']			= 'Номер карты';
$_['entry_cc_name']				= 'Владелец карты';
$_['entry_cc_expire_date']		= 'Срок действия карты';
$_['entry_cc_cvv2']				= 'Секретный код карты (CVV2)';
$_['entry_cc_issue']			= 'Номер выпуска карты (1-2 цифры)';

// Help
$_['help_start_date']			= '(если доступно)';
$_['help_issue']				= '(только для карт Maestro и Solo)';

// Error
$_['error_card_number']			= 'Проверьте правильность заполнения номера карты';
$_['error_card_name']			= 'Проверьте правильность заполнения владельца карты';
$_['error_card_cvv']			= 'Проверьте правильность заполнения кода CVV2';
$_['error_3d_unable']			= 'Merchant requires 3D secure but unable to verify with your bank, please try later';
$_['error_3d_500_response_no_payment'] = 'An invalid response was received from the card processor, no payment has been taken';
$_['error_3d_unsuccessful']		= 'Ошибка авторизации 3D secure';