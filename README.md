UserRegistration
===============

## Installation

* Add `"stijnhau/user-registration": "0.0.*"`, to your composer.json and run `php composer.phar update` 
* Enable this module in `config/application.config.php`
* Copy file located in `vendor/stijnhau/user-registration/config/user-registration.global.php` to `./config/autoload/user-registration.global.php` and change the values as you wish.


## Note
If you do not want unverified users to log in, this module also ships with a authentication adapter.
```php
return [
    'zfcuser' => [
        'auth_adapters' => [80 => 'UserRegistration\Authentication\Adapter\EmailVerification']
    ]
];
```
