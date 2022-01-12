<?php 
include_once 'config.php';
if(isset($_POST['mark'])){
echo  " <th><h2>Assignments Plagiarism </h2></th>";
$mydir = 'submit/'; 

  $file = array_diff(scandir($mydir), array('.','..'));
  $file1 = array_diff(scandir($mydir), array('.','..'));
  $size = sizeof($file)+1;
echo $size;
  
    // Traverse through all array elements
    for($i = 2; $i <= $size; $i++) 
    {
        // Last i elements are already in place
        for ($j= 2; $j <= $size; $j++) 
        {
$filename = "submit/$file[$i]";
$filename1 = "submit/$file[$j]";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename)); 
fclose($handle);


$handle1 = fopen($filename1, "r");
$contents1 = fread($handle1, filesize($filename1));    
fclose($handle1);

$sim = similar_text("$contents","$contents1", $percent);
$perce = (int)$percent;

    echo "percentage of similarity between <b>$file[$i]</b> and <b>$file[$j]</b> is:  <b>$perce%</b> <br>";
    
        }
       echo "<br>";
       echo "<br>"; 
    }


}


 ?>