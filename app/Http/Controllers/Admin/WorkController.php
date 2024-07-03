<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Work;

class WorkController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Works';
        $this->pageData['name'] = 'Work';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'works';
        $this->pageData['prefix_url'] = 'work';
        $this->modal = new Work;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
