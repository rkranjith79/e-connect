/*
$( document ).ready( function () {
	//Loader
	
	$("#loading").delay(500).fadeOut(500);
	$("#loading").click(function() {
		$("#loading").fadeOut(500);
	});
	
	if($.validator) {
		$("#reg-form").validate({
			rules: {
				amount: { number: true },
				whatsapp: { minlength:10, maxlength:10, number: true },
				phone: { minlength:10, maxlength:10, number: true },
				photo: {
					extension: "jpeg|jpg|png",
					filesize: 2
				}
			},
			messages: {
				amount: { number: "Please enter the amount in numbers." },
				photo: {
						required: "Please upload a valid image.",
						extension: "Only jpeg, jpg, png files are allowed.",
						filesize: "Only files less than 2 MB are allowed.",
					}
			}
		});
	}
	
	$('#reg-form .aiz-selectpicker').not(".ignore").on('change', function () {
		$(this).valid();
	});
	
	//Maxlength fix for number fields
	$('input[type=number][maxlength]').on('input', function() {
		var $this = $(this);
		var maxlength = $this.attr('maxlength');
		var value = $this.val();
		if (value && value.length >= maxlength) {
			$this.val(value.substr(0, maxlength));
			}
	});
	
	if($('.div-astro').length)
		process_horo('.div-astro', $('#cur_lang').data('lang'));
	
	$('.close-layer').on("click",nav_toggler);
	
	if(navigator.userAgent.indexOf('SSMAndroidApp') !== -1) {
		jQuery('a[target="_blank"]').on("click", function() {
			window.open(jQuery(this).attr('href'));
			return false;
		});
	}
});
//Nav toggler
function nav_toggler() {
	$('body').toggleClass('nav-open');
	$('.close-layer').toggleClass('d-block');
	$('.nav-toggle-icon span').toggleClass('hide');
	return false;
}
//Dependent Options
$('#splcategory').on("change", function() {
	//Reset field
	$('#splcat_details').val('');
	
	if($(this).val() == 'Y')
		$('.div-splcategory-details').removeClass('hide');
	else
		$('.div-splcategory-details').addClass('hide');
});
$('#maritalstatus').on("change", function() {
	//Reset fields
	var maritalstatus = $(this).val();
	
	$('#havechildren, #childlivstatus, #noofchild').prop('selectedIndex', 0).selectpicker('refresh');
	$('#marital_details').val('');
	$('.div-marital-details, .div-havechildren, .div-childlivstatus, .div-noofchild').addClass('hide');
	
	if(maritalstatus == 'U')
		$('.div-marital-details, .div-havechildren').addClass('hide');
	else
		$('.div-marital-details, .div-havechildren').removeClass('hide');
	
	//Fill expectation also
	$('#exp_maritalstatus option').prop('selected', false);
	$('#exp_maritalstatus').find('[value='+maritalstatus+']').prop('selected', true);
	$('#exp_maritalstatus').selectpicker('refresh');
});
$('#jathagam').on("change", function() {
	//Fill expectation also
	$('#exp_jathagam option').prop('selected', false);
	$('#exp_jathagam').find('[value='+$(this).val()+']').prop('selected', true);
	$('#exp_jathagam').selectpicker('refresh');
});
$('#work_place').on("change", function() {
	//Fill expectation also
	$('#exp_work_place option').prop('selected', false);
	$('#exp_work_place').find('[value='+$(this).val()+']').prop('selected', true);
	$('#exp_work_place').selectpicker('refresh');
});
$('#work').on("change", function() {
	//Reset fields
	$('#work_others').val('');
	if($('#work').val() == '1')
		$('.div-work-others').removeClass('hide');
	else
		$('.div-work-others').addClass('hide');
	
	$('#work_place').prop('selectedIndex', 0).selectpicker('refresh');
	if($('#work').val() != '8' && $('#work').val() != '9')
		$('.div-work-place').removeClass('hide');
	else
		$('.div-work-place').addClass('hide');
});
$('#education').on("change", function() {
	//Reset field
	$('#education_others').val('');
	
	if($(this).val() == '1')
		$('.div-education-others').removeClass('hide');
	else
		$('.div-education-others').addClass('hide');
});
$('#sub_caste').on("change", function() {
	//Reset field
	$('#sub_caste_others').val('');
	
	if($(this).val() == '1')
		$('.div-sub_caste-others').removeClass('hide');
	else
		$('.div-sub_caste-others').addClass('hide');
});
$('#father_status').on("change", function() {
	//Reset field
	$('#father_occu').val('');
	
	if($(this).val() != '1')
		$('.div-father-occu').addClass('hide');
	else
		$('.div-father-occu').removeClass('hide');
});
$('#mother_status').on("change", function() {
	//Reset field
	$('#mother_occu').val('');
	
	if($(this).val() != '1')
		$('.div-mother-occu').addClass('hide');
	else
		$('.div-mother-occu').removeClass('hide');
});
$('#gender').on("change", function() {
	$('#seimurai').val('');
	
	if($(this).val() != '2')
		$('.div-seimurai').addClass('hide');
	else
		$('.div-seimurai').removeClass('hide');
	$('.div-photo .fileinput-new.thumbnail img').attr('src','/uploads/profile_images/'+$(this).val()+'.png');
});
$("#country").on("change", function() {
	var country_id = $(this).val();
	var state = $('#state');
	if(state.length == 0) return;
	$(state).empty();
	
	if($('#state').attr('multiple')=='multiple')
		$(state).val('');
	else {
		$(state).append('<option style="display:none" selected value="">- Select -</option>');
		$(state).prop('selectedIndex', 0);
		$('#div-state-other').addClass('hide');
	}
	
	if(country_id != '')
		$.post('/states/get_state_by_country', {country_id:country_id, _token:$('meta[name="csrf-token"]').attr("content")}, function(data){
			$.each(data, function (key, value) {
				$(state).append('<option value="'+value.id+'">'+value.name+'</option>');
			});
			$(state).selectpicker('refresh');
		});
	$(state).selectpicker('refresh');
});
$("#state").on("change", function() {
	var state_id = $(this).val();
	var district = $('#district');
	if(district.length == 0) return;
	$(district).empty();
	
	if($('#district').attr('multiple')=='multiple')
		$(district).val('');
	else {
		$(district).append('<option style="display:none" selected value="">- Select -</option>');
		$(district).prop('selectedIndex', 0);
		$('.div-district-others').addClass('hide');
	}
	
	if(state_id != '')
		$.post('/cities/get_cities_by_state', {state_id:state_id, _token:$('meta[name="csrf-token"]').attr("content")}, function(data){
			$.each(data, function (key, value) {
				$(district).append('<option value="'+value.id+'">'+value.name+'</option>');
			});
			$(district).selectpicker('refresh');
		});
	$(district).selectpicker('refresh');
	
	//Check for Others Option
	$('#state_others').val('');
	if(state_id == '1')
		$('.div-state-others').removeClass('hide');
	else
	$('.div-state-others').addClass('hide');
});
$('#district').on("change", function() {
	//Reset fields
	$('#distrct_others').val('');
	if($(this).val() == '1')
		$('.div-district-others').removeClass('hide');
	else
		$('.div-district-others').addClass('hide');
});
$("#reg-form #email,#reg-form #phone").on("change", function() {
	$.post('/register/check', {type:$(this).attr('name'), value:$(this).val(), _token:$('meta[name="csrf-token"]').attr("content")}, function(data){
		try {
			if(data.status != 'success') {
				swalWithAiz.fire('Error!',data.message,data.status);
			}
		} catch(e) {
			console.log(e);
		}
		console.log(data);
	});
});
$(document).ready( function () {
	$("#temple").parent().after('<div id="kovil-auto"></div>');
	$("#exp_nakshatra").parent().after('<div id="nakshatra-auto"></div>');
});
$("#temple").on("keyup", function() {
	var search = $(this).val();
	if(search == '')
		return false;
	
	var auto_complete = '';
	$.post('/kovils/get_kovil_list', {search:search, _token:$('meta[name="csrf-token"]').attr("content")}, function(data){
		$.each(data, function (key, value) {
			auto_complete += '<a href="#!" onclick="set_temple(\''+value.name_tamil+'\')">'+value.name_tamil+'</a><br>';
		});
		$('#kovil-auto').html(auto_complete);
	});
});
function set_temple(temple_name) {
	$("#temple").val(temple_name);
}
$("#exp_nakshatra").on("keyup", function() {
	var search = $(this).val();
	if(search == '')
		return false;
	search = search.split(" ");
	search = search[search.length - 1];
	
	var auto_complete = '';
	$.post('/nakshatra/get_autocomplete_list', {search:search, _token:$('meta[name="csrf-token"]').attr("content")}, function(data){
		$.each(data, function (key, value) {
			auto_complete += '<a href="#!" onclick="set_nakshatra(\''+value.name_tamil+'\')">'+value.name_tamil+'</a><br>';
		});
		$('#nakshatra-auto').html(auto_complete);
	});
});
function set_nakshatra(temple_name) {
	var old_value = $("#exp_nakshatra").val();
	old_value = old_value.substring(0, old_value.lastIndexOf(" "));
	$("#exp_nakshatra").val(old_value + ' ' +temple_name + ' ');
}
$('.tablehoro select').on("change", function() {
	var planets, in_text = [];
	if($('#cur_lang').data('lang') != 'E')
        planets = ['லக்னம்', 'சூரியன்', 'சந்திரன்', 'செவ்வாய்', 'ராகு', 'குரு', 'சனி', 'புதன்', 'கேது', 'சுக்கிரன்', 'மாந்தி', 'செவ்வாய் (வ)', 'குரு (வ)', 'சனி (வ)', 'புதன் (வ)', 'சுக்கிரன் (வ)'];
    else
        planets = ['Lagnam', 'Sun', 'Moon', 'Mars', 'Raagu', 'Jupiter', 'Saturn', 'Mercury', 'Kethu', 'Venus', 'Maanthi', 'Mars (V)', 'Jupiter (V)', 'Saturn (V)', 'Mercury (V)', 'Venus (V)'];
	
	$.each($(this).val(), function( i, val ) {
		in_text.push(planets[val-1]);
	});
	$(this).parents('td').find('p').text( in_text.join(', ') );
});
$('.tablehoro select').on("change", function() {
	var type = $(this).attr('name').indexOf('rasi') !== -1 ? 'rasi' : 'nava';
	$('.tablehoro select[name^='+type+'] option').show();
	$.each($('.tablehoro select[name^='+type+']').filter(function() { return $(this).val().length; }), function(i) {
		var selected = $(this).val();
		$('.tablehoro select[name^='+type+']').not(this).find('option').filter(function() { return $.inArray($(this).val(), selected) !== -1 }).hide();
	});
	$('.tablehoro select[name^='+type+']').selectpicker('refresh');
});
function process_horo(parent_div, language = '') {
	var planets;
	if(language != 'E')
		planets = ['லக்னம்', 'சூரியன்', 'சந்திரன்', 'செவ்வாய்', 'ராகு', 'குரு', 'சனி', 'புதன்', 'கேது', 'சுக்கிரன்', 'மாந்தி', 'செவ்வாய் (வ)', 'குரு (வ)', 'சனி (வ)', 'புதன் (வ)', 'சுக்கிரன் (வ)'];
    else
        planets = ['Lagnam', 'Sun', 'Moon', 'Mars', 'Raagu', 'Jupiter', 'Saturn', 'Mercury', 'Kethu', 'Venus', 'Maanthi', 'Mars (V)', 'Jupiter (V)', 'Saturn (V)', 'Mercury (V)', 'Venus (V)'];
	$.each($(parent_div+' .tablehoro p'), function(i, child) {
		var in_text = [];
		$.each($(child).text().split(', '), function( i, val ) {
			if(val == "") return;
			in_text.push(planets[val-1]);
		});
		$(child).text( in_text.join(', ') );
	});
}
function alert_login() {
	swalWithAiz.fire({title: 'Login!',text: "Please register or login to view profile details.",icon: 'warning',showCancelButton: true,confirmButtonText: 'Signin',cancelButtonText: 'Register'}).then((result) => {
		if(result.value)
			window.location = window.location.origin+'/login';
		else
			window.location = window.location.origin+'/register';
		SSMLoading('show');
	});
}
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#goTop').fadeIn();
    } else {
        $('#goTop').fadeOut();
    }
});
$("#goTop").click(function() {
    $("html, body").animate({scrollTop: 0}, 1000);
});

//Inits
const swalWithAiz = Swal.mixin({
	customClass: {
		confirmButton: 'btn btn-success btn-circle mr-2',
		cancelButton: 'btn btn-danger btn-circle ml-2'
	},
	buttonsStyling: false,
	allowEscapeKey: false,
	allowOutsideClick: false
});
function SSMLoading(option, title = 'Loading...') {
	if("show" == option) {
		Swal.fire({	title: title, allowEscapeKey:!1, allowOutsideClick:!1	});
		Swal.showLoading();
	} else if("hide" == option) {
		Swal.close();
	}
}

*/