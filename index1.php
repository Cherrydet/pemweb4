<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Cherry's Portfolio</title>
     <link rel = "icon" href = "picture/det.jpg" type = "image/x-icon"/>

     <style type="text/css">
     	body{
     		background-image: url(picture/wall.png);
   			background-size: auto; 
     		color: white;
     		margin-left: 50px;
     		margin-top: 20px;
     		font-size: 20px;
     	}
     	.box{
     		text-align: center;
     		margin: 67px auto;
		    width: 960px;
		    height: 500px;
		    background: rgba(0,0,0,0.4);
		    box-shadow: 3px 3px 3px 3px rgba(0,0,0,0.6);
     	}
     	.tabel{
     		margin-left: 330px;
     	}
     </style>

</head>
<body>

	<div class="box">
	<?php
	if(isset($_POST['jmlh'])){
		$arr=array();
		for ($i=1; $i <= $_POST['jmlh']; $i++) {
			$arr[]=array($i, "01500".$i, "SUDEMO".$i, "JL.Indah no.".$i,);
		} ?>
	<br>
	<table border="1" class="tabel">
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>

		<tbody border="1">
			<?php
			foreach ($arr as $k) { 
			 	echo "<tr>
						<td>".$k[0]."</td>
						<td>".$k[1]."</td>
						<td>".$k[2]."</td>
						<td>".$k[3]."</td>
					  </tr>";
			} 
			?>
		</tbody>
	</table>

	<?php }
	else{
		echo "<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />";
		echo "Masukkan Jumlah Data !" ."<br /> <br />";
		echo '<form action="index1.php" method="POST">
			  <input type="text" name="jmlh">
			  <button type="submit">SUBMIT</button>	
			  </form>';

	} ?>
	</div>
</body>
</html>