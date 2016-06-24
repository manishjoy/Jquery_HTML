<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anchor Tag</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-2.2.0.js"></script>
    <script>
         $(document).ready(function(){
            $("#b").click(function(){
                $("#result2").html("Clicked");
                event.preventDefault();
            });
            $("#b").hover(function(){
                $("#result2").html("Hovered");
            });
            $("#b").mouseout(function(){
                $("#result2").html("<font color='#0066ff'>View Effect Here </font>");
            });
            $("#c").focus(function(){
                $("#result3").html("Anchor Focused");
            });
            $("#c").blur(function(){
                $("#result3").html("<font color='#0066ff'>View Effect Here </font>");
            });
            $("#a").mouseover(function(){
                $("#result1").html("Mouseover");
            });
            $("#a").mouseout(function(){
                $("#result1").html("Mouseout");
            });
        });
    </script>
</head>
<body>
<div class="container">
    <div class="well">
        <h3>Anchor Tag Effects</h3>
    </div>
  <div class="panel-group">
    <div class="panel panel-default col-sm-3" style="margin-left:2px;">
        <div class="panel-heading"> <font color="#0066ff" id="result1">View Effect Here </font> </div>
        <div class="panel-body"><a href="#" id="a">Move Cursor Here</a><i> (Mouseover/Mouseout)</i></div>
    </div>
    <div class="panel panel-default col-sm-3" style="margin-left:2px;">
        <div class="panel-heading"> <font color="#0066ff" id="result1">View Effect Here </font></div>
        <div class="panel-body"><a href="#" id="b">Click Me</a><i> (Hover/Click)</i></div>
    </div>
    <div class="panel panel-default col-sm-4" style="margin-left:2px;">
        <div class="panel-heading"> <font color="#0066ff" id="result1">View Effect Here </font> </div>
        <div class="panel-body"><a href="#" id="c">Press 'Tab' Key 2 Times to Focus Here</a><i> (Focus)</i></div>
    </div>
  </div>
</div>
</body>
</html>
