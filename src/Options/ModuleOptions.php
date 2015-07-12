<?php
namespace UserRegistration\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions implements
    TemplateOptionsInterface,
    RequestExpiryOptionsInterface,
    EmailOptionsInterface,
    FeatureOptionsInterface,
    DatabaseOptionsInterface
{

}
