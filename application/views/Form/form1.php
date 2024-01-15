<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo validation_errors(); ?>
    <form method="POST" action="index">
        Username: <input type="text" name="username">
        Email: <input type="text" name="email">
        Password: <input type="password" name="password">
        Password Confirmation: <input type="password" name="passconf">

        <input type="submit" name="submit" value="validar">
    </form>
    
</body>
</html>