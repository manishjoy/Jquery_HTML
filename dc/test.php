<html>
<head>
    <title>Check Box</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <link rel="stylesheet" href="style.css" type="text/css" >

<style>
            li{
                list-style-type: none;
            }
 </style>
</head>


<script type="text/javascript">
$(document).ready(function() {
  	$('input[type=checkbox]').click(function(){ 
  	 	 $(this).next().find('input[type=checkbox]').prop('checked',this.checked);
 
 	 	  $(this).parents('ul').prev('input[type=checkbox]').prop('checked',function(){
      			  return $(this).next().find(':checked').length;
   		 });
	});


	});


</script> 
<body>

<div class="check"><h3>Check Box</h3>
            
                   
                    
                   <ul id="root">
                        <li>
                            <input type="checkbox" name="p1" >Property
                        
                            <ul id="parent">
                           	 <li><input type="checkbox" name="">Edit Property

							<ul id="child">
					  		<li><input type="checkbox" name=" ">Edit Property Add1</li>
                           				 <li><input type="checkbox" name="">Edit Property Add2</li>
							 <li><input type="checkbox" name="">Edit Property Add3</li>
							</ul>

				</li>
                            	
                          
				   
                      	    </ul>
                         </li>

             </ul>
</div>

</body>
</html>
