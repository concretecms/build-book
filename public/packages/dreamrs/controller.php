<?php

namespace Concrete\Package\Dreamrs;

defined('C5_EXECUTE') or die('Access Denied.');

use \Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $pkgHandle = 'dreamrs';
    protected $appVersionRequired = '8.5.1';
    protected $pkgVersion = '0.6';

    public function getPackageDescription()
    {
        return t('Adds the Dreamrs theme to your website.');
    }

    public function getPackageName()
    {
        return t('Dreamrs');
    }

    public function install()
    {
        parent::install();
        $this->installContentFile('install/theme.xml');
    }
    
    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile('install/theme.xml');
    }
}
