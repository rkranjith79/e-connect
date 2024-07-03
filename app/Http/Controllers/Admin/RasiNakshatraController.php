<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Common\MasterController;
use App\Models\RasiNakshatra;

class RasiNakshatraController extends MasterController
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Rasi Nakshatras';
        $this->pageData['name'] = 'Rasi Nakshatra';
        $this->pageData['view'] = 'admin.common_master.index';
        $this->pageData['tables'] = 'rasi_nakshatras';
        $this->pageData['prefix_url'] = 'rasi_nakshatra';
        $this->modal = new RasiNakshatra;
        $this->lookup = [
            ['id' => 'language_tamil', 'title' => trans('fields.'.$this->pageData['prefix_url'], [], 'ta')],
        ];
    }
}
