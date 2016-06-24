<!DOCTYPE html>
<html>
<head>
  <title>jQuery Nivo Slider Demo</title>
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="demo/style.css" type="text/css" media="screen" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
  <script type="text/javascript" src="jquery.nivo.slider.js"></script> 
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 
</head>
<body>
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="images/1.jpg" data-thumb="images/1.jpg" alt="" /> 
		<img src="images/2.jpg" data-thumb="images/2.jpg" alt="" />
		<img src="images/3.jpg" data-thumb="images/3.jpg" alt="" data-transition="slideInLeft" />
	</div>
</div>
</body>
</html>