$(document).ready(function () {
    if ($('#news-date').length) {
        $('#news-date').datepicker(
            {
                format: 'yyyy-mm-dd'
            }
        );
    }

    $('.btn-plus').on('click', function(){
        console.log('removed');
        // tinyMCE.remove('.container-fluid textarea');
        tinymce.remove('.container-fluid textarea');
        var f = $(this).prev('.box-item-repeat');
        $(this).prev('.box-item-repeat').clone(true).insertAfter(f);
        $(this).prev('.box-item-repeat').find("input:text").val("");
        $(this).prev('.box-item-repeat').find("img").attr("src",'');
        $(this).prev('.box-item-repeat').find("input:hidden").val('');
        $(this).prev('.box-item-repeat').find("textarea").attr('id', 'area'+$('textarea').length+1).val("");
            initializeTinyMce();
    });


    $('.btn-close').on('click', function(){
        $(this).parent().remove();
    });


    $('.call-close').on('click', function(){
        $(this).parents('tr').remove();
    });


    $('.btn-plus-first').on('click', function(){
        var b = $('.box-item-del-inner:not(.active)');
        b.clone(true).insertBefore($(this)).addClass('active');
        var count = $('.box-item-del-inner.active').length,
            obj = $(this).prev();
        $(obj).find('input').first().attr('name', 'delivery[repeater]['+count+'][title]');
        $(obj).find('input').eq(1).attr('name', 'delivery[repeater]['+count+'][liststyle]');
    });

    $('.btn-plus-second').on('click', function(){
        var b = $(this).prev('.box-item-del-data');
        $(this).prev('.box-item-del-data').clone(true).insertAfter(b).addClass('active');
        $(this).prev('.box-item-del-data').find("input:text").val("");
        var count = $('.box-item-del-inner').length - 1,
            count1 = $(this).parent().find('.box-item-del-data.active').length;
        $(this).prev('.box-item-del-data').find("input").eq(0).attr('name', 'delivery[repeater]['+count+'][repeater]['+count1+'][char]');
        $(this).prev('.box-item-del-data').find("input").eq(1).attr('name', 'delivery[repeater]['+count+'][repeater]['+count1+'][value]');
    });

    $('.btn.btn-block.btn-danger').on('click', function(e){
        e.preventDefault();
        $(this).parent().prev().val('');
        console.dir($(this).parent().prev().prev());
        $(this).parent().prev().prev().attr('src', '');
    })

    // $('input').iCheck({
    //     checkboxClass: 'icheckbox_square-blue',
    //     radioClass: 'iradio_square-blue',
    //     increaseArea: '20%' /* optional */
    // });
    //

});

function createPlacemark(coords) {
    return new ymaps.Placemark(coords, {
        iconCaption: 'поиск...'
    }, {
        preset: 'islands#redDotIconWithCaption',
        draggable: true
    });
}
function getAddress(coords,mainMapPlacemark) {
    $('#maps_cords').val(coords);
    ymaps.geocode(coords).then(function (res) {
        var firstGeoObject = res.geoObjects.get(0);

        mainMapPlacemark.properties
            .set({
                iconCaption: [
                    firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                    firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                ].filter(Boolean).join(', '),
                balloonContent: firstGeoObject.getAddressLine()
            });
    });
}