<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Color;

class ColorController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Colors';
        $this->pageData['name'] = 'Color';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'colors';
        $this->pageData['prefix_url'] = 'color';
        $this->modal = new Color;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
