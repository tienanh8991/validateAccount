<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userName = $_REQUEST['account'];

    function validateAccount($str)
    {
        $accountRegexPatten = "/^[_a-z0-9]{6,}$/";
        if (preg_match($accountRegexPatten,$str)){
            return true;
        }else{
            return false;
        }
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Account :
    <input type="text" name="account">
    <button type="submit">Check</button>
</form>
<div>
    <?php
    if (isset($userName)){
        if (validateAccount($userName)){
            echo "Validate Account";
        }else{
            echo "Invalid Account";
        }
    }
    ?>
</div>
</body>
</html>
