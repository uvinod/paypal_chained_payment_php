#Implement Paypal Chained Payment in PHP

### Installation

Refer to the [tutorial][p2_1] to install the PHP class library for Paypal.

### Configuration

Open the below file.
```sss
/path/to/config.php
```
```sss
$host_split = explode('.',$_SERVER['HTTP_HOST']);
$sandbox = $host_split[0] == 'sandbox' && $host_split[1] == 'domain' ? TRUE : FALSE;
$sandbox = TRUE; //BOOLEAN
$domain = $sandbox ? 'SANDBOX_URL' : 'LIVE_URL';
```
Update the paypal credentials below.

```sss
$application_id = $sandbox ? 'SANDBOX_APP_ID' : 'LIVE_APP_ID';
$developer_account_email = 
    $sandbox ? 'SANDBOX_DEVELOPER_EMAIL' : 'LIVE_DEVELOPER_EMAIL';
$api_username = $sandbox ? 'SANDBOX_API_USERNAME' : 'LIVE_API_USERNAME';
$api_password = $sandbox ? 'SANDBOX_API_PASSWORD' : 'LIVE_API_PASSWORD';
$api_signature = $sandbox ? 'SANDBOX_API_SIGNATURE' : 'LIVE_API_SIGNATURE';
$rest_client_id = $sandbox ? 'SANDBOX_CLIENT_ID' : 'LIVE_CLIENT_ID';
$rest_client_secret = $sandbox ? 'SANDBOX_SECRET_ID' : 'LIVE_SECRET_ID';
```

[paypal]: <https://www.paypal.com/>
[p1_1]: <https://github.com/angelleye/paypal-php-library>
[p2_1]: <https://www.angelleye.com/install-angell-eye-php-class-library-paypal/>
[p3_1]: <https://developer.paypal.com/>
