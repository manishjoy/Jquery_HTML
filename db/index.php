<!DOCTYPE html>
<html>
<head>
	<title>Fetch Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
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
<center>
	<table border="1" id="tbl" class="tbl" cellpadding="10px">
		<tr>
			<th><a id="i" href="#">Id</a></th><th>Name</th><th>Email</th><th>Message</th><th><a id="dt" href="#">Date</a></th>
		</tr>
		<tbody id="tbody"></tbody>
	</table>
		<div id="frm">
			<form id="myform" action="" method="GET">
		        Name:<br><input type="text" name="name" id= "name" placeholder="Name"/><br/>
		        Email:<br><input type="text" name="email" id= "email" placeholder="Email"/><br/>
		        Message:<br><input type="textarea" name="message" id= "message" placeholder="Message"/><br/>
		        Date:<br><input type="text" name="dat" id= "dat" placeholder="mm-dd-yyyy"/><br/>
		        <input type="submit" name="sub" id="sub" value="Insert" />
    		</form>
    		<div id="flash"></div>
    		<div id="msg" style="color: #FFFFFF;"></div>
		</div>
	</center>
</body>
</html>