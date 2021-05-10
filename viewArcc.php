<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="/Project-arCc/index.css" rel="stylesheet">
    <title>Project-arCc</title>
</head>

<body>
    <h1>List of approved files: </h1>
    <?php
        $files = array_slice(scandir('./repository_approved'), 2);

        sort($files); // this does the sorting
        echo '<ul>';
        foreach($files as $file){
           echo'<li><a href="./repository_approved/'.$file.'">'.$file.'</a></li>';
        }
        echo '</ul>';
    ?>
</body>

</html>
