<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Anchor Tag</title>
    <style type="text/css">
        div{
            color: #ff0000;
            border-width: 2px;
        }
    </style>
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
    <div id="result1"> <font color="#0066ff">View Effect Here </font> </div>
    <a href="#" id="a">Move Cursor Here</a><i> (Mouseover/Mouseout)</i>
    <br><br>
    <div id="result2"> <font color="#0066ff">View Effect Here </font></div>
    <a href="#" id="b">Click Me</a><i> (Hover/Click)</i>
    <br><br>
    <div id="result3"> <font color="#0066ff">View Effect Here </font> </div>
    <a href="#" id="c">Press 'Tab' Key 2 Times to Focus Here</a><i> (Focus)</i>
</body>
</html>
