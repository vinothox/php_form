/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#username").keyup(function () {
        if (!($("#username").val().match('^[a-zA-Z]{3,16}$'))) {
            $('#unerr').removeClass('hidden');
            $('#unerr').html('Name must contain only alphabets');
        } else {
            $('#unerr').addClass('hidden');
        }
    });
    $("#pwd_1").keyup(function () {
        if (($("#pwd_1").val().length)<6) {
            $('#pwd1err').removeClass('hidden');
            $('#pwd1err').html('Password length must be atleast 6');
        } else {
            $('#pwd1err').addClass('hidden');
        }
    });
    $("#pwd_2").keyup(function () {
        if ($('#pwd_1').val() != $('#pwd_2').val()) {
            $('#pwd2err').removeClass('hidden');
            $('#pwd2err').html('Passwords did not match');
        } else {
            $('#pwd2err').addClass('hidden');
        }
    });
    $("#email").keyup(function () {
        if (!($("#email").val().match('^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$'))) {
            $('#emailerr').removeClass('hidden');
            $('#emailerr').html('Invalid Email-ID');
        } else {
            $('#emailerr').addClass('hidden');
        }
    });
    $("#mobNo").keyup(function () {
        if (!($("#mobNo").val().match('^[0-9]{10}$'))) {
            $('#moberr').removeClass('hidden');
            $('#moberr').html('Invalid Mobile Number');
        } else {
            $('#moberr').addClass('hidden');
        }
    });
});

