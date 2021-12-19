<?
    include_once 'controller/login.php';
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
    <form action="../controller/login.php" method="get">
    <label>Name</label>
    <input type="text" name="name">
    <label for="">Password</label>
    <input type="password" name="password">
    <button>login</button>
    </form>
    

</body>
</html>