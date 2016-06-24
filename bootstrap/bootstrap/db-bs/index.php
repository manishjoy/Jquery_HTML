<!DOCTYPE html>
<html>
<head>
	<title>Fetch Data</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<style type="text/css">
  		#frm{
        	padding: 30px 30px 30px 30px;
        	margin-top: 40px;
        	width: inherit;
        	height: 50%;
        	background-color: #808080;
        	color: #ffffff;
        }
  	</style>
	<script type="text/javascript">
	$(document).ready(function() {
		console.log(parseInt($("#page").attr('id')));
	    $("#dat").datepicker();
	    var id = "";
	    var dt = "";
	    var myVar = setInterval(function() {
	        //$("#tbody").html("");
	        ajx(id, dt);
	    }, 500);

	    $("#sub").click(function() {
	        var name = $("#name").val();
	        var email = $("#email").val();
	        var message = $("#message").val();
	        var dat = $("#dat").val();
	        var tempUrl = "ins.php?name=" + name + "&email=" + email + "&message=" + message + "&dat=" + dat;
	        //console.log(tempUrl);
	        $.ajax({
	            type: "GET",
	            url: tempUrl,
	            data: "",
	            success: function(data) {
	                $("#msg").html(data);
	                $("#name").val('');
	                $("#email").val('');
	                $("#message").val('');
	                $("#dat").val('');
	            }
	        });
	        return false;
	    });
	    var tId = 0;
	    var tDt = 0;
	    $("#i").click(function() {
	        event.preventDefault();

	        clearInterval(myVar);
	        myVar = setInterval(function() {
	            id = tId;
	            dt = "";
	            ajx(id, dt);
	        }, 500);
	        tId++;
	        tDt = 0;
	    });
	    $("#dt").click(function() {
	        event.preventDefault();

	        clearInterval(myVar);
	        myVar = setInterval(function() {
	            id = "";
	            dt = tDt;
	            ajx(id, dt);
	        }, 500);
	        tId = 0;
	        tDt++;
	    });
		});
	function ajx(id,dt){
		var pUrl= "pro.php?sid="+id+"&sdt="+dt;
		$.ajax({
			type: "POST",
			url: pUrl,
			data: "",
			dataType: "json",
			success: function(data){
				var len = data.length;
				//console.log(len);
				var dat = " ";
				for(var i = 0; i < len; i++){
					//$("#tbody").append("<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td></tr>");
					dat += "<tr><td>"+(data[i][0])+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td><td>"+data[i][4]+"</td></tr>";
					//console.log(dat);
				}
				$("#tbody").html(dat);
			}
		});
	}
	</script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
	<ul class="nav navbar-nav">
		<li><a href="#" data-toggle="modal" data-target="#insertForm">Insert Data</a></li>		
	</ul>
	<div class="col-sm-3 pull-right">
        <form class="navbar-form" role="search" id="myform" action="" method="GET">
	        <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
	            <div class="input-group-btn">
	                <input type="submit" name="srch" id="srch" value="Go" class="btn btn-default"/>
	            </div>
	        </div>
        </form>
    </div>
</nav>
<div id="insertForm" class="modal fade" role="form">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"  style="background-color: #808080;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" align="center"  style="color:#FFFFFF;">Insert Data</h3>
      </div>
      <div class="modal-body" style="background-color: #f2f2f2;">
		<form id="myform" action="" method="GET" role="form">
	        <div class="form-group">
	            <label>Name:</label>
	            <input type="text" name="name" id= "name" placeholder="Name" class="form-control" />
        	</div>
        	<div class="form-group">
	            <label>Email:</label>
	            <input type="text" name="email" id= "email" placeholder="Email" class="form-control" />
        	</div>
        	<div class="form-group">
	            <label>Message:</label>
	            <textarea class="form-control" rows="3" name="message" id= "message" placeholder="Message"></textarea>
	            
        	</div>
        	<div class="form-group">
	            <label>Email:</label>
	            <input type="text" name="dat" id= "dat" placeholder="mm-dd-yyyy" class="form-control" />
        	</div>
        	<input type="submit" name="sub" id="sub" value="Insert" class="btn btn-default"/>
    	</form>
      </div>
      <div class="modal-footer" style="background-color: #808080;">
          <h4 align="center" id="msg" style="color:#FFFFFF;">Fill All The Fields & Press Enter</h4>
      </div>
    </div>

  </div>
</div>
  <table class="table">
    <thead>
      <tr>
        <th><a id="i" href="#">Id</a></th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th><th><a id="dt" href="#">Date</a></th>
      </tr>
    </thead>
    <tbody id="tbody">
      <tr>
        <td colspan="5" align="center">Data Goes Here</td>
      </tr>
    </tbody>
  </table>
   <ul class="pagination">
	  <li><a href="#" id="1">1</a></li>
	</ul>
</div>

</body>
</html>