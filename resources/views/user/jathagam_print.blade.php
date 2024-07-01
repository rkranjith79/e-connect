@extends('layouts.user_wo_sidebar')

@section('content')

<div class="text-right">

    <div class="btn-group mt-0">
        <button type="button" class="btn btn-sm btn-danger" onclick="download_image();"><i class="fas fa-file-download"></i> Download</button>
        <button type="button" class="btn btn-sm btn-info" onclick="print_page()">Print <i class="fas fa-print"></i></button>
    </div>
</div>
<div class="aiz-main-wrapper d-flex flex-column bg-white" id="print-area">
        <div class="print-content" id="full-profile">
            <div id="reg-form" class="view-profile">
                <div class="row">
                    <div class="col">
                        <div class="print-header text-center">
                            <img loading="lazy" src="{{asset('img/logo-e-connet.png')}}" alt="E-connect Matrimony" class="w-auto h-80px">
                            <div class="row">
                                {{-- <div class="col-md-6">
                                    <span class="mx-2 float-left"><a href="tel:{{ $data['profile']->basic->phone ?? '' }}"
                                            class="text-dark"><i class="fas fa-phone-alt text-primary"></i>
                                            {{ $data['profile']->basic->phone ?? ''}}</a></span>
                                    <span class="span-email mx-2 float-left"><a class="text-dark"><i
                                                class="fas fa-envelope text-primary"></i>
                                            {{ $data['profile']->email ?? '' }}
                                        </a></span>
                                </div> --}}
                                <div class="col-md-12">
                                    <span class="mx-2 float-right"><a href="tel:{{ __getSiteConfigration('phone') }}"
                                            class="text-dark"><i class="fas fa-phone-alt text-primary"></i>
                                             {{ __getSiteConfigration('phone') }}</a></span>
                                    <span class="span-email mx-2 float-right"><a class="text-dark"><i
                                                class="fas fa-envelope text-primary"></i>
                                                {{ __getSiteConfigration('email') }}
                                        </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row print-info">
                    <div class="col text-left">
                        <p class="mb-0">Profile ID: <span id="profile-id"> {{ $data['profile']->code }}</span></p>
                    </div>
                    <div class="col text-center">
                        <p class="mb-0">Date Reg: {{ __setDateFormat($data['profile']->created_at) }}</p>
                    </div>
                    <div class="col text-right">
                        <p class="mb-0">Printed On: {{ date('d-m-Y') }}</p>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_basic') }}</h4>
                <div class="form-row first-row">
                    <div class="col-6 text-center">
                        <img loading="lazy" src="{{ $data['profile']->photo }}" class="profile-thumbnail w-auto mw-100"
                            onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png') }}';">
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.name') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.gender') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->gender->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.age') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.marital_status') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->marital_status->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.registered_by') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->registered_by->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.color') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->color->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.height') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->height->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.weight') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->weight->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_religion') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.caste') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->caste->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.sub_caste') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->sub_caste->title ?? '-' }}</td>
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
                                    <td>{{ trans('fields.temple') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->temple ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_family') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.father_status') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->father_status->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.siblings') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->siblings ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.mother_status') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->mother_status->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.social_type') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->social_type->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.jathagam') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.rasi_nakshatra') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->rasi_nakshatra->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.nakshatra_patham') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->nakshatra_patham->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.lagnam') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->lagnam->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.jathagam') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->jathagam->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.date_of_birth') }}</td>
                                    <td>:</td>
                                    <td>{{ __setDateFormat($data['profile']->jathagam->date_of_birth ?? '') ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.time_of_birth') }}</td>
                                    <td>:</td>
                                    <td>{{ __setTimeFormat($data['profile']->jathagam->time_of_birth ?? '') ?? '-' }}
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td>{{ trans('fields.religion_information') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->date_of_birth ?? "-" }}</td>
                                </tr> --}}
                                <tr>
                                    <td>{{ trans('fields.place_of_birth') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->place_of_birth ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row div-astro mt-2">
                    <div class="col-xl-6 col-lg-12 col-sm-12 col-md-12 mb-1">
                        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['1'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['2'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['3'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['4'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['5'] ?? '' }}</p>
                                </td>
                                <td rowspan="2" colspan="2">
                                    <img loading="lazy" src="{{asset('img/logo-e-connet.png')}}"
                                        border="0" class="h-50px w-auto"><br>
                                    <strong> {{ trans('fields.rasi') }} </strong>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['6'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['7'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['8'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['9'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['10'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['11'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['12'] ?? '' }}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12 col-md-12 mb-1">
                        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['1'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['2'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['3'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['4'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['5'] ?? '' }}</p>
                                </td>
                                <td rowspan="2" colspan="2">
                                    <img loading="lazy" src="{{asset('img/logo-e-connet.png')}}"
                                        border="0" class="h-50px w-auto"><br>
                                    <strong>{{ trans('fields.navamsam') }}</strong>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['6'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['7'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['8'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['9'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['10'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['11'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['12'] ?? '' }}</p>
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
                                    <td>{{ trans('fields.birth_dasa_remaining') }}</td>
                                    <td>:</td>
                                    <td>
                                    <td>{{ $data['profile']->jathagam->birth_dasa_remaining ?? '-' }}</td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_education') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.education') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->education->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.monthly_income') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->monthly_income ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.work') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->work->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.work_place') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->work_place->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_asset') }}</h4>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.asset_details') }}</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">
                                        {{ $data['profile']->basic->asset_details ?? '-' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_expectation') }}</h4>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.expectation_nakshatra') }}</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">
                                        {{ $data['profile']->expectation_jathagam_title ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.expectation') }}</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">
                                        {{ $data['profile']->expectation ?? '-' }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js" integrity="sha512-UcDEnmFoMh0dYHu0wGsf5SKB7z7i5j3GuXHCnb3i4s44hfctoLihr896bxM0zL7jGkcHQXXrJsFIL62ehtd6yQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
		new QRCode(document.getElementById("qrcode"), {
			text: "https://ganeshkongumatrimony.com/groups/1",
			width: 128,
			height: 128,
			colorDark: "#248822",
			colorLight: "#ffffff",

			PI_TL: "#c62b30",
			PI_TR: "#c62b30",
			PI_BL: "#c62b30",

			logo: "https://ganeshkongumatrimony.com/assets/img/Logo.png",
			logoBgTransparent: true,

			correctLevel: QRCode.CorrectLevel.H
		});
        function print_page() {
			if(navigator.userAgent.indexOf('GKMAndroidApp') !== -1) {
				AndroidShareHandler.print();
			} else {
				window.print();
			}
		}
		function download_image() {

			$('#loading').show();
			$('body').addClass('on-print');
			$('.section-title').addClass('hide');
			var profile_id = $('#profile-id').text();
			html2canvas(document.getElementById('full-profile'))
			.then(canvas => {
				var a = $("<a style='display: none;'/>");
				a.attr("href", canvas.toDataURL());
				a.attr("download", profile_id + ".png");
				$("body").append(a);
				a[0].click();
				//window.URL.revokeObjectURL(canvas.toDataURL());
				a.remove();
				$('.section-title').not('.div-contact').removeClass('hide');
				$('body').removeClass('on-print');
				$("#loading").fadeOut(500);
			});
		}
		function share_image() {
			$('#loading').show();
			$('body').addClass('on-print');
			$('.section-title').addClass('hide');
			//Now declare required data
			var profile_id = $('#profile-id').text();
			var share_title = profile_id + '-GaneshKonguMatrimony.com';
			var share_text = '*Profile ID: ' + profile_id +'*\nகணேஷ் கொங்கு | Ganesh Kongu Matrimony\n❣திருமண தகவல் மையம்❣️\n📱 9025382525\n🌐https://ganeshkongumatrimony.com/j/3em2b3o';

			//Now share
			html2canvas(document.getElementById('full-profile'))
			.then(canvas => {
				//For app
				if(navigator.userAgent.indexOf('GKMAndroidApp') !== -1) {
					AndroidShareHandler.shareBase64Item(canvas.toDataURL(),share_title,share_text);
					$('.section-title').not('.div-contact').removeClass('hide');
					$('body').removeClass('on-print');
					$("#loading").fadeOut(500);
					return;
				}
				//For others
				canvas.toBlob(function(blob) {
					var file = new File([blob], profile_id + ".png", {type: 'image/png'});
					var filesArray = [file];
					var url = URL.createObjectURL(blob);

					//If mobile, trigger navigator menu
					var shareData = {
							text: share_text,
							files: filesArray,
							title: share_title,
						}
					if(navigator.canShare && navigator.canShare({ files: filesArray })) {
						navigator.share(shareData)
						.catch((e) => {
							console.log('Error: ' + e);
						});
						$('#loading').hide();
					} else {
						download_image();
					}
				});
				$('.section-title').not('.div-contact').removeClass('hide');
				$('body').removeClass('on-print');
				$("#loading").fadeOut(500);
			});
		}

		if(navigator.userAgent.indexOf('GKMAndroidApp') !== -1) {
			jQuery('a[target="_blank"]').on("click", function() {
				window.location.href = jQuery(this).attr('href');
				return false;
			});
		}
    </script>
	<style>
		@media  not print {
			@media (max-width: 768px) {
				body:not(.on-print) #full-profile {
					padding: 5px;
					width: 100%;
					max-width: 100%;
				}
				body:not(.on-print) .col-6, body:not(.on-print) .col-5, body:not(.on-print) .col-2 {
					flex-basis: 0;
					flex-grow: 1;
					max-width: 100%;
				}
				.span-email {
					display: block;
				}
			}
		}
		.print-content img.profile-thumbnail {
			min-width: 100px;
		}
		.first-row {
			flex-direction: row-reverse;
		}
	</style>
    @endpush
@endsection
