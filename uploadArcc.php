<?php
if(isset($_POST['submit'])){

    // Count total files
    $countfiles = count($_FILES['file']['name']);

    // Looping all files
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];

        // Upload file
        if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'./repository_pending/'.$filename)) {
            echo $filename. ": Upload successfully...  <br>";
        } else {
            echo $filename. ": Error uploading... <br>";
        }
    }
}

?>
