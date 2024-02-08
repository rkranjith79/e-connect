<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RasiNakshatra;
use App\Http\Controllers\Admin\Common\MasterController;

class RasiNakshatraController extends MasterController
{
    public $pageData = [], $modal;

    public function __construct()
    {
        $this->pageData['title'] = "Rasi Nakshatras";
        $this->pageData['name'] = "Rasi Nakshatra";
        $this->pageData['view'] = "admin.common_master.index";
        $this->pageData['tables'] = "rasi_nakshatras";
        $this->pageData['prefix_url'] = "rasi_nakshatra";
        $this->modal = new RasiNakshatra;
    }
}
