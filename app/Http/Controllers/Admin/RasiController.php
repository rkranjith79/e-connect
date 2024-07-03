<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\Rasi;

class RasiController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Rasi';
        $this->pageData['name'] = 'Rasi';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'rasis';
        $this->pageData['prefix_url'] = 'rasi';
        $this->modal = new Rasi();
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
