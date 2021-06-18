<?php

define("COMPONENT", 'header1');
define("HTML_COMPONENT", COMPONENT . "/");
define("INDEX", COMPONENT . "/index.html");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            -webkit-transition: none !important;
            -moz-transition: none !important;
            -ms-transition: none !important;
            -o-transition: none !important;
        }
    </style>
    <link rel="stylesheet" href="<?php echo HTML_COMPONENT; ?>style.css">
</head>

<body>
    <?php include_once(INDEX) ?>
</body>

</html>