<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Checkbox</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		ajx();
		sel_prt();
  	 	$('input[type=checkbox]').on("click",function(){ 
  	 		console.log("jesus");
  	 		/*$(this).next().find('input[type=checkbox]').prop('checked',this.checked);
 			$(this).parents('ul').prev('input[type=checkbox]').prop('checked',function(){
      			  return $(this).next().find(':checked').length;
   		 	});*/
		});
		/*$(".level").change(function(){
			var pLvl= $(this).val()-1;
			//console.log(pLvl);
			var pUrl= "get_parent.php?id="+pLvl;
			$.ajax({
				type: "POST",
				url: pUrl,
				data: "",
				success: function(data){
					//$("#x").append(data);
					$(".sel_parent").html(data);
				}
			});
		});*/
		$("#sub").click(function() {
	        var label = $("#label").val();
	        var parent = $("#sel_parent").val();
	        var tempUrl = "inschk.php?label=" + label + "&parent=" + parent;
	        //console.log(tempUrl);
	        $.ajax({
	            type: "GET",
	            url: tempUrl,
	            data: "",
	            success: function(data) {
	                $("#msg").html(data);
	                $("#label").val('');
	                sel_prt();
	            }
	        });
	        ajx();
	        return false;
	    });
	});
	function sel_prt()
	{
		$.ajax({
				type: "POST",
				url: "get_parent.php",
				data: "",
				success: function(data){
					//$("#x").append(data);
					$(".sel_parent").html(data);
				}
		});
	}
	function ajx(){
		$("#root").html("");
		$.ajax({
			type: "POST",
			url: "draw.php",
			data: "",
			dataType: "json",
			success: function(data){
				var len = data.length;
				//console.log(len);
				for(var i = 0; i < len; i++){
					var id = "#"+data[i][1];
					console.log(id);
					$(id).append("<li><input type='checkbox'>"+data[i][0]+"<ul id="+data[i][0]+"></ul></li>");

					/*if(data[i][1]==1){
						//console.log(data[i][2]);
						var id = "#"+data[i][2];
						//console.log(id);
						$(id).append("<li><input type='checkbox'>"+data[i][0]+"<ul id="+data[i][0]+"></ul></li>");
					}
					if(data[i][1]==2){
						//console.log(data[i][2]);
						var id = "#"+data[i][2];
						//console.log(id);
						$(id).append("<li><input type='checkbox'>"+data[i][0]+"<ul id="+data[i][0]+"></ul></li>");
					}
					if(data[i][1]==3){
						//console.log(data[i][2]);
						var id = "#"+data[i][2];
						//console.log(id);
						$(id).append("<li><input type='checkbox'>"+data[i][0]+"</li>");
					}*/
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


<div id="left">
	<h4>Checkboxes</h4>
	<ul id="root">
	</ul>
</div>
<div id="right">
	<div>
	<h4>Enter Checkbox</h4>
	<form id="myform" action="" method="GET">
		<label>Enter Label: </label>
		<input type="text" name="label" id= "label" placeholder="Enter Label"/><br/>
		
        <label>Select Parent: </label>
        <select class="sel_parent" name="sel_parent" id= "sel_parent">
            <option value="select">-Select-</option>
        </select><br/>
		<input type="submit" name="sub" id="sub" value="Submit" />
    </form>
    <div id="msg"></div>
    </div>
</div>
</body>
</html>