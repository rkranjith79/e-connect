@extends('layouts.user')

@section('content')
    <section class="py-3 bg-white">
        <div class="container">
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-white text-center bg-primary">
                            <img src="https://ganeshkongumatrimony.com/uploads/profile_images/6tRN1feGnlji9ttBdH8c8nYkmMl24FUcDVb4Ziy199.png"
                                class="img-fit w-auto h-220px mw-100"
                                onerror="this.onerror=null;this.src='https://ganeshkongumatrimony.com/assets/img/avatar-place.png';">
                            <h3 class="text-white fw-500">திவ்யபிரபா</h3>
                            <h5 class="text-white fw-500">GK4573</h5>
                            <div class="row gutters-5">
                                <div class="col">
                                    <a href="javascript:void(0);" onclick="express_interest(2327)"
                                        class="btn btn-block btn-profile-action px-1">
                                        <i class="fas fa-heart"></i>
                                        <span id="interest_id_2327">Express Interest</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);" id="shortlist_a_id_2327" onclick="do_shortlist(2327)"
                                        class="btn btn-block btn-profile-action">
                                        <i class="fas fa-list"></i>
                                        <span id="shortlist_id_2327">Shortlist</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row gutters-5">
                                <div class="col">
                                    <a href="javascript:void(0);" onclick="ignore_member(2327)"
                                        class="btn btn-block btn-profile-action">
                                        <i class="fas fa-ban"></i>
                                        Ignore
                                    </a>
                                </div>
                                <div class="col">
                                    <a id="contact_a_id_2327" href="javascript:void(0);" onclick="view_contact(2327)"
                                        class="btn btn-block btn-profile-action">
                                        <i class="fas fa-list"></i>
                                        <span id="contact_id_2327">View Contact</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row gutters-5">
                                <div class="col">
                                    <a href="https://ganeshkongumatrimony.com/j/1pefa5d"
                                        class="btn btn-block btn-profile-action text-center" target="_blank">
                                        <i class="fas fa-file-invoice"></i>
                                        View Jathagam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="nav nav-tabs border-0 mb-3">
                                <a class="btn btn-circle btn-sm btn-primary mr-1 active" data-toggle="tab"
                                    href="#reg-form">Profile Information</a>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active view-profile" id="reg-form">
                                    <h4 class="section-title">Basic Information</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>:</td>
                                                        <td>திவ்யபிரபா</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td>:</td>
                                                        <td>Female</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Age</td>
                                                        <td>:</td>
                                                        <td>27 Year, 8 Month</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Marital Status</td>
                                                        <td>:</td>
                                                        <td>First Marriage</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Registered By</td>
                                                        <td>:</td>
                                                        <td>Parents</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Personal Details</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Physical Status</td>
                                                        <td>:</td>
                                                        <td>Normal</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Height</td>
                                                        <td>:</td>
                                                        <td>5ft 2in / 157 cms</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Weight</td>
                                                        <td>:</td>
                                                        <td>67 Kg</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Body Type</td>
                                                        <td>:</td>
                                                        <td>Average Body Type</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>:</td>
                                                        <td>Fair</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Blood Group</td>
                                                        <td>:</td>
                                                        <td>A+</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Religious &amp; Social Background</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Caste</td>
                                                        <td>:</td>
                                                        <td>Kongu Vellala Gounder</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sub-Caste</td>
                                                        <td>:</td>
                                                        <td>Maniyan Kulam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Temple</td>
                                                        <td>:</td>
                                                        <td>நாவலடியன் கோயில் மோகனூர்</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Education &amp; Career</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Education</td>
                                                        <td>:</td>
                                                        <td>Engineering</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Education Details</td>
                                                        <td>:</td>
                                                        <td>B.E ECE</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Work</td>
                                                        <td>:</td>
                                                        <td>Software</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work Details</td>
                                                        <td>:</td>
                                                        <td>Senior Associate- Cognizant Technology Solutions</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work Place</td>
                                                        <td>:</td>
                                                        <td>Tamil Nadu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Monthly Income</td>
                                                        <td>:</td>
                                                        <td>120000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Location</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Country</td>
                                                        <td>:</td>
                                                        <td>India</td>
                                                    </tr>
                                                    <tr>
                                                        <td>State</td>
                                                        <td>:</td>
                                                        <td>Tamilnadu</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>District</td>
                                                        <td>:</td>
                                                        <td>Coimbatore</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Family Details</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Father Status</td>
                                                        <td>:</td>
                                                        <td>Alive</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Social Type</td>
                                                        <td>:</td>
                                                        <td>Middle</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Mother Status</td>
                                                        <td>:</td>
                                                        <td>Alive</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Siblings</td>
                                                        <td>:</td>
                                                        <td>1 younger sister</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Assets and Pavun Details</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Assets Value</td>
                                                        <td>:</td>
                                                        <td>2.5 crores - 05 crores</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Assets Details (Land House Rent)</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">Rc veedu-1 , plot-1, thottam- 60
                                                            cent.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seimurai (Gold, Car Details)</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">Gold- 35 poun</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Astro Details</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Rasi - Nakshatra</td>
                                                        <td>:</td>
                                                        <td>Scorpio-Visakam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nakshatra Patham</td>
                                                        <td>:</td>
                                                        <td>Patham 4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lagnam</td>
                                                        <td>:</td>
                                                        <td>Virgo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jathagam</td>
                                                        <td>:</td>
                                                        <td>Raagu Kethu, Sevvai</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Date of Birth</td>
                                                        <td>:</td>
                                                        <td>04-05-1996</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time of Birth</td>
                                                        <td>:</td>
                                                        <td>3:14:P.M.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Day of Birth</td>
                                                        <td>:</td>
                                                        <td>Saturday</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Place of Birth</td>
                                                        <td>:</td>
                                                        <td>Salem</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row div-astro mt-2">
                                        <div class="col-md-6 mb-1">
                                            <table class="tablehoro" border="0" cellpadding="0" cellspacing="0"
                                                align="center">
                                                <tr>
                                                    <td>
                                                        <p>7, 9</p>
                                                    </td>
                                                    <td>
                                                        <p>2, 4</p>
                                                    </td>
                                                    <td>
                                                        <p>8</p>
                                                    </td>
                                                    <td>
                                                        <p>10</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td rowspan="2" colspan="2">
                                                        <img src="https://ganeshkongumatrimony.com/assets/img/icons/android-icon-72x72.png"
                                                            border="0" class="h-50px w-auto"><br>
                                                        <strong>Rasi</strong>
                                                    </td>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>6</p>
                                                    </td>
                                                    <td>
                                                        <p>3</p>
                                                    </td>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <p>1, 5</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="tablehoro" border="0" cellpadding="0" cellspacing="0"
                                                align="center">
                                                <tr>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <p>4</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>8</p>
                                                    </td>
                                                    <td rowspan="2" colspan="2">
                                                        <img src="https://ganeshkongumatrimony.com/assets/img/icons/android-icon-72x72.png"
                                                            border="0" class="h-50px w-auto"><br>
                                                        <strong>Navamsam</strong>
                                                    </td>
                                                    <td>
                                                        <p>3, 5</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>1, 9</p>
                                                    </td>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td>
                                                        <p>6</p>
                                                    </td>
                                                    <td>
                                                        <p>2, 10</p>
                                                    </td>
                                                    <td>
                                                        <p>7</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Birth Dasa Remaining</td>
                                                        <td>:</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Expectation</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Jathagam</td>
                                                        <td>:</td>
                                                        <td>Raagu Kethu, Sevvai</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marital Status</td>
                                                        <td>:</td>
                                                        <td>First Marriage</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work Place</td>
                                                        <td>:</td>
                                                        <td>Other Country</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Matching Nakshatras</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Expectation</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">Good family, preferably abroad
                                                            working or software working boy.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
