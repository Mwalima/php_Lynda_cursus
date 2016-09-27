<?php
set_include_path(get_include_path().PATH_SEPARATOR.'/php_Lynda_cursus/example.com/phptest_environment/introducingphp/ch07/07_04/includes');
include 'copyright.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Using include_path</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Using the include_path</h1>
<p>This paragraph is in the original file.</p>
<?php include 'para.html'; ?>
<p>This is also in the original file.</p>
<p><?= lyn_copyright(2015) ;?> David Powers</p>
</body>
</html>