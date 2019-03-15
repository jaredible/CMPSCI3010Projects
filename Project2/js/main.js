$(function () {
    console.log('Testing');
    $("form[name='registration']").validate({
        ignore: '[name="inputAddress2"], [name="inputGender"], [name="inputMaritalStatus"]',
        rules: {
            inputUsername: {
            },
            inputPassword: {
                required: true,
                atLeastOneLowercaseLetter: true,
                atLeastOneUppercaseLetter: true,
                atLeastOneNumber: true,
                atLeastOneSymbol: true
            },
            inputConfirm: {
                required: true,
                atLeastOneLowercaseLetter: true,
                atLeastOneUppercaseLetter: true,
                atLeastOneNumber: true,
                atLeastOneSymbol: true,
                equalTo: '[name="inputPassword"]'
            },
            inputNameFirst: {
                required: true
            },
            inputNameLast: {
                required: true
            },
            inputAddress1: {
                required: true
            },
            inputCity: {
            },
            inputState: {
            },
            inputEmail: { // TODO not checking for .com
                email: true
            },
            inputGender: {
                required: ""
            }, inputMaritalStatus: {
                required: ""
            },
            inputBirthDate: {
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
});

/**
 * Custom validator for contains at least one lower-case letter
 */
$.validator.addMethod("atLeastOneLowercaseLetter", function (value, element) {
    return this.optional(element) || /[a-z]+/.test(value);
}, "Must have at least one lowercase letter");
 
/**
 * Custom validator for contains at least one upper-case letter.
 */
$.validator.addMethod("atLeastOneUppercaseLetter", function (value, element) {
    return this.optional(element) || /[A-Z]+/.test(value);
}, "Must have at least one uppercase letter");
 
/**
 * Custom validator for contains at least one number.
 */
$.validator.addMethod("atLeastOneNumber", function (value, element) {
    return this.optional(element) || /[0-9]+/.test(value);
}, "Must have at least one number");
 
/**
 * Custom validator for contains at least one symbol.
 */
$.validator.addMethod("atLeastOneSymbol", function (value, element) {
    return this.optional(element) || /[!@#$%^&*()]+/.test(value);
}, "Must have at least one symbol");