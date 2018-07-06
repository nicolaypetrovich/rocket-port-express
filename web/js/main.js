$(document).ready(function(){

        /* ---Slider--- */
        $('.news__slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            nextArrow: '<button type="button" class="slick-next"><img src="img/r-arrow.png" alt="Далее"></button>',
            prevArrow: '<button type="button" class="slick-prev"><img src="img/l-arrow.png" alt="Назад"></button>'
        });
        $('.aboutus__slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            nextArrow: '<button type="button" class="slick-next"><img src="img/r-arrow-a.png" alt="Далее"></button>',
            prevArrow: '<button type="button" class="slick-prev"><img src="img/l-arrow-a.png" alt="Назад"></button>'
        });
        /* ---Slider end--- */

        /* ---"Red"phone function--- */
        function load( html ){
            var telHtml = html.html();
            var i = telHtml.indexOf(')');

            if (i){
                telHtml = telHtml.slice(0, i+1) + ' ' + '<span class="red">' + telHtml.slice(i+1) + '</span>'
            }
            html.html(telHtml)
        }

        $('.contact-box__tel').each(function () {
            load($(this));
        })
        /* ---"Red"phone function end--- */

        /* ---Private page Tabs--- */
//Function for tab
        $('.private__leftside li').on('click', function (e) {
            e.preventDefault();

            var dataTab = $(this).attr('data-tab');
            allTabHide();
            forAllLiTabRemoveActive();
            $(dataTab).show().addClass('active');
            $(this).addClass('active');
        });

// Function forAllTabsHide
        function allTabHide() {
            $('.privat__oo').hide();
            $('.privat__mo').hide();
            $('.privat__mn').hide();
            $('.privat__io').hide();
            $('.privat__ld').hide();
        };

        allTabHide();
        $('.privat__oo').show().addClass('active');


// Function forAllLiTabRemoveActive

        function forAllLiTabRemoveActive() {
            $('.private__leftside li').each(function () {
                $(this).removeClass('active')
            })
        };

        /* ---Private page Tabs end--- */

//youtube script
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        onYouTubeIframeAPIReady = function () {
            player = new YT.Player('player', {
                height: '370px',
                width: '100%',
                videoId: '_xBUmMWnyOY',  // youtube video id
                playerVars: {
                    'autoplay': 0,
                    'rel': 0,
                    'showinfo': 0
                },
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        var p = document.getElementById ("player");
        $(p).hide();

        // var t = document.getElementById ("thumbnail");
        // t.src = "http://img.youtube.com/vi/AkyQgpqRyBY/0.jpg";

        onPlayerStateChange = function (event) {
            if (event.data == YT.PlayerState.ENDED) {
                $('.start-video').fadeIn('normal');
            }
        };

        $(document).on('click', '.start-video', function (e) {
            $(this).hide();
            $("#player").show();
            $("#thumbnail_container").hide();
            player.playVideo();
        });
//youtube script end

// PopUp
        $(document).ready(function() {
            $('.popup-with-form').magnificPopup({
                type: 'inline',
                preloader: false,
                focus: '#name',

                // When elemened is focused, some mobile browsers in some cases zoom in
                // It looks not nice, so we disable it:
                callbacks: {
                    beforeOpen: function() {
                        if($(window).width() < 700) {
                            this.st.focus = false;
                        } else {
                            this.st.focus = '#name';
                        }
                    }
                }
            });
            $(document).on('click', '.popup-modal-dismiss', function (e) {
                e.preventDefault();
                $.magnificPopup.close();
            });
        });
// PopUp end

// Mask phone
        $(function(){
            $(".phone-mask").mask("+7(999) 999-99-99");
        });

// Search Page Button
        $('#search_btn').on('click', function(e){
            $('.searchbody__wrapper').addClass('show');
            e.preventDefault();
        });

/* ---Yandex map--- */

            // ymaps.ready(function () {
            //    var myMap = new ymaps.Map('map', {
            //            center: [59.129558, 37.918355],
            //            zoom: 17,
            //            controls: []
            //        }, {
            //            searchControlProvider: 'yandex#search'
            //        });
            //
            //    var myMap2 = new ymaps.Map('map2', {
            //        center: [59.129558, 37.918355],
            //        zoom: 17,
            //        controls: []
            //    }, {
            //        searchControlProvider: 'yandex#search'
            //    });
            //
            //
            //        // Создаём макет содержимого.
            //        // MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            //        //     '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            //        // );
            //
            //        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            //            hintContent: 'ул. К.Маркса, д. 78',
            //            balloonContent: 'ул. К.Маркса, д. 78',
            //            iconCaption: 'ул. К.Маркса, д. 78'
            //        }, {
            //            // Опции.
            //            // Необходимо указать данный тип макета.
            //            iconLayout: 'default#image',
            //            // Своё изображение иконки метки.
            //            iconImageHref: 'img/mark.png',
            //            // Размеры метки.
            //            iconImageSize: [44, 60],
            //            // Смещение левого верхнего угла иконки относительно
            //            // её "ножки" (точки привязки).
            //            iconImageOffset: [-20, -60],
            //        });
            //
            //    myPlacemark2 = new ymaps.Placemark(myMap2.getCenter(), {
            //        hintContent: 'ул. К.Маркса, д. 78',
            //        balloonContent: 'ул. К.Маркса, д. 78',
            //        iconCaption: 'ул. К.Маркса, д. 78'
            //    }, {
            //        // Опции.
            //        // Необходимо указать данный тип макета.
            //        // iconLayout: 'default#image',
            //        // Своё изображение иконки метки.
            //        iconImageHref: 'img/mark.png',
            //        // Размеры метки.
            //        iconImageSize: [44, 60],
            //        // Смещение левого верхнего угла иконки относительно
            //        // её "ножки" (точки привязки).
            //        iconImageOffset: [-20, -60],
            //        preset: 'islands#dotIcon',
            //        iconColor: '#ab1010'
            //    })
            //
            //    	myMap.geoObjects.add(myPlacemark);
            //   		myMap.behaviors.disable('scrollZoom')
            //
            // 		myMap2.geoObjects.add(myPlacemark2);
            // 		myMap2.behaviors.disable('scrollZoom')
            //        // .add(myPlacemarkWithContent);
            // });

            


});

function createPlacemark(coords) {
    return new ymaps.Placemark(coords, {
        iconCaption: 'поиск...'
    }, {
        preset: 'islands#redDotIconWithCaption',
        draggable: true
    });
}
function getAddress(coords, element) {
    element.properties.set('iconCaption', 'поиск...');
    ymaps.geocode(coords).then(function (res) {
        var firstGeoObject = res.geoObjects.get(0);
        element.properties.set({iconCaption:[firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()].filter(Boolean).join(', '),balloonContent: firstGeoObject.getAddressLine()});
    });
}