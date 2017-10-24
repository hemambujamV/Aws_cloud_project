<?php
//Get the genre list from here --> http://www.imdb.com/chart/top?ref_=ft_250
$genre = "action";
$min_votes = "25000";
//$data = file_get_contents("http://www.imdb.com/search/title?genres=".$genre."&sort=user_rating,desc&title_type=feature&num_votes=".$min_votes.",",0);
$Url = "http://www.imdb.com/search/title?genres=".$genre."&sort=user_rating,desc&title_type=feature&num_votes=".$min_votes.",";


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $Url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$pattern='~<img alt="(.*)"\nclass="loadlate"~';
$success = preg_match($pattern, $data, $match);
$i=0;
$lines = explode("\n", $data);
echo "<table border=true>";
echo "<tr>";
echo "<th>Rank</th>";
echo "<th>Movie</th>";
echo "</tr>";
foreach ($lines as $line) {
$pattern='~> <img alt="(.*)"~';
$success = preg_match($pattern, $line, $match);
if ($success) {
	$i=$i+1;
	if($i>1)
	{
	$rank = $i-1;
	$out= $rank."\t".$match[1]."\n";
	//echo $out;
	echo "<tr>";
	echo "<td>".$rank."</td>";
	echo "<td>".$match[1]."</td>";
	echo "</tr>";
}
						  } 
			  } 

echo "</table>";
?>
