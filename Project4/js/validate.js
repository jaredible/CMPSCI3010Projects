$(function () {
    $('#inputZipcode').mask('00000-0000');
    $('#inputPhone').mask('000-000-0000');
    $('#inputBirthDate').mask('00/00/0000');

    var validator = $('#registration').validate({
        rules: {
            inputUsername: {
                required: true,
                minlength: 6,
                maxlength: 50
            },
            inputPassword: {
                required: true,
                minlength: 8,
                maxlength: 50,
                hasAtLeastOneLowercaseLetter: true,
                hasAtLeastOneUppercaseLetter: true,
                hasAtLeastOneNumber: true,
                hasAtLeastOneSpecialCharacter: true
            },
            inputConfirm: {
                required: true,
                minlength: 8,
                maxlength: 50,
                hasAtLeastOneLowercaseLetter: true,
                hasAtLeastOneUppercaseLetter: true,
                hasAtLeastOneNumber: true,
                hasAtLeastOneSpecialCharacter: true,
                equalTo: '#inputPassword'
            },
            inputNameFirst: {
                required: true,
                maxlength: 50
            },
            inputNameLast: {
                required: true,
                maxlength: 50
            },
            inputAddress1: {
                required: true,
                maxlength: 100
            },
            inputAddress2: {
                maxlength: 100
            },
            inputCity: {
                required: true,
                maxlength: 50
            },
            inputState: {
                required: true,
                maxlength: 2
            },
            inputZipcode: {
                required: true,
                minlength: 5,
                maxlength: 10,
                hasZipcodeFormat: true
            },
            inputPhone: {
                required: true,
                maxlength: 12,
                hasPhoneFormat: true
            },
            inputEmail: {
                required: true,
                hasEmailFormat: true
            },
            inputGender: {
                required: true
            },
            inputMaritalStatus: {
                required: true
            },
            inputBirthDate: {
                required: true,
                hasDateFormat: true
            }
        },
        highlight: function (element) {
            var ele = $(element);
            var par = ele.parent().parent();
            if (!(ele.get(0).id === 'inputGenderMale' || ele.get(0).id === 'inputMaritalStatusSingle')) {
                if (!ele.hasClass('is-invalid')) {
                    ele.fadeOut(function() {
                        ele.fadeIn();
                    });
                }

                ele.removeClass('is-valid').addClass('is-invalid');
            } else {
                par = par.parent().parent();
            }

            if (ele.get(0).id !== 'inputAddress2') {
                par.find('.error').show();
                par.find('.input').removeClass('col-md-9').addClass('col-md-8');
            }
        },
        unhighlight: function (element) {
            var ele = $(element);
            var par = ele.parent().parent();
            if (!(ele.get(0).id === 'inputGenderMale' || ele.get(0).id === 'inputMaritalStatusSingle')) {
                ele.removeClass('is-invalid').addClass('is-valid');
            } else {
                par = par.parent().parent();
            }

            if (ele.get(0).id !== 'inputAddress2') {
                par.find('.error').hide();
                par.find('.input').removeClass('col-md-8').addClass('col-md-9');
            }
        },
        errorPlacement: function(error, element) {
            if (element.attr("type") == "radio") {
                error.insertAfter(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
});

$.validator.addMethod('hasAtLeastOneLowercaseLetter', function (value, element) {
    return this.optional(element) || /(.*[a-z].*)+/.test(value);
}, 'Must have at least one lowercase letter');

$.validator.addMethod('hasAtLeastOneUppercaseLetter', function (value, element) {
    return this.optional(element) || /(.*[A-Z].*)+/.test(value);
}, 'Must have at least one uppercase letter');

$.validator.addMethod('hasAtLeastOneNumber', function (value, element) {
    return this.optional(element) || /(.*[0-9].*)+/.test(value);
}, 'Must have at least one number');

$.validator.addMethod('hasAtLeastOneSpecialCharacter', function (value, element) {
    return this.optional(element) || /(.*[#?!@$%^&*-].*)+/.test(value);
}, 'Must have at least one special character');

$.validator.addMethod('hasZipcodeFormat', function (value, element) {
    return this.optional(element) || /^[0-9]{5}$/.test(value) || /^[0-9]{5}-[0-9]{4}$/.test(value);
}, 'Zipcode format is xxxxx or xxxxx-xxxx');

$.validator.addMethod('hasPhoneFormat', function (value, element) {
    return this.optional(element) || /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/.test(value);
}, 'Phone format is xxx-xxx-xxxx');

$.validator.addMethod('hasEmailFormat', function (value, element) {
    return this.optional(element) || /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{1,5})$/.test(value);
}, 'Email format is x@x.x');

$.validator.addMethod('hasDateFormat', function (value, element) {
    return this.optional(element) || /(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d/.test(value);
}, 'Date format is MM/dd/yyyy');