<!DOCTYPE html>
<html>
<head>

    <title>What time is it?</title>

    <?php require 'php.php'; ?>

    <link rel='stylesheet' href='css\custom.css' type='text/css'>


</head>

<body class="<?php echo $time_of_day ?>">

    <h1>
    It is <?php echo $time; ?>.
    </h1>

    <small>Time zone: America/New_York;</small><br>

    <img src="http://making-the-internet.s3.amazonaws.com/php-<?php echo $time_of_day ?>.png" alt='Scenery matching the time of day'>

</body>
</html>
