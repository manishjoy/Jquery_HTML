<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Checkbox</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		li{
			list-style-type: none;
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		ajx();
  	 	$(document).on("change","input[type=checkbox]",function(){ 
  	 	console.log('hello');
  	 		$(this).next().find('input[type=checkbox]').prop('checked',this.checked);
 			$(this).parents('ul').prev('input[type=checkbox]').prop('checked',function(){
      			  return $(this).next().find(':checked').length;
   		 	});
		});
		$("#level").change(function(){
			var pLvl= $(this).val()-1;
			//console.log(pLvl);
			var pUrl= "get_parent.php?id="+pLvl;
			$.ajax({
				type: "POST",
				url: pUrl,
				data: "",
				success: function(data){
					//$("#x").append(data);
					$("#sel_parent").html(data);
				}
			});
		});
		$("#sub").click(function() {
	        var label = $("#label").val();
	        var level = $("#level").val();
	        var parent = $("#sel_parent").val();
	        var tempUrl = "inschk.php?label=" + label + "&level=" + level + "&parent=" + parent;
	        //console.log(tempUrl);
	        $.ajax({
	            type: "GET",
	            url: tempUrl,
	            data: "",
	            success: function(data) {
	                $("#msg").html(data);
	                $("#label").val('');
	                $("#level").val('');
	                $("#sel_parent").val('');
	                ajx();
	            }
	        });
	        
	        return false;
	    });
	});
	function ajx(){
		$("#root").html("");
		$.ajax({
			type: "POST",
			url: "draw.php",
			data: "",
			dataType: "json",
			success: function(data){
				var len = data.length;
				console.log(len);
				for(var i = 0; i < len; i++){
					if(data[i][1]==1){
						//console.log(data[i][2]);
						var id = "#"+data[i][2];
						//console.log(id);
						$(id).append("<li><input type='checkbox'> "+data[i][0]+"<ul id="+data[i][0]+"></ul></li>");
					}
					if(data[i][1]==2){
						//console.log(data[i][2]);
						var id = "#"+data[i][2];
						//console.log(id);
						$(id).append("<li><input type='checkbox'> "+data[i][0]+"<ul id="+data[i][0]+"></ul></li>");
					}	
					if(data[i][1]==3){
						//console.log(data[i][2]);
						var id = "#"+data[i][2];
						//console.log(id);
						$(id).append("<li><input type='checkbox'> "+data[i][0]+"</li>");
					}
					//console.log(data[i][0]);
					//$("#tbody").append("<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td></tr>");
					//dat += "<tr><td>"+(data[i][0])+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td><td>"+data[i][4]+"</td></tr>";
					//console.log(dat);
				}
			}
		});
	}
	</script>
</head>
<body>
<div class="container">
	<div class="well">
        <h3>Dynamic Add Checkboxes</h3>
    </div>
	<div class="col-sm-6">
		<h4>Checkboxes</h4>
		<label>
			<ul id="root">
			</ul>
		</label>
	</div>
	<div class="col-sm-6">
		<h4>Enter Checkbox</h4>
			<form id="myform" action="" method="GET" role="form">
	        <div class="form-group">
	            <label>Enter Label:</label>
	            <input type="text" name="label" id= "label" placeholder="Enter Label" class="form-control" />
        	</div>
        	<div class="form-group">
	            <label>Select Level:</label>
	            <select class="form-control" name="level" id= "level">
		            <option selected="selected">-Select-</option>
		            <option value="1">Parent</option>
		            <option value="2">Child</option>
		            <option value="3">Grandchild</option>
	        	</select>
        	</div>
        	<div class="form-group">
	            <label>Select Parent:</label>
	            <select class="form-control" name="sel_parent" id= "sel_parent">
	            	<option value="select">-Select-</option>
	        	</select>
        	</div>
        	<input type="submit" name="sub" id="sub" value="Submit" class="btn btn-default"/>
    	</form>
	    <div id="msg"></div>
	</div>
</div>
</body>
</html>