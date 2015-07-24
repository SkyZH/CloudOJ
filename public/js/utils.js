
var Profile = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        };

        return true;
    },
    validate: function () {
        if (SignUp.check("username") == false) {
            return false;
        }
        if (SignUp.check("email") == false) {
            return false;
        }
        $("#profileForm")[0].submit();
    }
};

var SignUp = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        };

        return true;
    },
    validate: function () {
        if (SignUp.check("username") == false) {
            return false;
        }
        if (SignUp.check("email") == false) {
            return false;
        }
        if (SignUp.check("password") == false) {
            return false;
        }
        if ($("#password")[0].value != $("#repeatPassword")[0].value) {
            $("#repeatPassword")[0].focus();
            $("#repeatPassword_alert").show();

            return false;
        }
        $("#registerForm")[0].submit();
    }
}

jQuery.fn.slideLeftHide = function( speed, callback ) { this.animate( { width: "hide", paddingLeft: "hide", paddingRight: "hide", marginLeft: "hide", marginRight: "hide" }, speed, callback ); }
jQuery.fn.slideLeftShow = function( speed, callback ) { this.animate( { width: "show", paddingLeft: "show", paddingRight: "show", marginLeft: "show", marginRight: "show" }, speed, callback ); }

$(document).ready(function () {
    $("#registerForm .alert").hide();
    $("div.profile .alert").hide();
    $(document).pjax('a', '#pjax-container');
    $(document).on('pjax:send', function() {
        $('#pjax-loading').slideLeftShow(500);
    });
    $(document).on('pjax:complete', function() {
        $('#pjax-loading').fadeOut(500);
    });
    $('#pjax-loading').fadeOut(500);
    twemoji.parse(
        document.body,
        {
            callback: function(icon, options) {
            return '//cdn.bootcss.com/twemoji/1.4.1/' + options.size + '/' + icon + '.png';
            },
            size: 16
        }
    );
});
