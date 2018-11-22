
//   $(document).ready(function() {
//     // $("div").click(function() {alert("jquery test");});
//     alert(1);
//  });

$(document).ready(function () {
    $("#register").click(function () {
        debugger;
        // // var formdata = $("#myform").serializeArray(); 
        // formdata = JSON.parse(formdata); 
        // var data = {}; $(formdata).each(function(index, obj){ data[obj.name] = obj.value; });
        var postdata={};
        var formdata = $("#regform").serializeArray();
        $(formdata).each(function (index, obj) {
            postdata[obj.name] = obj.value;
        });

        $.ajax({
            type:'POST',
            url:'http://localhost/codeigniter/users/show',
            dataType: 'json',
            data: postdata,//{
            //     fname : postdata["fname"],
            //     lname : postdata["lname"],
            //     email : postdata["email"],
            //     password : postdata["password"]
            // },//JSON.stringify(data),
            success : function (result) {
                alert(JSON.stringify(result));
            },
            error: function (error) {
                alert(JSON.stringify(error));
            }
        });
        alert("bye");
    });
});