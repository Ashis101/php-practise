<?php
    require_once '../partials/session.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?if(!$_SESSION['email']){?>
        <h2>Not Login</h2>
    <?}else{?>
        <h2>IT's Index</h2>
        <h3>User:<? echo $_SESSION['email'] ?></h3>
    <?}?>
    <h2>Upload File</h2>
    <form action="../controller/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="newfile">
        <button type="submit">Submit</button>
    </form>
    <a href="../controller/logout.php?l=true">logout</a>
</body>
</html>