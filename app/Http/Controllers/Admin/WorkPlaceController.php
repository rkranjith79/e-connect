<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\WorkPlace;

class WorkPlaceController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Work Places';
        $this->pageData['name'] = 'Work Place';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'work_places';
        $this->pageData['prefix_url'] = 'work_place';
        $this->modal = new WorkPlace;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
