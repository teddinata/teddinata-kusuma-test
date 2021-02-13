<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js'?>"></script>
	<title>Document</title>
</head>
<body>
	<div class="container">
		<h1>DATA USERS</h1>

		<table class="table">
		<thead>
		<tr>
			<th>Email</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Avatar</th>
		</tr>
		</thead>
		<tbody id="target">
		<tr>
			
		</tr>
		</tbody>
	</table>

	</div>

	<script type="text/javascript">
		function ambilData(){
			$.ajax({
				type:'POST',
				url:'https://reqres.in/api/users',
				dataType: 'json',
				data: {
					id: "{user.id}",
					email: "{user.email}",
					first_name: "{user.first_name}",
					last_name: "{user.last_name}",
					avatar:"{user.avatar}"
					
				},
				success: function(data){
					var baris = '';
					for(var i=0;i<data.length;i++){
						baris+= '<tr>'+
						'<td>'+ data[i].user.id +'</td>' +
						'<td>'+ data[i].user.email +'</td>' +
						'<td>'+ data[i].user.first_name +'</td>' +
						'<td>'+ data[i].user.last_name +'</td>' +
						'<td>'+ data[i].user.avatar +'</td>' +
						'<tr>';
					}
					$('#target').html(baris);
				}
				
			});
		}

	</script>

	


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>
