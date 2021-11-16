<?php
defined('APP_NAME') or die(header('HTTP/1.1 403 Forbidden'));

/*
 * @author Balaji
 * @name: Rainbow PHP Framework - PHP Script
 * @copyright 2019 ProThemes.Biz
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Balaji" />

	<title><?php echo $pageTitle; ?></title>
</head>

<body>
<script type="text/javascript" src="<?php createLink('widget.js'. ($inline ? '&inline': '')); ?>"></script>
<?php if(isset($footerAddArr)){ 
    foreach($footerAddArr as $footerCodes)
        echo $footerCodes;
} ?>
</body>
</html>