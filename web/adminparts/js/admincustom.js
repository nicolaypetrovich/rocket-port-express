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

window.onload = function(){
    "use strict";
    var modal = $("#MediaLibrary"),
        MediaBtnList = $(".media-open-button"),
        LoadMoreMedia = $("#medialoadmore");

    $.each( MediaBtnList, function(){
        $(this).on('click', function(){
            $(this).addClass('active-media');
            modal[0].style.display = 'block';
            if(LoadMoreMedia.data('page') == 0) {
                $.ajax({
                    method:"POST",
                    url:HomeUrl + '/admin/admin/media-library',
                    data:{_csrf:MediaCsrf,counter:LoadMoreMedia.data('page')},
                    success:function(res){
                        $('.inner-media').append(res[0]);
                        if(!res[1]){
                            LoadMoreMedia[0].style.display = "none";
                        }
                        LoadMoreMedia.data('page', res[2]);
                    },
                    error:function(res){console.dir(res);}
                })
            }
        })
    });

    LoadMoreMedia.on('click', function(){
        $.ajax({
            method:"POST",
            url:HomeUrl + '/admin/admin/media-library',
            data:{_csrf:MediaCsrf,counter:LoadMoreMedia.data('page')},
            success:function(res){
                $('.inner-media').append(res[0]);
                if(!res[1]){
                    LoadMoreMedia[0].style.display = "none";
                }
                LoadMoreMedia.data('page', res[2]);
            },
            error:function(res){console.dir(res);}
        })
    });

    $('.inner-media').on('click', '.media-selected', function(){
        var CurrentMediaBtn = $('.active-media'),
            parent = $('.active-media').parent().parent();

        $(parent).find("img").attr('src', $(this).attr('src'));
        $(parent).find("input").val($(this).data('imageid'));
        CurrentMediaBtn.removeClass('active-media');
        modal[0].style.display = "none";
    });

    var span = $(".close-media")[0];
    span.onclick = function() {
        modal[0].style.display = "none";
    };

    tinymce.init({
        selector: "textarea",
        language : 'ru',
        browser_spellcheck: true,
        branding: false,
        statusbar: false,
        extended_valid_elements : "i",
        custom_elements: "i",
        width: '100%',
        height: 400,
        autoresize_min_height: 400,
        autoresize_max_height: 800,
        plugins: [
            'advlist autolink link image lists charmap print preview autoresize',
            'searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking',
            'table contextmenu emoticons paste textcolor code'
        ],
        toolbar1: "styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify  | table | subscript superscript | charmap | ltr rtl | visualchars visualblocks",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image code | insertdatetime preview | forecolor backcolor | mybutton mybutton1 mybutton2",
        setup: function(editor) {
            editor.addButton('mybutton', {
                text: 'Текст с желтой полосой',
                icon: false,
                onclick: function () {
                    editor.insertContent('<div class="yellow_border">paste your code here!</div>');
                }
            });
            editor.addButton('mybutton1', {
                text: 'Вставляем блок услуг',
                icon: false,
                onclick:function () {
                    editor.insertContent('<div id="value">INSERTVALUE</div>');
                }
            });
            editor.addButton('mybutton2', {
                text: 'Вставляем блок услуг',
                icon: false,
                onclick:function () {
                    displayMediaLibrary();
                }
            });
        }
    });

    function displayMediaLibrary(){
        $('#media').show();
    }

    $('#test').on('click', function(e){
        e.preventDefault();
        var test = tinyMCE.activeEditor.getContent();
        console.dir(test);
    });
};




//yandex map functions
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