$(document).ready(function() {
    if (getCookie('city_ip_link') !== null && getCookie('city_ip_link') !== '' && getCookie('city_ip_link') != 'default' && getCookie('city_ip_info') !== 'done') {
        $('.js-choose-city-yes').attr('href', '/' + getCookie('city_ip_link'));
        $('.js-choose-city-no').attr('href', '/filials');
        $('div.city-modal__title').html('Ваш город ' + getCookie('city_ip_name') + '?');
        var inst = $('[data-remodal-id=city-select]').remodal();
        inst.open();
        delete_cookie('city_ip_link');
        delete_cookie('city_ip_name');
        setCookie('city_ip_info', 'done', 1);
    }

    $("body").on('click', '.actual_price', function (e){
        e.preventDefault();
        let name = $(this).closest('.product__info').find('.product__name').html();
        $('[data-remodal-id=actual_price]').find('input[name=product_title]').val(name);
        var inst = $('[data-remodal-id=actual_price]').remodal();
        inst.open();
    });
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function delete_cookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}


$(window).bind('pageshow', function (){

    if ($('#action-tech').attr("checked") == 'checked' && $('#action-tech').attr("checked") != undefined){
        $('#action-tech').closest('label').addClass('active');

        var form = $('#filter-form');

        $.ajax({
            type: "POST",
            url: "/filter",
            data: form.serialize(),
            success: function (data) {
                if (data.status === 'ok') {
                    $('.actions__list').html(data.html);
                }
            }
        });
    }
    if ($('select[name=brand]').val() != '0' && $('select[name=brand]').val() != undefined){
        var form = $('#filter-form');

        $.ajax({
            type: "POST",
            url: "/filter",
            data: form.serialize(),
            success: function (data) {
                if (data.status === 'ok') {
                    $('.actions__list').html(data.html);
                }
            }
        });
    }
});

$(document).ready(function () {
    // if ($('#catalog-scroll').length) {
    //     var dest = $('#catalog-scroll');
    //     if (dest !== undefined && dest !== '') { // проверяем существование
    //         $('html').animate({
    //                 scrollTop: $(dest).offset().top // прокручиваем страницу к требуемому элементу
    //             }, 500 // скорость прокрутки
    //         );
    //     }
    // }

    $(document).on('change', '#filter-form :input,select', function (){
        var form = $('#filter-form');

        $.ajax({
            type: "POST",
            url: "/filter",
            data: form.serialize(),
            success: function (data) {
                if (data.status === 'ok') {
                    $('.actions__list').html(data.html);
                }
            }
        });
    });
    $(document).on('slidechange', '#slider_price, #slider_price-2',function (){
        var form = $('#filter-form');

        $.ajax({
            type: "POST",
            url: "/filter",
            data: form.serialize(),
            success: function (data) {
                if (data.status === 'ok') {
                    $('.actions__list').html(data.html);
                }
            }
        });
    });



    $('.main-form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        if (typeof form.find('input[name=phone]') != 'undefined' && form.find('input[name=phone]').val() == '')
            return inputError(form.find('input[name=phone]'));
        if (typeof form.find('input[name=email]') != 'undefined' && form.find('input[name=email]').val() == '')
            return inputError(form.find('input[name=email]'));
        if (typeof form.find('input[name=name]') != 'undefined' && form.find('input[name=name]').val() == '')
            return inputError(form.find('input[name=name]'));
        if (typeof form.find('input[name=brand]') != 'undefined' && form.find('input[name=brand]').val() == '')
            return inputError(form.find('input[name=brand]'));
        if (typeof form.find('input[name=serial-nom]') != 'undefined' && form.find('input[name=serial-nom]').val() == '')
            return inputError(form.find('input[name=serial-nom]'));
        if (typeof form.find('input[name=model]') != 'undefined' && form.find('input[name=model]').val() == '')
            return inputError(form.find('input[name=model]'));
        if (typeof form.find('input[name=year]') != 'undefined' && form.find('input[name=year]').val() == '')
            return inputError(form.find('input[name=year]'));
        if (typeof form.find('textarea[name=message]') != 'undefined' && form.find('textarea[name=message]').val() == '')
            return inputError(form.find('textarea[name=message]'));

        var buttonText = form.find('button').text();
        var reachgoal = form.attr('reachgoal');
        $.ajax({
            type: "POST",
            url: "/ok",
            data: form.serialize(),
            beforeSend: function(jqXHR, textStatus) {
                form.find('button').addClass('btn-wait');
                form.find('button').text('Ждите...');
            },
            success: function (data) {
                if (data.status === 'ok') {
                    yaCounter87413096.reachGoal('zayavka');
                    location.href = data.location;
                }
            },
            complete: function(jqXHR, textStatus) {
                form.find('button').removeClass('btn-wait');
                form.find('button').text(buttonText);
            }
        });
    });

    $('#form-thx').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        if (typeof form.find('input[name=email]') != 'undefined' && form.find('input[name=email]').val() == '')
            return inputError(form.find('input[name=email]'));
        var buttonText = form.find('button').text();
        var reachgoal = form.attr('reachgoal');
        $.ajax({
            type: "POST",
            url: "/ok",
            data: form.serialize(),
            beforeSend: function(jqXHR, textStatus) {
                form.find('button').addClass('btn-wait');
                form.find('button').text('Ждите...');
            },
            success: function (data) {
                if (data.status === 'ok') {
                    yaCounter87413096.reachGoal('zayavka');
                    location.href = '/'+data.city;
                }
            },
            complete: function(jqXHR, textStatus) {
                form.find('button').removeClass('btn-wait');
                form.find('button').text(buttonText);
            }
        });
    });
});



// Открытие модального окна для ошибок -------------------------------------------------------------
function errorModal(message) {
    var modal = $('[data-remodal-id=error]');
    modal.find('p').html(message);
    var inst = modal.remodal();
    inst.open();
    return inst;
}

// Открытие модального окна для уведомлений --------------------------------------------------------
function successModal(message) {
    var modal = $('[data-remodal-id=success]');
    modal.find('p').html(message);
    var inst = modal.remodal();
    inst.open();
    return inst;
}

// Открытие модального окна с подтвеждением --------------------------------------------------------
function confirmModal(message) {
    var modal = $('[data-remodal-id=confirm]');
    modal.find('p').html(message);
    var inst = modal.remodal();
    inst.open();
    return inst;
}

// Событие закрытия модального окна ошибок ---------------------------------------------------------
var closeErrorModal = function () {
};
$(document).on('closed', '[data-remodal-id=error]', function (e) {
    closeErrorModal();
});

// Событие закрытия модального окна уведомлений ----------------------------------------------------
var closeSuccessModal = function () {
};
$(document).on('closed', '[data-remodal-id=success]', function (e) {
    closeSuccessModal();
});

// Подтверждение в модальном окне ------------------------------------------------------------------
var confirmationConfirmModal = function () {
};
$(document).on('confirmation', '[data-remodal-id=confirm]', function (e) {
    confirmationConfirmModal();
});


function inputError(formElem) {
    if (typeof stopInputError === 'undefined')
        window.stopInputError = false;

    // Продолжаем только если inputError() ещё не запущен
    if (stopInputError == false)
        stopInputError = true;
    else
        return false;

    var bcolor = formElem.css('background-color');

    formElem.css({'background-color': '#fed1dd'});
    formElem.focus();

    setTimeout(function () {
        formElem.css({'background-color': bcolor});
        stopInputError = false;
    }, 500);
}