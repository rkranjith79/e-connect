<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use App\Models\BodyType;
use App\Models\Caste;
use App\Models\Color;
use App\Models\Country;
use App\Models\District;
use App\Models\Education;
use App\Models\Gender;
use App\Models\Height;
use App\Models\Jathagam;
use App\Models\Lagnam;
use App\Models\MaritalStatus;
use App\Models\NakshatraPatham;
use App\Models\Navamsam;
use App\Models\ParentStatus;
use App\Models\PhysicalStatus;
use App\Models\Profile;
use App\Models\Rasi;
use App\Models\RasiNakshatra;
use App\Models\RegisteredBy;
use App\Models\Religion;
use App\Models\SocialType;
use App\Models\State;
use App\Models\SubCaste;
use App\Models\Weight;
use App\Models\Work;
use App\Models\WorkPlace;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data['grooms'] = Profile::selectColumns()->groom()->get();
        $data['brides'] = Profile::selectColumns()->bride()->get();

        return view('user.index', compact('data'));
    }

    public function listing()
    {
        $data['profiles'] = Profile::selectColumns()->get();
        $data['select'] = [
            "genders" => $this->getPublishedData(Gender::class),
            "marital_statuses" => $this->getPublishedData(MaritalStatus::class),
            "registered_bies" => $this->getPublishedData(RegisteredBy::class),
            "colors" => $this->getPublishedData(Color::class),
            "body_types" => $this->getPublishedData(BodyType::class),
            "physical_statuses" => $this->getPublishedData(PhysicalStatus::class),
            "weights" => $this->getPublishedData(Weight::class),
            "heights" => $this->getPublishedData(Height::class),
            "educations" => $this->getPublishedData(Education::class),
            "works" => $this->getPublishedData(Work::class),
            "work_places" => $this->getPublishedData(WorkPlace::class),
            "countries" => $this->getPublishedData(Country::class),
            "states" => $this->getPublishedData(State::class),
            "districts" => $this->getPublishedData(District::class),
            "parant_status" => $this->getPublishedData(ParentStatus::class),
            "social_types" => $this->getPublishedData(SocialType::class),
            "blood_groups" => $this->getPublishedData(BloodGroup::class),
            "castes" => $this->getPublishedData(Caste::class),
            "sub_castes" => $this->getPublishedData(SubCaste::class),
            "religions" => $this->getPublishedData(Religion::class),
            "rasi_nakshatras" => $this->getPublishedData(RasiNakshatra::class),
            "lagnams" => $this->getPublishedData(Lagnam::class),
            "jathagams" => $this->getPublishedData(Jathagam::class),
            "nakshatra_pathams" => $this->getPublishedData(NakshatraPatham::class),
            "rasis" => $this->getPublishedData(Rasi::class),
            "navamsams" => $this->getPublishedData(Navamsam::class),
        ];
        return view("user.member.member-listing", compact('data'));
    }

    public function jathagam($id = 1)
    {
        $data['profile'] = Profile::selectColumns()->find($id);
        return view('user.jathagam', compact('data'));
    }

    public function search()
    {
        return view('user.profile-search');
    }

    public function profile($id = 1)
    {
        $data['profile'] = Profile::selectColumns()->find($id);
        return view('user.profile', compact('data'));
    }
    
    function getPublishedData($model)
    {
        return $model::published()->pluck('title', 'id')->toArray();
    }
}
