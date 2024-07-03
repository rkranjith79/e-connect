<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Lagnam;

class LagnamController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Lagnams';
        $this->pageData['name'] = 'Lagnam';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'lagnams';
        $this->pageData['prefix_url'] = 'lagnam';
        $this->modal = new Lagnam;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
