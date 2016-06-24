<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <script src="js/jquery-2.2.0.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
    <script>
 
        $(document).ready(function () {

    $('#myform').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email: true
            },
            pass: {
                required: true,
                minlength: 5
            },
            cpass: {
                required: true,
                equalTo: "#pass"
            },
            agree: "required",
        },
        messages: {
            email: "Enter Valid Email",
            pass: "Enter Valid Password (Minimum Length Should be 5 Characters)",
            cpass: "Enter The Same Password Again"
        },
        submitHandler: function(form) {

            $("#sub").click(function() {
                form.submit();
                return false;
            });
        }
    });

});
 
    </script>
</head>
<body>
 <div>
    <form id="myform">
        <input type="text" name="email" id= "email" placeholder="Email"/><br/><br/>
        <input type="password" name="pass" id="pass" placeholder="Password"/><br/><br/>
        <input type="password" name="cpass" id= "cpass" placeholder="Password"/><br/>
        <div><input type="checkbox" name="agree" value="agree" id= "agree"> I Agree To Terms And Conditions</div>
        <input type="submit" id="sub"/>
    </form>
 </div>
</body>
</html>
