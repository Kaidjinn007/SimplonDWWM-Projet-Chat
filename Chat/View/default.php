<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live chat Amazin</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Live chat Amazin</h1>

        <?php
        require 'chat.php'; //appeler le fichier de chat
        require 'form.php'; //appeler le formulaire de pseudo et message
        ?>

    </div>
</body>

</html>