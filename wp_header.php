<?php ob_start() ?>
<!DOCTYPE html>
    <meta charset="utf-8">
    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="Meta Name Description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php meta_og() ?>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/img/icon.png' ?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri().'/assets/img/icon.png' ?>" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:400,700,900" rel="stylesheet">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-64454196-2', 'auto');
      ga('send', 'pageview');
    </script>
    <?php wp_head() ?>

<body <?php echo body_class(); ?>>
