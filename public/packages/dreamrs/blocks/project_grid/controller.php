<?php

namespace Concrete\Package\Dreamrs\Block\ProjectGrid;

use Concrete\Core\Attribute\Category\PageCategory;
use Concrete\Core\Block\BlockController;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends BlockController
{

    protected $btInterfaceWidth = 470;
    protected $btInterfaceHeight = 300;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = false;
    protected $btTable = 'btDreamrsProjectGrid';
    protected $btDefaultSet = 'basic';

    public function getBlockTypeDescription()
    {
        return t('Shows a grid of project pages.');
    }

    public function getBlockTypeName()
    {
        return t('Project Grid');
    }

    public function add()
    {
        
    }
    
    public function edit()
    {
        
    }
    
    public function view()
    {
        $this->set('projectGridHeadline', htmLawed($this->projectGridHeadline, [
            'safe' => 1,
            'elements' => 'br, span'
        ]));

        /**
         * @var $pageAttributeService PageCategory
         */
        $pageAttributeService = $this->app->make(PageCategory::class);
        $category = $pageAttributeService->getAttributeKeyByHandle('project_category');
        $settings = $category->getAttributeKeySettings();
        $optionList = $settings->getOptionList();
        $options = $optionList->getOptions();
        $this->set('options', $options);
    }

}
