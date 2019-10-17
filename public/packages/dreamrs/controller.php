<?php

namespace Concrete\Package\Dreamrs;

defined('C5_EXECUTE') or die('Access Denied.');

use \Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $pkgHandle = 'dreamrs';
    protected $appVersionRequired = '8.5.1';
    protected $pkgVersion = '0.6.7';

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
        $this->app->make('cache/request')->disable();
        $this->installContentFile('install/attributes.xml');
        $this->installContentFile('install/theme.xml');
        $this->installContentFile('install/block_types.xml');
        $this->installContentFile('install/page_types/project.xml');
        $this->installContentFile('install/pages/projects.xml');
    }
    
    public function upgrade()
    {
        parent::upgrade();
        $this->app->make('cache/request')->disable();
        $this->installContentFile('install/attributes.xml');
        $this->installContentFile('install/theme.xml');
        $this->installContentFile('install/block_types.xml');
    }
}
