<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\SocialType;

class SocialTypeController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Social Types';
        $this->pageData['name'] = 'Social Type';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'social_types';
        $this->pageData['prefix_url'] = 'social_type';
        $this->modal = new SocialType;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
