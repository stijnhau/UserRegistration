<?php
namespace UserRegistration\Form;

use ZfcUser\Form\Register as registerZfcUser;
use ZfcUser\Options\RegistrationOptionsInterface;

class Register extends registerZfcUser
{
    public function __construct($name, RegistrationOptionsInterface $options)
    {
        parent::__construct($name, $options);
    }
}
