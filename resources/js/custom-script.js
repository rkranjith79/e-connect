
let csrf_token = $('meta[name="csrf-token"]').attr('content');

$('.close-layer').on("click", nav_toggler);
function nav_toggler() {
    $('body').toggleClass('nav-open');
    $('.close-layer').toggleClass('d-block');
    $('.nav-toggle-icon span').toggleClass('hide');
    return false;
}



$(window).scroll(function () {
    if ($(this).scrollTop()) {
        $('#goTop').fadeIn();
    } else {
        $('#goTop').fadeOut();
    }
});
$("#goTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1000);
});






function interestedOrIgnored(interested_or_ignored, interested_profile_id, interested_profile_uuid, profile_id, profile_uuid) {


    if (interested_profile_uuid && interested_profile_id && profile_id && profile_uuid) {
        if (interested_or_ignored == "interested") {
            var url = "/user/interested-profile/" + interested_profile_id + "/u/" + interested_profile_uuid + "/my/" + profile_id + "/u/" + profile_uuid;
            $(".bubbling-animation.bubbling-heart").removeClass('d-none');

        } else {
            var url = "/user/ignored-profile/" + interested_profile_id + "/u/" + interested_profile_uuid + "/my/" + profile_id + "/u/" + profile_uuid;
            $(".bubbling-animation.bubbling-heart, .bubbling-animation.bubbling-ban").removeClass('d-none');
        }

        $.ajax({
            type: "GET",
            url: url, // Replace with your server endpoint
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            contentType: false, // Set content type to false for FormData
            processData: false, // Do not process the data, let FormData handle it

            success: function (response) {
                if (response.status == 200) {

                    // 	Swal.fire({
                    // 		title: 'Success!',
                    // 		text: interested_or_ignored + " Updated Successful",
                    // 		icon: 'success',
                    // 		timer: 2000, // Set a timer to automatically close the alert after 2 seconds
                    // 		timerProgressBar: true,
                    // 		showConfirmButton: false
                    // 	}).then(() => {
                    // 		// Redirect to the specified URL
                    // 	});

                } else {
                } // Handle the server response as needed
                setTimeout(
                    function () {
                        //do something special
                        location.reload();
                        setTimeout(
                            function () {
                                //do something special
                                $(".bubbling-animation.bubbling-heart, .bubbling-animation.bubbling-ban").addClass('d-none');

                            }, 5000);

                    }, 1000);


            },
            error: function (error) {
                $(".bubbling-animation.bubbling-heart, .bubbling-animation.bubbling-ban").addClass('d-none');
            }
        });
    }

}

function checkPurchasedProfile(purchased_profile_id, purchased_profile_uuid, profile_id, profile_uuid) {

    if (purchased_profile_id && purchased_profile_uuid && profile_id && profile_uuid) {

        var url = "/user/purchase-profile-availability/" + purchased_profile_id + "/u/" + purchased_profile_uuid + "/my/" + profile_id + "/u/" + profile_uuid;

        $.ajax({
            type: "GET",
            url: url, // Replace with your server endpoint
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            contentType: false, // Set content type to false for FormData
            processData: false, // Do not process the data, let FormData handle it

            success: function (response) {
                if (response.status == 200) {
                    if (response.type == "purchased") {
                        window.location.replace(response.redirect)
                    } else if (response.type == "plan") {
                        window.location.replace(response.redirect)
                    } else if (response.type == "payment") {
                        if (response.mode == "razor_pay" && response.razorpay_config) {
                            paymentRazorPay(response.razorpay_config, response.redirect, purchased_profile_id, purchased_profile_uuid, profile_id, profile_uuid);
                        } else if (response.mode == "phonepe" && response.phonepe_config) {
                            window.location.replace(response.phonepe_config.redirect);
                        }
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong',
                            icon: 'warning',
                            timer: 2000, // Set a timer to automatically close the alert after 2 seconds
                            timerProgressBar: true,
                            showConfirmButton: false
                        }).then(() => {
                            // Redirect to the specified URL
                            location.reload();
                        });
                    }
                } else {
                } // Handle the server response as needed
            },
            error: function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong',
                    icon: 'warning',
                    timer: 2000, // Set a timer to automatically close the alert after 2 seconds
                    timerProgressBar: true,
                    showConfirmButton: false
                }).then(() => {
                    // Redirect to the specified URL
                    location.reload();
                });
            }
        });
    }

}

function paymentRazorPay(razorpay_config, redirect, purchased_profile_id, purchased_profile_uuid, profile_id, profile_uuid) {
    var razorpay_config = razorpay_config;
    razorpay_config.handler = function (response) {
        // alert(response.razorpay_payment_id);
        // alert(response.razorpay_order_id);
        // alert(response.razorpay_signature);
        var store = {};
        store.razorpay_payment_id = response.razorpay_payment_id;
        store.razorpay_order_id = response.razorpay_order_id;
        store.razorpay_signature = response.razorpay_signature;
        store._token = csrf_token;
        store.plan_id = razorpay_config.plan_id
        setPurchasePlan(purchased_profile_id, purchased_profile_uuid, profile_id, profile_uuid, redirect, store)
    };

    var rzp1 = new Razorpay(razorpay_config);
    rzp1.on('payment.failed', function (response) {

        Swal.fire({
            title: 'Error!',
            text: 'Payment Failed',
            icon: 'warning',
            timer: 2000, // Set a timer to automatically close the alert after 2 seconds
            timerProgressBar: true,
            showConfirmButton: false
        }).then(() => {
            // Redirect to the specified URL
            location.reload();
        });

        // alert(response.error.code);
        // alert(response.error.description);
        // alert(response.error.source);
        // alert(response.error.step);
        // alert(response.error.reason);
        // alert(response.error.metadata.order_id);
        // alert(response.error.metadata.payment_id);
    });
    rzp1.open();
}


function setPurchasePlan(purchased_profile_id, purchased_profile_uuid, profile_id, profile_uuid, redirect, response) {

    if (purchased_profile_id && purchased_profile_uuid && profile_id && profile_uuid) {

        var url = "/user/purchase-plan/" + profile_id + "/u/" + profile_uuid;

        $.ajax({
            type: "GET",
            url: url, // Replace with your server endpoint
            data: response,
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            success: function (response) {
                if (response.status == 200) {
                    window.location.replace(redirect);
                }
                // Handle the server response as needed
            },
            error: function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong',
                    icon: 'warning',
                    timer: 2000, // Set a timer to automatically close the alert after 2 seconds
                    timerProgressBar: true,
                    showConfirmButton: false
                }).then(() => {
                    // Redirect to the specified URL
                    location.reload();
                });
            }
        });
    }

}

function dependencyDropDown(parent_id, child_id, data_id) {

    var child_id = child_id;
    var parent_id = parent_id;
    var data_id = data_id;
    $('#' + child_id).selectpicker();
    $('#' + parent_id).change(function () {
        var selectedCountryId = $(this).val();
        $('#' + child_id).find('option').each(function () {
            if ($(this).data(data_id) == selectedCountryId || selectedCountryId === "") {
                // $(this).prop('disabled', false);
                $(this).show();
            } else {
                // $(this).prop('disabled', true);
                $(this).hide();
            }
        });
        $('#' + child_id).selectpicker("destroy");
        $('#' + child_id).selectpicker('refresh');
    });
}
