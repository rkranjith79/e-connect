<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\BodyType;

class BodyTypeController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Body Types';
        $this->pageData['name'] = 'Body Type';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'body_types';
        $this->pageData['prefix_url'] = 'body_type';
        $this->modal = new BodyType;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
