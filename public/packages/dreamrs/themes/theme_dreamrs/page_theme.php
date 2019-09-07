<?php
namespace Concrete\Package\Dreamrs\Theme\ThemeDreamrs;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{
    
    public function getThemeName()
    {
        return t('Dreamrs');
    }

    public function getThemeDescription()
    {
        return t('Theme based off the Dreamrs Bootstrap 4 HTML theme.');
    }
    
    public function registerAssets()
    {
        $this->requireAsset('css', 'font-awesome');
    }
}
