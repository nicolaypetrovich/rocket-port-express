'use strict';

$(document).ready(function () {

    function validateForm(form) {
        var form = document.querySelectorAll('form');

        var generateError = function (text) {
            var error = document.createElement('div');
            error.className = 'error';
            error.innerHTML = text;
            return error;
        };

        var removeValidate = function (self) {
            var errors = self.querySelectorAll('.error');

            for (var i = 0; i < errors.length; i++) {
                errors[i].remove();
            }
        };

        var showValidateError = function (html, text) {
            //html.classList.add('invalid');
            var error = generateError(text);
            html.parentElement.appendChild(error);
        };

        for (var i = 0; i < form.length; i++) {
            form[i].addEventListener('submit', function (e) {
                e.preventDefault();
                var self = this;

                var submit = true;

                var requiredForm = [].slice.call(this.querySelectorAll('.required'));

                // Delete validate

                removeValidate(this);

                // Test on empty field

                for (var i = 0; i < requiredForm.length; i++) {

                    requiredForm[i].classList.remove('invalid');

                    if (!requiredForm[i].value) {
                        showValidateError(requiredForm[i], '');
                        submit = false;
                    }
                }

                if (this.querySelector('.password') && this.querySelector('.passwordConfirmation')) {
                    var password = this.querySelector('.password');
                    var passwordConfirmation = this.querySelector('.passwordConfirmation');

                    // Test on password

                    if (password.value != passwordConfirmation.value) {
                        showValidateError(passwordConfirmation, 'Пароли не совпадают');
                        submit = false;
                    }

                }

                if (this.querySelector('.email')) {
                    var email = this.querySelector('.email');

                    // Test email input

                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                    if (!re.test(String(email.value).toLowerCase())) {
                        showValidateError(email, 'Пример e-mail: test@test.com');
                        submit = false;
                    }
                }

                if (this.querySelector('input[type=checkbox]')) {

                    // Test checkbox group

                    var checkboxGroupArr = [].slice.call(this.querySelectorAll('.checkbox-group.group-required'));

                    for (var i = 0; i < checkboxGroupArr.length; i++) {
                        var key = false;
                        var checkboxArr = [].slice.call(checkboxGroupArr[i].querySelectorAll('input[type=checkbox]'));

                        checkboxArr.forEach(function (elem) {
                            if (elem.checked) {
                                key = true;
                            }
                        });

                        if (!key) {
                            showValidateError(checkboxGroupArr[i], '');
                            showValidateError(checkboxGroupArr[i], '');
                            submit = false;
                        }

                    }


                }

                if (this.querySelector('input[type=radio]')) {

                    // Test radio group

                    var radioGroupArr = [].slice.call(this.querySelectorAll('.radio-group.group-required'));

                    for (var i = 0; i < radioGroupArr.length; i++) {
                        var key = false;
                        var radioArr = [].slice.call(radioGroupArr[i].querySelectorAll('input[type=radio]'));

                        radioArr.forEach(function (elem) {
                            if (elem.checked) {
                                key = true;
                            }
                        });

                        if (!key) {
                            showValidateError(radioGroupArr[i], 'Required field');
                            submit = false;
                        }

                    }
                }

                if (submit) {

                    var url = '';
                    var fd = $(this).serializeArray();
                    var form = this;
                    if ('ordercall__form' === this.id) {
                        url=createcalllink;
                    } else {
                        if ('faq__form' === this.id) {
                            url=createcus_message_link;
                        }
                    }
                    if ('' !== url) {
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: fd,
                            success: function (result) {
                                var success = document.querySelector('.form__success');
                                success.classList.add('showTab');
                                setTimeout(function () {
                                    success.classList.remove('showTab');
                                    $.magnificPopup.close();
                                    form.reset();
                                }, 1000);
                            },
                            error: function () {
                                console.log('Error while processing request');
                            }
                        });
                    }
                    // for ( var i = 0; i < requiredForm.length; i++ ){
                    //     console.log(requiredForm[i].value);
                    // }
                    // var success = document.querySelector('.form__success');
                    // success.classList.add('showTab');
                    // console.log('start');
                    // setTimeout(function () {
                    //     success.classList.remove('showTab');
                    //     console.log('end');
                    //     self.submit();
                    // },1000);
                }
            })
        }
    }

    // $('#entry__form').on('submit', function(e){
    //     e.preventDefault();
    //     var username = $(this)[0].elements[0].value,
    //         password = $(this)[0].elements[1].value,
    //         rememberMe = $(this)[0].elements[2].value;
    //
    //     $.ajax({
    //         method:'POST',
    //         url:'login',
    //         data:{
    //             username:username,
    //             password:password,
    //             rememberMe:rememberMe
    //         },
    //         success:function(r){if(r=='fine'){location.reload();}else{console.log(r)}},
    //         error:function(r){console.log(r)}
    //     })
    // });


    window.addEventListener('load', function () {
        validateForm()
    })

});

$('#logout_link').on('click', function(e){
    e.preventDefault();
    $.ajax({
        method:"POST",
        url:"logout",
        data:'logout',
        success:function(r){location.reload();},
        error:function(r){console.log('error')}
    })
});

$('body').on('beforeSubmit', 'form#entry__form', function () {
    var form = $(this);
    $('#login__entry_error')[0].innerHTML = '';
    if ($('#checkbox23').prop('checked') == false){
        $("#checkbox23").parent().addClass("invalid");
        return false;
    }
    if (form.find('.has-error').length) {
        return false;
    }
    $.ajax({
        url: form.attr('action'),
        type: 'post',
        data: form.serialize(),
        success: function (response) {
            $('#login__entry_error')[0].innerHTML = response.error[0];
        }
    });
    return false;
});