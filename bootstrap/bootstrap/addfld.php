<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Field</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/jquery-2.2.0.js"></script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $("#add_btn").click(function(e) { //on add input button click
                e.preventDefault();
                console.log(i);
                var ht1 = "<div  class='col-sm-12'><div class='col-sm-4'><div class='form-group'><input type='file' class='filestyle' /></div></div><div class='col-sm-4'><div class='form-group'><select class='form-control'><option value='primary' ";
                var ht2 = ">Primary Image</option><option value='sec' ";
                var ht3 = ">Secondary Image</option></select></div></div><div class='col-sm-4'><a href='#' class='remove_field'>×Remove</a></div></div>";
                if (i > 0) {
                    $(".row").append(ht1 + ht2 + "selected" + ht3); //add row
                    i++;
                } 

                else {
                    $(".row").append(ht1 + "selected" + ht2 + ht3); //add row
                    i++;
                }
            });

            $(".row").on("click", ".remove_field", function(e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').parent('div').remove();
                i--;
            })
        });
    </script>
</head>
<body>
<div class="container">
    <div class="well">
        <h3>Dynamic Add/Remove Fields</h3>
    </div>
    <form role="form">
    <div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4">
            <div class="form-group">
                <input type="file" class="filestyle" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <select class="form-control">
                    <option value="primary">Primary Image</option>
                    <option value="sec">Secondary Image</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <a href="#" class="remove_field">×Remove</a>
        </div>
    </div>
    </div>
    <div class="col-sm-12">
        <button class="btn btn-default" id="add_btn">Add Field</button>
    </div>  
    </form>
</div>
</body>
</html>
