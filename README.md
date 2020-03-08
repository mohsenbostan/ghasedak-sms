<p align="center"> 
<img src="https://ghasedak.io/img/logo.png" width="60px" height="56px" alt="Ghasedak SMS">
<h1 align="center">Ghasedak SMS</h1>
</p>

## Ghasedak SMS Service Package For Laravel.
This package make sending SMS simple via Ghasedak.io SMS Service.

> Important: This Package Requires Laravel 7 Or Newer!



## To install package just do this few steps:

1 - Run the command below to install it in your Laravel application:
```
composer require mohsenbostan/ghasedak-sms
```

2 - Run this command and publish config file:
```
php artisan vendor:publish --tag=config
```

3 - Add this to your .env file and replace your API KEY there:
```dotenv
GHASEDAK_API_KEY="${GHASEDAK_API_KEY}"
```

## Usage
1 - You can send Simple Single SMS like example:
```php
use MohsenBostan\GhasedakSms;

$sms = GhasedakSms::sendSingleSMS($message, $receptor, $linenumber);

return $sms;
```

2 - You can send Multiple SMS like example:
```php
use MohsenBostan\GhasedakSms;

$sms = GhasedakSms::sendMultipleSMS($message, $receptors, $linenumber);

return $sms;
```

**Usage Warnings :**
1. All data that you pass, Should be in string!
2. When you use ***sendMultipleSMS***, you should separate numbers by comma ***" , "***.
   For example : " 09120000000,09180000000,09010000000 "

## Contact Developer
You Can Contact Me Via This Information:
* Email: mohsenbostandev@gmail.com
* Telegram: @mohsenbostan
* Instagram: @mohsenbostan.ir
