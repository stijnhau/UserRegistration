<?php
/**
 * UserRegistration Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */

$options = array(
    /**
     * Boolean
     * If we send an activation mail and only activated users are allowed to sign in.
     * Default: true
     * [WIP]
     */
    'enableActivation' => true,

    /**
     * Wat is the default registration field.
     * Default: username
     * [WIP]
     */
     'registrationField' => 'username',

     /**
      * Do we want the user to input the gender.
      * Default: true
      * [WIP]
      */
     'displayGender' => true,
);

/**
 * End of UserRegistration configuration
 */
return [
    'user_registration' => $options
];
