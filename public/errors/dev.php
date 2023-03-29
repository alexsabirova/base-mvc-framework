<?php

/**
 * @var $errno \core\ErrorHandler
 * @var $errstr \core\ErrorHandler
 * @var $errfile \core\ErrorHandler
 * @var $errline \core\ErrorHandler
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>

<h1>-- Error --</h1>
<hr><br>
<p><b>Error code:</b> <?= $errno ?></p>
<p><b>Text:</b> <?= $errstr ?></p>
<p><b>File:</b> <?= $errfile ?></p>
<p><b>String:</b> <?= $errline ?></p>

</body>
</html>
