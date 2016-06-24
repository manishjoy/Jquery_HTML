<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <a href="http://jquery.com/">jQuery</a>
    <script src="js/jquery-2.2.0.js"></script>
    <script>
 
    	$(document).ready(function(){
		$( "p" ).on( "click", function() {
    	console.log( "click" );
});
	});
 
    </script>
    <p>Click Here</p>
</body>
</html>
