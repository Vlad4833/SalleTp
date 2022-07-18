<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
<table cellspacing="3px" cellpadding="20px" border="4px">
<tr>
	<td>Id</td>
	<td>Nom</td>
	<td>Image</td>

</tr>
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  
			echo"<tr>";
          	  echo"<td>".$images['id']."</td>";
			 echo"<td>".$images['nom']."</td>";?>
           
           
             
             	<td><img src="uploads/<?=$images['image_url']?>"></td>
            

     echo"<tr>";     		
    <?php } }?>
    </table>
    <t
</body>
</html>