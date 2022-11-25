<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--Embedding php code in html-->
    <?php
    echo"Hello world"
    ?>
    <div class="row" style="margin: 50px;">
        <div>
            <label>Username:</label><br>
            <input type="text" class="form-control">
        </div><br>
        <div>
            <label>Password:</label><br>
            <input type="password" class="form-control">
        </div>
        <div>
            <input type="checkbox" class="form-check-input">
            <label for="login">keep me logged in</label>
            <button class="btn btn-primary" type="button" style="background-color:deepskyblue ; margin: 20px;">login</button>
        </div>
    </div>
</body>
</html>