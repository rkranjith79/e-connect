<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Height;

class HeightController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Heights';
        $this->pageData['name'] = 'Height';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'heights';
        $this->pageData['prefix_url'] = 'height';
        $this->modal = new Height;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
