
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        session_unset();
        session_destroy();
        header("Location: loading.php");
        
    
        ?>
    </body>
</html>
