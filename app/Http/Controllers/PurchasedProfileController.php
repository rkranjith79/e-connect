<?php

namespace App\Http\Controllers;

use App\Models\PurchasedProfile;

class PurchasedProfileController extends Controller
{
    public $pageData = [];

    public $modal;

    public function __construct()
    {
        $this->pageData['title'] = 'Purchased Profiles';
        $this->pageData['rules']['not_unique'] = true;
        $this->pageData['name'] = 'Plan';
        $this->pageData['view'] = 'admin.purchased_profile.index';
        $this->pageData['tables'] = 'purchased_profiles';
        $this->pageData['prefix_url'] = 'purchased_profile';
        $this->modal = new PurchasedProfile();
    }

    public function index()
    {
        $modal_data = $this->modal::paginate(20);
        $page_data = $this->pageData;

        return view('admin.purchased_profile.index', compact(['modal_data', 'page_data']));
    }
}
