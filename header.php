<?php ob_start() ?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="Meta Name Description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/img/icon.png' ?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri().'/assets/img/icon.png' ?>" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:400,700,900" rel="stylesheet">
    <?php wp_head() ?>

<body <?php echo body_class(); ?>>

<?php 
$content = ob_get_clean();
echo $content;