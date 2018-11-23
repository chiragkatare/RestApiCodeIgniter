function validate() {
    $('#regform').validate({
        rules: {
            fname: 'required',
            lname: 'required',
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            rpassword: {
                required: true,
                minlength: 8,
                equalTo: '#password'
            }
        },
        messages: {
            fname: 'First Name Empty',
            lname: 'Last Name Empty',
            email: {
                required: 'Email Empty',
                email: 'Email Invalid',
            },
            password: {
                required: 'Password Required',
                minlength: 'Atleast * characters required'
            },
            rpassword: {
                required: 'Password Empty',
                minlength: "Less Than 8 Chars",
                equalTo: 'Passwords Didnt Match'
            }
        }, errorPlacement: function (error, element) {
            if (element.attr("name") == "fname")
                $("#fnameerror").html(error);
            else if (element.attr("name") == "lname")
                $("#lnameerror").html(error);
            else if (element.attr("name") == "password")
                $("#passerror").html(error);
            else if (element.attr("name") == "rpassword")
                $("#rpasserror").html(error);
            else if (element.attr("name") == "email")
                $("#emailerror").html(error);
        },
        submitHandler: function () {
            var postdata = {};
            var formdata = $("#regform").serializeArray();
            $(formdata).each(function (index, obj) {
                postdata[obj.name] = obj.value;
            });
            $.ajax({
                type: 'POST',
                url: 'http://localhost/codeigniter/users/register',
                dataType: 'json',
                data: postdata,
                success: function (result) {
                    alert(JSON.stringify(result));
                },
                error: function (error) {
                    alert(JSON.stringify(error));
                }
            });
        }
    });
}