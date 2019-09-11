<?php

namespace Concrete\Package\Dreamrs\Block\PageHeader;

use Concrete\Core\Block\BlockController;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends BlockController
{

    protected $btInterfaceWidth = 470;
    protected $btInterfaceHeight = 300;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btTable = 'btDreamrsPageHeader';
    protected $btDefaultSet = 'basic';

    public function getBlockTypeDescription()
    {
        return t('Shows a Header at the top of a page.');
    }

    public function getBlockTypeName()
    {
        return t('Page Header');
    }

    public function add()
    {
        
    }
    
    public function edit()
    {
        
    }
    
    public function save($data)
    {
        $data['overridePageName'] = !empty($data['overridePageName']) ? 1 : 0;
        return parent::save($data);
    }
    
    public function view()
    {
    }

}
