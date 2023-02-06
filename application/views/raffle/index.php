<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">
        <p>There are <span><?= $winner ?></span> luck winners selected</p>
        <h1><?= $random ?></h1>
        <input type="submit" name="submit" value="Pick more">
        <input type="submit" name="reset" value="Reset Here">
    </form>
    <?php
        echo $this->session->userdata('winner');
    ?>
</body>
</html>