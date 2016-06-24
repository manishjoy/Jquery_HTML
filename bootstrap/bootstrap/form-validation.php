
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-2.2.0.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
    <script>
    $(document).ready(function () {
        $("#sub").click(function() {
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
                    alert("Thank You");
                    form.submit();
                }
            });
           
        });
    
});
 
    </script>
</head>
<body>
<div class="container">
    <div class="well">
        <h3>Form Validation</h3>
    </div>
    <form id="myform" role="form">
        <div class="form-group">
            <label>Email address:</label>
            <input type="text" name="email" id= "email" placeholder="Email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pass" id="pass" placeholder="Password" class="form-control" />
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="cpass" id= "cpass" placeholder="Password" class="form-control" />
        </div>
        <div class="form-group">
            <label><input type="checkbox" name="agree" value="agree" id= "agree"> I Agree To Terms And Conditions</label>
        </div>
        <input type="submit" class="btn btn-default" id="sub" />
    </form>
</div>

</body>
</html>
