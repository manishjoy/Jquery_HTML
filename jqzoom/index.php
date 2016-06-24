<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>jqZoom</title>
<link rel="stylesheet" href="css/jqzoom.css" type="text/css">
<style type="text/css">
.jqzoom img { border: 3px solid #888; }
</style>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.jqzoom-min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
$('.jqzoom').jqzoom({
    zoomType: 'standard',
    preloadImages: false,
    title: false,
    showEffect: 'fadein',
    hideEffect: 'fadeout'
  });
});
</script>
</head>
<body>
<br>
<div>
  <a href="images/1.jpg" class="jqzoom" title="Zoomed Image">
    <img src="images/1.jpg" title="image" alt="Normal Image" height="150px" width="250px" />
  </a>
</div>

</body>
</html>