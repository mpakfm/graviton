document.addEventListener("DOMContentLoaded", function(event) {
    handlers();
});

function handlers() {
    $('.js-item-by').click(function(){
        let name = $(this).data('name');
        let image = $(this).data('img');
        let popup = $('#popup-categories');
        popup.find('.popup-categories__title').html(name);
        if (!image) {
            image = '/local/templates/main/img/goods/no-image-240x130.png';
        }
        popup.find('picture img').attr('src', image);
    });
    $('#header-registration').submit(function(){
        $('#header-registration input').removeClass('js-error');
        $('#header-registration .form__checkbox-btn').removeClass('js-error');
        let cx = getCx();
        let isError = false;
        let email = $('#header-registration input[name="email"]');
        let name = $('#header-registration input[name="name"]');
        let phone = $('#header-registration input[name="phone"]');
        let inn = $('#header-registration input[name="inn"]');
        let company = $('#header-registration input[name="company"]');
        let robot = $('#header-registration input[name="robot"]');
        let terms = $('#header-registration input[name="terms"]');
        if (email.val() === '') {
            email.addClass('js-error');
            isError = true;
        }
        if (!robot.prop('checked')) {
            robot.next().addClass('js-error');
            isError = true;
        }
        if (!terms.prop('checked')) {
            terms.next().addClass('js-error');
            isError = true;
        }
        if (isError) {
            console.log('is error')
            return false;
        }
        url = '/local/ajax/controller.php?className=Partners&action=mailer';
        let data = {
            email: email.val(),
            name: name.val(),
            phone: phone.val(),
            inn: inn.val(),
            company: company.val(),
        };

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (data) {
                console.log('success data', data);
                if (data.result) {
                    $.fancybox.close();
                } else {

                }
            }
        });
        return false;
    });
}
