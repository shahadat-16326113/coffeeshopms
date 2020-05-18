<!DOCTYPE html>
<html>
<head>
	<title>Ajax Live Search</title>
</head>
<body>
   
    <div style="text-align: center;margin: auto; padding: 200px;">

    <h2>Ajax Live Search For Customer Table</h2>

    <div style="padding: 15px;border-radius: 20px;">
	Search: <input type="text" name="usearch" id="search"> <br><br>
    </div>

	<div id="feedback"></div>

	<script type="text/javascript" src="jquery.js"></script>
	
    </div>
</body>
</html>

<script type="text/javascript">
		
		$('#search').keyup(function(){

          var search = $('#search').val();

          $.ajax({

          	url:'customerSearch.php',
          	data:'usearch='+search,
          	success:function(data){
          		$('#feedback').html(data)

          	}

          });

		});




</script>