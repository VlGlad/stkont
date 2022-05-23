$(function () {
    $('input[name="phone"]').mask("9(999) 999-9999");
});

$(document).ready(function () {
    // checkbox
    // ------------------------------------------------------------


    $('.custom-check input[type="checkbox"]').on('click', function() {

        var $this = $(this);

        $($this).closest('label').toggleClass('active');

    });

    $("#form").submit(function () {
        $("#form button").prop("disabled", true).css({
            "background-color": "#b6b6b6",
            "color": "#FFF"
        }).text("Ждите...");
        $.ajax({
            type: "POST",
            url: "ok.php",
            data: $(this).serialize()
        }).done(function () {
            // yaCounter53745795.reachGoal('ORDER2');
            $('#form').html("<div style='font-size:24px; margin-top:10px; color:#000;'>Спасибо!<br> Мы свяжемся с вами");
        });
        return false;
    });



      $("body").on("click",".mobile-toggle-menu", function (event) {
         $('nav').toggleClass('active');
      });
      $("body").on("click",".map-block", function () {
        $(this).hide();
     });
      $("body").on("click",".close-mobile-menu", function (event) {
        $('nav').removeClass('active');
     });

     $('.second-menu-close').click(function(){
        var secondMenu = $('.second-menu');
        secondMenu.removeClass('open');
    });
    $(document).on('click', function(event){
        if ($(event.target).closest(".header__toggler__span, .second-menu, .header__toggler").length) return;
        var secondMenu = $('.second-menu');
        secondMenu.removeClass('open');
        event.stopPropagation();
    });
     $('.header__toggler').click(function(){
        $('.second-menu').toggleClass('open');
    })
});

$(document).ready(function () {
    $(function () {
        var min = $('#gruzMin').val();
        var max = $('#gruzMax').val();

        min = +min;
        max = +max;
        $('#price').change(function () {
            var val = $(this).val();
            $('#slider_price').slider("values", 0, val);
        });

        $('#price2').change(function () {
            var val2 = $(this).val();
            $('#slider_price').slider("values", 1, val2);
        });

        $("#slider_price").slider({
            range: true,
            min: min,
            step: 1,
            max: max,
            values: [min, max],
            slide: function (event, ui) {
                $('#price').val(ui.values[0]);
                $('#price2').val(ui.values[1]);
            }
        });
        $('#price').val($('#slider_price').slider("values", 0));
        $('#price2').val($('#slider_price').slider("values", 1));
    });

    $(function () {
        var min = $('#hightMin').val();
        var max = $('#hightMax').val();

        min = +min;
        max = +max;
        $('#price-2').change(function () {
            var val = $(this).val();
            $('#slider_price-2').slider("values", 0, val);
        });

        $('#price2-2').change(function () {
            var val2 = $(this).val();
            $('#slider_price-2').slider("values", 1, val2);
        });

        $("#slider_price-2").slider({
            range: true,
            min: min,
            step: 1,
            max: max,
            values: [min, max],
            slide: function (event, ui) {
                $('#price-2').val(ui.values[0]);
                $('#price2-2').val(ui.values[1]);
            }
        });
        $('#price-2').val($('#slider_price-2').slider("values", 0));
        $('#price2-2').val($('#slider_price-2').slider("values", 1));
    });
    $('.contact-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

    $("#toTop").click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
    });


});