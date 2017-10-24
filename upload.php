<?php

use Aws\S3\Exception\S3Exception;
        require 'start.php';
        if (isset($_FILES['file'])) {
                $file = $_FILES['file'];
                $name = $file['name'];
                $tmp_name = $file['tmp_name'];
                $extension = explode('.', $name);
                $extension = strtolower(end($extension));
                $tmp_file_name = 'files/'.$user_name.$name;
                $result  = move_uploaded_file($tmp_name, $tmp_file_name);
                //echo $result.'move to temporary directiry';
                if ($result == TRUE) {
                  // echo "successful moved to tmp directory";
                   try {
                   $s3->putObject(
                        [
                          'Bucket' => $config['s3']['bucket'],
                          'Key' => $name,
                          'Body' => fopen($tmp_file_name, 'rb'),
                           'ACL' => 'public-read'
                        ]
                   );
                   //echo "uploaded file to ".$tmp_file_name;
                   unlink($tmp_file_path);
                } catch(S3Exception $e) {
                        echo "There was an error uploading the file to S3<br>";
                        echo $e;
                }
                } else {
                      //  echo " successful /n Thank you for your review! Click below to see the list of your review history";
                }

        }

?>

<html>
<head> <style> body {background-color:black} </style> </head>
<link rel="stylesheet" type="text/css" href="style.css">
<body> <Center> <font face="comic sans" color="Khaki" size="9"> Movie recommendation system </font> </center>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
                <table>
                <td> Please upload your reviews </td> 
                
                <tr>
                <td> <input type="file" name="file"> </td>
                <td> <input type="submit" value="upload"> </td>
                </tr>
                </table>
        </form>
        <a href="list.php"><div align="left" style="solid red">Your personalized reviews</div></a>



<ul class="rolldown-list" id="myList">

  <li> <a href="imbd_action.php" style="color:Red"><div align="center">Action</div></a></li>
  <li> <a href="imbd_comedy.php" style="color:Red"><div align="center">Comedy</div></a></li>
  <li> <a href="imbd_drama.php" style="color:Red"><div align="center">Drama</div></a></li>
  <li> <a href="imbd_horror.php" style="color:Red"><div align="center">Horror</div></a></li>
  <li> <a href="imbd_mystery.php" style="color:Red"><div align="center">Mystery</div></a></li>
  <li> <a href="imbd_sports.php" style="color:Red"><div align="center">Sports</div></a></li>
  <li> <a href="imbd_thriller.php" style="color:Red"><div align="center">Thriller</div></a></li>
  <li> <a href="imbd_war.php" style="color:Red"><div align="center">War</div></a></li><li>
</ul> 





</body>
</html>




