<?php
	require 'start.php';
	

	$objects = $s3->getIterator('ListObjects', 
	[
		'Bucket' => $config['s3']['bucket']
	]);


?>

<html>
	<head>
		<title> The Bucket list!! </title>
	</head>
<body> <style> body{background-color:"Black"} </style>
	<h1> The Bucket list </h1>
	<h2> List of files in West(oregon) </h2>

	

	<table border=true>
	<br>

	<?php foreach($objects as $object): 
	?>
	

	<td> Name of the File </td>
	<td> Last updated time </td>		
	<td> Username </td>
	<td> Link to the file </td>
	<td> S3 Accelerated link </td>
	
	<tr>
	<td>	 <?php echo "";
			 echo $object['Key']; ?> </td>
       <td>		 <?php echo "Last updated on:";echo $object['LastModified']; ?> -- </td>
        <td>		 <?php echo ""; echo $object['Owner']['DisplayName']; ?>  </td>

        <td>		<font color=red>
		<a href="<?php echo $s3->getObjectUrl($config['s3']['bucket'],$object['Key'])?>" download = "<?php $object['Key']?>"> Download link</a>
				</font> </td>

	
		<td> <a href="<?php  
					$originalURL = $s3->getObjectUrl($config['s3']['bucket'],$object['Key']);
					$source= "s3.amazonaws.com" ;
					$destination = "s3-accelerate.amazonaws.com";
					$acceleratedURL = str_replace($source, $destination, $originalURL);
					echo $acceleratedURL;

		?>"> Click here</td></a>
		

	<tr></tr>
	<tr></tr>
	<?php endforeach; ?>
	</table>
	

</body>
</html>	
