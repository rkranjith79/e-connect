<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Traits\LookupTrait;
use Carbon\Carbon;

class MemberController extends Controller
{
    use LookupTrait;
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
        $data['select'] = $this->getlookupData();
     
        return view('user.index', compact('data'));
    }

    public function listing($profile = null)
    {
        if (!empty($profile)) {
            $data['profiles'] = $profile->get();
        } else {
            $data['profiles'] = Profile::selectColumns()->get();
        }

        $data['select'] = $this->getlookupData();

        return view("user.member.member-listing", compact('data'));
    }

    public function jathagam($id = 1)
    {
        $data['profile'] = Profile::selectColumns()->find($id);
        return view('user.jathagam', compact('data'));
    }

    public function search()
    {
        $data['select'] = $this->getlookupData();
        return view('user.profile-search', compact('data'));
    }

    /*
    exp_maritalstatus array()
    */
    public function advancedSearch(Request $request)
    {
        $name = $request->name ?? null;
        $member_id = $request->member_id ?? null;
        $age_from = $request->age_from ?? null;
        $age_to = $request->age_to ?? null;
        $exp_maritalstatus = $request->exp_maritalstatus ?? null;
        $splcategory = $request->splcategory ?? null;
        $body_type = $request->body_type ?? null;
        $color = $request->color ?? null;
        $caste = $request->caste ?? null;
        $sub_caste = $request->sub_caste ?? null;
        $education = $request->education ?? null;
        $work = $request->work ?? null;
        $exp_work_place = $request->exp_work_place ?? null;

        $country = $request->country ?? null;
        $state = $request->state ?? null;
        $district = $request->district ?? null;
        $rasi_nakshatra = $request->rasi_nakshatra ?? null;
        $lagnam = $request->lagnam ?? null;
        $exp_jathagam = $request->exp_jathagam ?? null;

        // dd($name);
        $profile = new Profile;
        $profile = $profile->when(!empty($name), function ($q) use ($name) {
            $q->where("title", "like", "%" . $name . "%");
        })->when(!empty($exp_maritalstatus), function ($q) use ($exp_maritalstatus) {
            $q->whereIn("expectation_marital_status_id", array_filter((array) $exp_maritalstatus));
        })->when(!empty($body_type), function ($q) use ($body_type) {
            $q->whereIn("body_type_id", array_filter((array) $body_type));
        })->when(!empty($color), function ($q) use ($color) {
            $q->whereIn("color_id", array_filter((array) $color));
        })->when(!empty($splcategory), function ($q) use ($splcategory) {
            $q->whereIn("physical_status_id", array_filter((array) $splcategory));
        })->whereHas(
            "basic",
            function ($q) use ($caste, $sub_caste, $education, $work, $country, $state, $district, $exp_work_place) {
                $q->when(!empty($caste), function ($q) use ($caste) {
                    $q->whereIn('caste_id', array_filter((array) $caste));
                })->when(!empty($sub_caste), function ($q) use ($sub_caste) {
                    $q->whereIn('sub_caste_id', array_filter((array) $sub_caste));
                })->when(!empty($education), function ($q) use ($education) {
                    $q->whereIn('education_id', array_filter((array) $education));
                })->when(!empty($work), function ($q) use ($work) {
                    $q->whereIn('work_id', array_filter((array) $work));
                })->when(!empty($state), function ($q) use ($state) {
                    $q->whereIn('state_id', array_filter((array) $state));
                })->when(!empty($country), function ($q) use ($country) {
                    $q->whereIn('country_id', array_filter((array) $country));
                })->when(!empty($district), function ($q) use ($district) {
                    $q->whereIn('district_id', array_filter((array) $district));
                })->when(!empty($exp_work_place), function ($q) use ($exp_work_place) {
                    $q->whereIn('work_place_id', array_filter((array) $exp_work_place));
                });
            }
        )
            ->whereHas(
                "jathagam",
                function ($q) use ($rasi_nakshatra, $lagnam, $exp_jathagam, $age_from, $age_to) {
                    $q->when(!empty($rasi_nakshatra), function ($q) use ($rasi_nakshatra) {
                        $q->whereIn('rasi_nakshatra_id', array_filter((array) $rasi_nakshatra));
                    })->when(!empty($lagnam), function ($q) use ($lagnam) {
                        $q->whereIn('lagnam_id', array_filter((array) $lagnam));
                    })->when(!empty($exp_jathagam), function ($q) use ($exp_jathagam) {
                        $q->whereIn('jathagam_id', array_filter((array) $exp_jathagam));
                    })->when(!empty($exp_jathagam), function ($q) use ($exp_jathagam) {
                        $q->whereIn('jathagam_id', array_filter((array) $exp_jathagam));
                    })
                        ->when(!empty($age_from), function ($q) use ($age_from) {
                            $startDate = Carbon::now()->subYears($age_from)->format('Y-m-d');
                            $q->where('date_of_birth', '>=', $startDate);
                        })->when(!empty($age_to), function ($q) use ($age_to) {
                            $endDate = Carbon::now()->subYears($age_to)->format('Y-m-d');
                            $q->where('date_of_birth', '<=', $endDate);
                        });
                }
            );
        // dd($profile->toSql());
        return $this->listing($profile);
    }

    public function profile($id = 1)
    {
        $data['profile'] = Profile::selectColumns()->find($id);
        return view('user.profile', compact('data'));
    }
}
