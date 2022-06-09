<?php 
    
    define("base_url","http://localhost/FRAMEWORK")

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
    
    <form action="<?php echo base_url; ?>/welcome/signup" method="POST">
        <input type="text" name="name"><br><br>
        <input type="text" name="last_name"><br><br>
        <input type="submit" name="submit" name="submit">
    </form>
    <script src="<?php echo base_url; ?>/assets/js/index.js"></script>
</body>
</html>