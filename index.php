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
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Document</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            transition: none!important;
            -webkit-transition: none !important;
            -moz-transition: none !important;
            -ms-transition: none !important;
            -o-transition: none !important;
        }
    </style>
    <link rel="stylesheet" href="<?php echo HTML_COMPONENT; ?>style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo HTML_COMPONENT; ?>script.js"></script>
</head>

<body>
    <?php include_once(INDEX) ?>
</body>

</html>