<?php
/**
 * Timezone Setting
 * List of Supported Timezones: http://www.php.net/manual/en/timezones.php
 */
//date_default_timezone_set('America/Chicago');

$host_split = explode('.',$_SERVER['HTTP_HOST']);
$sandbox = $host_split[0] == 'sandbox' && $host_split[1] == 'domain' ? TRUE : FALSE;
$sandbox = TRUE;
$domain = $sandbox ? 'STAGING_URL' : 'LIVE_URL';


if($sandbox){
	$primary_account = "PAYPAL_PRIMARY_ACCOUNT"; 
	$secondary_account = "PAYPAL_SECONDARY_ACCOUNT";
}else{
	$primary_account = "PAYPAL_PRIMARY_ACCOUNT"; 
	$secondary_account = "PAYPAL_SECONDARY_ACCOUNT";
}


if($sandbox)
{
	//error_reporting(-1);
	//ini_set('display_errors', 'Off');
}

$api_version = '112.0'; // Released 03.26.2014

/**
 * PayPal Application ID
 * --------------------------------------
 * The application is only required with Adaptive Payments applications.
 * You obtain your application ID but submitting it for approval within your 
 * developer account at http://developer.paypal.com
 *
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 * The sandbox value included here is a global value provided for developrs to use in the PayPal sandbox.
 */
$application_id = $sandbox ? 'SANDBOX_APP_ID' : 'LIVE_APP_ID';

/**
 * PayPal Developer Account Email Address
 * This is the email address that you use to sign in to http://developer.paypal.com
 */
$developer_account_email = $sandbox ? 'SANDBOX_DEVELOPER_ACCOUNT_EMAIL' : 'LIVE_DEVELOPER_ACCOUNT_EMAIL';

/**
 * PayPal Gateway API Credentials
 * ------------------------------
 * These are your PayPal API credentials for working with the PayPal gateway directly.
 * These are used any time you're using the parent PayPal class within the library.
 * 
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 * 
 * You may obtain these credentials by logging into the following with your PayPal account: https://www.paypal.com/us/cgi-bin/webscr?cmd=_login-api-run
 */
$api_username = $sandbox ? 'SANDBOX_API_USERNAME' : 'LIVE_API_USERNAME';
$api_password = $sandbox ? 'SANDBOX_API_PASSWORD' : 'LIVE_API_PASSWORD';
$api_signature = $sandbox ? 'SANDBOX_API_SIGNATURE' : 'LIVE_API_SIGNATURE';

/**
 * Payflow Gateway API Credentials
 * ------------------------------
 * These are the credentials you use for your PayPal Manager:  http://manager.paypal.com
 * These are used when you're working with the PayFlow child class.
 * 
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 * 
 * You may use the same credentials you use to login to your PayPal Manager, 
 * or you may create API specific credentials from within your PayPal Manager account.
 */
$payflow_username = $sandbox ? 'SANDBOX_PAYFLOW_USERNAME' : 'LIVE_PAYFLOW_USERNAME';
$payflow_password = $sandbox ? 'SANDBOX_PAYFLOW_PASSWORD' : 'LIVE_PAYFLOW_PASSWORD';
$payflow_vendor = $sandbox ? 'SANDBOX_PAYFLOW_VENDOR' : 'LIVE_PAYFLOW_VENDOR';
$payflow_partner = $sandbox ? 'SANDBOX_PAYFLOW_PARTNER' : 'LIVE_PAYFLOW_PARTNER';

/**
 * PayPal REST API Credentials
 * ---------------------------
 * These are the API credentials used for the PayPal REST API.
 * These are used any time you're working with the REST API child class.
 * 
 * You may obtain these credentials from within your account at http://developer.paypal.com
 */
$rest_client_id = $sandbox ? 'SANDBOX_CLIENT_ID' : 'LIVE_CLIENT_ID';
$rest_client_secret = $sandbox ? 'SANDBOX_SECRET_ID' : 'LIVE_SECRET_ID';

/**
 * PayPal Finance Portal API
 * -------------------------
 * These are credentials used for obtaining a PublisherID used in Bill Me Later Banner code.
 * As of now, these are specialized API's and you must obtain credentials directly from a PayPal rep.
 */
$finance_access_key = $sandbox ? 'SANDBOX_ACCESS_KEY' : 'LIVE_ACCESS_KEY';
$finance_client_secret = $sandbox ? 'SANDBOX_CLIENT_SECRET' : 'LIVE_CLIENT_SECRET';

/**
 * Third Party User Values
 * These can be setup here or within each caller directly when setting up the PayPal object.
 */
$api_subject = '';	// If making calls on behalf a third party, their PayPal email address or account ID goes here.
$device_id = '';
$device_ip_address = $_SERVER['REMOTE_ADDR'];

/**
 * Enable Headers
 * Option to print headers to screen when dumping results or not.
 */
$print_headers = false;

/**
 * Enable Logging
 * Option to log API requests and responses to log file.
 */
$log_results = false;
$log_path = $_SERVER['DOCUMENT_ROOT'].'/logs/';