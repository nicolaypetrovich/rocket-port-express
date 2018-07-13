$(document).ready(function(){

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
})