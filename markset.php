<?php 
include_once 'config.php';
if(isset($_POST['mark']))
{
  echo  " <th><h2>Assignments Result </h2></th>";

$schem = "marking/";
$filenamei = "submit/";
$file = array_diff(scandir($filenamei), array('.','..'));
$file1 = array_diff(scandir($schem), array('.','..'));
$size = sizeof($file)+1;
for ($i=2; $i <$size+1; $i++) { 

$mark = "marking/$file1[2]";
$handle1 = fopen($mark, "r");
$content = fread($handle1, filesize($mark));
fclose($handle1);

$filename = "submit/$file[$i]";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);


 	$sim = similar_text("$content","$contents", $percent);
    $perce = (int)$percent;
    $val=$perce/100*5;
    $mark= floor($val);
    echo "The marks of Assignment $file[$i]is  : <b>$val</b>  ";
    echo '<br>';
    echo '<br>';
}
	
	 
}
 ?>
