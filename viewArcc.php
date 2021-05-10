<?php
//$files = scandir('./repository_approved');
$files = array_slice(scandir('./repository_approved'), 2);

sort($files); // this does the sorting
echo '<ul>';
foreach($files as $file){
   echo'<li><a href="./repository_approved/'.$file.'">'.$file.'</a></li>';
}
echo '</ul>';
?>
