
//   $(document).ready(function() {
//     // $("div").click(function() {alert("jquery test");});
//     alert(1);
//  });

$(document).ready(function () {
    $("#register").click(function () {
        debugger;
        var b = true;
        var postdata = {};
        var formdata = $("#regform").serializeArray();
        $(formdata).each(function (index, obj) {
            postdata[obj.name] = obj.value;
        });

        // if(password(postdata["password"],postdata["rpassword"])==false){
        //     $("#passerror").text("PassWord Doesnt Match");
        //     b==false ;
        // }

        // if(isEmail(postdata["email"])==false){
        //     b==false ;
        //     $("#emailerror").text("Invalid Email");
        // }

        // if(b){
        // $.ajax({
        //     type: 'POST',
        //     url: 'http://localhost/codeigniter/users/show',
        //     dataType: 'json',
        //     data: postdata,//{
        //     //     fname : postdata["fname"],
        //     //     lname : postdata["lname"],
        //     //     email : postdata["email"],
        //     //     password : postdata["password"]
        //     // },//JSON.stringify(data),
        //     success: function (result) {
        //         alert(JSON.stringify(result));
        //     },
        //     error: function (error) {
        //         alert(JSON.stringify(error));
        //     }
        // });
        // }

        //alert("bye");
    });
});

function password(pass, rpass) {
    if (rpass == pass) {
        return true;
    }
    else
        return false;
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
