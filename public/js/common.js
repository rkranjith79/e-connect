$(document).on('click', '.close', function (e) {
    $('.errorMsg').html('');
    $('input, select').each(function () {
        if ($(this).is('input')) {
            $(this).val('');
        } else if ($(this).is('select')) {
            $(this).prop('selectedIndex', 0);
        }
    });
});
