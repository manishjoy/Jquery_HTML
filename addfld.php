<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Field</title>
    <style type="text/css">
        a{
            text-decoration: none;
            color: #00ccff;
        }
        button{
            background-color: #00ccff; /* Green */
            border: none;
            border-radius: 4px;
            color: white;
            padding: 3px 3px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/jquery-2.2.0.js"></script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $(".add_btn").click(function(e) { //on add input button click
                e.preventDefault();
                console.log(i);
                var ht1 = "<div><input type='file' name='myfiles[]'>&nbsp;<select><option value='primary' ";
                var ht2 = ">Primary Image</option><option value='sec' ";
                var ht3 = ">Secondary Image</option></select>&nbsp;<a href='#' class='remove_field'>×Remove</a></div>";
                if (i > 0) {
                    $(".fields").append(ht1 + ht2 + "selected" + ht3); //add fields
                    i++;
                } 

                else {
                    $(".fields").append(ht1 + "selected" + ht2 + ht3); //add fields
                    i++;
                }
            });

            $(".fields").on("click", ".remove_field", function(e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
                i--;
            })
        });
    </script>
</head>
<body>
    <form>
        <div class="fields">
            <div>
                <input type="file" name="myfiles[]">
                <select>
                    <option value="primary">Primary Image</option>
                    <option value="sec">Secondary Image</option>
                </select>
                <a href="#" class="remove_field">×Remove</a>
            </div>
        </div>    
        
    </form>
    <button class="add_btn">Add Field</button>
</body>
</html>
