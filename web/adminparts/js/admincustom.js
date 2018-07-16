$(document).ready(function () {
    if ($('#news-date').length) {
        $('#news-date').datepicker(
            {
                format: 'yyyy-mm-dd'
            }
        );
    }

    $('.btn-plus').on('click', function(){
        var f = $(this).prev('.box-item-repeat');
        $(this).prev('.box-item-repeat').clone(true).insertAfter(f);
        $(this).prev('.box-item-repeat').find("input:text").val("");
        $(this).prev('.box-item-repeat').find("textarea").val("");
    });


    $('.btn-close').on('click', function(){
        $(this).parent().remove();
    });


    $('.call-close').on('click', function(){
        $(this).parents('tr').remove();
    });


    $('.btn-plus-first').on('click', function(){
        var b = $(this).parent().find('.box-item-del-inner:not(.active)');
        b.clone(true).insertBefore($(this)).addClass('active');
    });
    $('.btn-plus-second').on('click', function(){
        var b = $(this).prev('.box-item-del-data');
        $(this).prev('.box-item-del-data').clone(true).insertAfter(b).addClass('active');
        $(this).prev('.box-item-del-data').find("input:text").val("");
    });

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

    document.getElementById('maps_cords').value = coords;
    //console.dir(coords);
    // mainMapPlacemark.properties.set('iconCaption', 'поиск...');
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