@extends('layouts.user')

@section('content')
    <a href="https://ganeshkongumatrimony.com/set_language/en" id="cur_lang" data-lang="T"
        class="text-reset font-weight-bold hide"></a>

    <div class="aiz-main-wrapper d-flex flex-column bg-white">
        <div class="row hide-on-print">
            <div class="col-md-4 mx-auto">
                <div class="text-center mt-2">
                    <label class="text-primary font-weight-bold pr-2">Language</label>
                    <a href="https://ganeshkongumatrimony.com/set_language/in" class="text-reset font-weight-bold pr-2">
                        <div class="aiz-radio aiz-radio-inline">
                            <input type="radio" name="lang" checked> தமிழ்<span class="aiz-rounded-check"></span>
                        </div>
                    </a>
                    <a href="https://ganeshkongumatrimony.com/set_language/en" class="text-reset font-weight-bold pl-2">
                        <div class="aiz-radio aiz-radio-inline">
                            <input type="radio" name="lang"> English<span class="aiz-rounded-check"></span>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <a href="https://wa.me/?text=பதிவு எண் : GK4590%0aபெயர் : சாய்பிருந்தா (வெளிநாடு)%0aB.Tech.,M.S.[USA]Doing Doctorate..%0aவயது : 35%0aபிறந்த ஊர் : COIMBATORE%0aதொழில் : DATA ANALYST அமெரிக்கா%0aமாத வருமானம் : 600000%0aகும்பம்-அவிட்டம்%0aராகு கேது ஜாதகம்%0aசொத்து விபரம்  : AGRI.FARM.IN%0ahttps://ganeshkongumatrimony.com/p/2ssjudd"
                        target="_blank" class="btn btn-sm btn-success btn-circle mb-2">Whatsapp <i
                            class="fab fa-whatsapp"></i></a>
                    <button type="button" class="btn btn-sm btn-primary btn-circle mb-2" onclick="share_image();">Share <i
                            class="fas fa-share-alt"></i></button><br>
                    <div class="btn-group mt-0">
                        <button type="button" class="btn btn-sm btn-danger btn-circle" onclick="download_image();"><i
                                class="fas fa-file-download"></i> Download</button>
                        <button type="button" class="btn btn-sm btn-info btn-circle" onclick="print_page()">Print <i
                                class="fas fa-print"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="print-content" id="full-profile">
            <div id="reg-form" class="view-profile">
                <div class="row">
                    <div class="col">
                        <div class="print-header text-center">
                            <img src="https://ganeshkongumatrimony.com/uploads/all/q6CbLbvGbexPN6MJ7VOm5aUBQRxdEdNzDLKa5xsZ.png"
                                alt="Ganesh Kongu Matrimony" class="w-auto h-80px">
                            <h6 class="font-weight-bold my-2">
                                <span class="mx-2"><a href="tel:9025382525" class="text-dark"><i
                                            class="fas fa-phone-alt text-primary"></i> 9025382525</a></span>
                                <span class="span-email mx-2"><a
                                        href="/cdn-cgi/l/email-protection#bddad6d0dcc9cfd4d0d2d3c4c9c8cdfddad0dcd4d193ded2d0"
                                        class="text-dark"><i class="fas fa-envelope text-primary"></i> <span
                                            class="__cf_email__"
                                            data-cfemail="492e2224283d3b20242627303d3c39092e24282025672a2624">[email&#160;protected]</span></a></span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="form-row print-info">
                    <div class="col text-left">
                        <p class="mb-0">Profile ID: <span id="profile-id">GK4590</span></p>
                    </div>
                    <div class="col text-center">
                        <p class="mb-0">Date Reg: 22-01-2024</p>
                    </div>
                    <div class="col text-right">
                        <p class="mb-0">Printed On: 22-01-2024</p>
                    </div>
                </div>

                <h4 class="section-title">அடிப்படை விவரங்கள்</h4>
                <div class="form-row first-row">
                    <div class="col-6 text-center">
                        <img src="https://ganeshkongumatrimony.com/uploads/profile_images/13UIWeNF64cR93BYSRASD2AvQl9YgapJaSewuPd6.jpg"
                            class="profile-thumbnail w-auto mw-100"
                            onerror="this.onerror=null;this.src='https://ganeshkongumatrimony.com/assets/img/avatar-place.png';">
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>பெயர்</td>
                                    <td>:</td>
                                    <td>சாய்பிருந்தா</td>
                                </tr>
                                <tr>
                                    <td>பாலினம்</td>
                                    <td>:</td>
                                    <td>பெண்</td>
                                </tr>
                                <tr>
                                    <td>வயது</td>
                                    <td>:</td>
                                    <td>35 வருடம், 11 மாதம்</td>
                                </tr>
                                <tr>
                                    <td>திருமண நிலை</td>
                                    <td>:</td>
                                    <td>முதல் மணம்</td>
                                </tr>
                                <tr>
                                    <td>பதிவு செய்தவர்</td>
                                    <td>:</td>
                                    <td>பெற்றோர்</td>
                                </tr>
                                <tr>
                                    <td>நிறம்</td>
                                    <td>:</td>
                                    <td>சிகப்பு</td>
                                </tr>
                                <tr>
                                    <td>உயரம்</td>
                                    <td>:</td>
                                    <td>5ft 3in / 160 cms</td>
                                </tr>
                                <tr>
                                    <td>எடை</td>
                                    <td>:</td>
                                    <td>62 Kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">மதம் மற்றும் சமூக விவரங்கள்</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>சாதி</td>
                                    <td>:</td>
                                    <td>கொங்கு வெள்ளாள கவுண்டர்</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>குலம்</td>
                                    <td>:</td>
                                    <td>காடை குலம்</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>கோவில்</td>
                                    <td>:</td>
                                    <td>PERUNDURAI SHRI. CHELLANDIAMMAN.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">குடும்ப விவரங்கள்</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>தந்தை நிலை</td>
                                    <td>:</td>
                                    <td>உண்டு</td>
                                </tr>
                                <tr>
                                    <td>உடன் பிறந்தோர்</td>
                                    <td>:</td>
                                    <td>YOUNGER SISTER.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>தாய் நிலை</td>
                                    <td>:</td>
                                    <td>உண்டு</td>
                                </tr>
                                <tr>
                                    <td>சமூக நிலை</td>
                                    <td>:</td>
                                    <td>நடுத்தரம்</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">ஜாதக விவரங்கள்</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>நட்சத்திரம்</td>
                                    <td>:</td>
                                    <td>கும்பம்-அவிட்டம்</td>
                                </tr>
                                <tr>
                                    <td>பாதம்</td>
                                    <td>:</td>
                                    <td>பாதம் 4</td>
                                </tr>
                                <tr>
                                    <td>லக்னம்</td>
                                    <td>:</td>
                                    <td>கன்னி</td>
                                </tr>
                                <tr>
                                    <td>ஜாதகம்</td>
                                    <td>:</td>
                                    <td>ராகு கேது ஜாதகம்</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>பிறந்த தேதி</td>
                                    <td>:</td>
                                    <td>17-02-1988</td>
                                </tr>
                                <tr>
                                    <td>பிறந்த தேதி</td>
                                    <td>:</td>
                                    <td>9:37:P.M.</td>
                                </tr>
                                <tr>
                                    <td>பிறந்த கிழமை</td>
                                    <td>:</td>
                                    <td>புதன் கிழமை</td>
                                </tr>
                                <tr>
                                    <td>பிறந்த ஊர்</td>
                                    <td>:</td>
                                    <td>COIMBATORE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-row align-items-center div-astro mt-2">
                    <div class="col-12 col-md-5 mb-1">
                        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td>
                                    <p>5, 10</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2, 3</p>
                                </td>
                                <td rowspan="2" colspan="2">
                                    <img src="https://ganeshkongumatrimony.com/assets/img/Logo.png" border="0"
                                        class="h-70px w-auto"><br>
                                    <strong>இராசி</strong>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>8, 11</p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4, 7</p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>1, 9</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-2">
                        <div id="qrcode" class="text-center"></div>
                    </div>
                    <div class="col-12 col-md-5">
                        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td>
                                    <p>11</p>
                                </td>
                                <td>
                                    <p>4, 6</p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>7</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p></p>
                                </td>
                                <td rowspan="2" colspan="2">
                                    <img src="https://ganeshkongumatrimony.com/assets/img/Logo.png" border="0"
                                        class="h-70px w-auto"><br>
                                    <strong>நவாம்சம்</strong>
                                </td>
                                <td>
                                    <p>1, 5, 8</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>9</p>
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
                                    <p>2, 3, 10</p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
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
                                    <td>ஜனன கால தசா இருப்பு</td>
                                    <td>:</td>
                                    <td>
                                        செவ்வாய் - வருடம் 11 மாதம் 26 நாள்
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">படிப்பு மற்றும் தொழில் விவரங்கள்</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>படிப்பு - விவரங்கள்</td>
                                    <td>:</td>
                                    <td>B.Tech.,M.S.[USA]Doing Doctorate..</td>
                                </tr>
                                <tr>
                                    <td>மாத வருமானம்</td>
                                    <td>:</td>
                                    <td>600000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>பணியின் விவரம்</td>
                                    <td>:</td>
                                    <td>DATA ANALYST அமெரிக்கா</td>
                                </tr>
                                <tr>
                                    <td>பணியிடம்</td>
                                    <td>:</td>
                                    <td>வெளிநாடு </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">சொத்து விபரம்</h4>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>சொத்து விபரம்</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">AGRI.FARM.IN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">எதிர்பார்ப்பு</h4>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>பொருந்தும் நட்சத்திரங்கள்</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">KARTHIGAI, THIRUVADHIRAI கன்னி-உத்திரம்
                                        ,HASTHAM,SWATHI,VISHAGAM,ANUSHAM,MAGAM,UTHIRADAM,THIRUVONAM,</td>
                                </tr>
                                <tr>
                                    <td>எதிர்பார்ப்பு</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">WORKING IN USA, [preferably TEXAS ]</td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="color:#000;">ராகு கேது ஜாதகம்</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img class="w-100"
                            src="https://ganeshkongumatrimony.com/uploads/all/UYHaY9UlwGQuyVdp7Qgo1WJ2WHV7XnsHjOHl5aLB.png">
                        <p class="print-footer text-justify text-black px-3">குறிப்பு : எமது நிறுவனம் கொங்கு திருமண
                            அமைப்பாளர்கள் குழு உதவியுடன் செயல்படுகிறது. இரு வீட்டாரும் நன்கு விசாரித்து சுபம் பேசி
                            முடிக்கவும். திருமணம் உறுதியானவுடன், சேவை கட்டணம் வசதிக்கேற்ப பெறப்படும்.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
