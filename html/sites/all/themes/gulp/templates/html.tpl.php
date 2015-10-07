<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head profile="<?php print $grddl_profile; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php print $head_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--<script src="//use.typekit.net/kte0pbp.js"></script>
<script>try{Typekit.load();}catch(e){}</script>-->
<?php print $head; ?>


<?php print $styles; ?><?php print $scripts; ?>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    
<?php print $page_top; ?> <?php print $page; ?> <?php print $page_bottom; ?>

</body>
</html>
