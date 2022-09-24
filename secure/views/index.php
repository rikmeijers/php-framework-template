<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- METADATA-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- ICONS -->

        <!-- CSS -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif !important;
            }
        </style>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- JAVASCRIPT -->
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script defer src="js/bootstrap.js"></script>
    </head>
    <body>
        <!-- NAVBAR -->
        <?php require $navbar; ?>

        <!-- CONTENT -->
        <p>
            <?php echo "<pre>";
            print_r($user);
            echo "</pre>"; ?>
        </p>
        <p>Name = <?php print_r($user->name); ?></p>
        <p>Email = <?php print_r($user->email); ?></p>
        <p>Password = <?php print_r($user->password); ?></p>

        <!-- FOOTER -->
        <?php require $footer; ?>
    </body>
</html>
