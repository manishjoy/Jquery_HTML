$(document).ready(function(){
		setInterval(function() {
			//$("#tbody").html("");
		$.ajax({
			type: "POST",
			url: "pro.php",
			data: "",
			dataType: "json",
			success: function(data){
				var len = data.length;
				//console.log(len);
				var dat = " ";
				for(var i = 0; i < len; i++){
					//$("#tbody").append("<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td></tr>");
					dat += "<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td></tr>";
					//console.log(dat);
				}
				$("#tbody").html(dat);
			}
		});
		}, 1000);
		
		$("#sub").click(function(){
			var name= $("#name").val();
			var email= $("#email").val();
			var message=$("#message").val();
			var dat= $("#dat").val();
			var tempUrl= "ins.php?name="+name+"&email="+email+"&message="+message+"&dat="+dat;
			//console.log(tempUrl);
			$.ajax({
				type: "GET",
				url: tempUrl,
				data: "",
				success: function(data){
					$("#msg").html(data);
					$("#name").val('');
					$("#email").val('');
					$("#message").val('');
					$("#dat").val('');
				}
			});
			return false;
		});
	});