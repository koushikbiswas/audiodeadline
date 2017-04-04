 <!DOCTYPE html>
<html>
<head lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo simple_fields_value('seometa'); ?>


    <title> <?php echo simple_fields_value('titleseo') ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/ionicons.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/landingpagecss.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/media.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">var switchTo5x=true;</script>
   <!-- <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "09fb0294-7e9d-41f4-8808-8e0180c2eb62", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <script src='https://www.google.com/recaptcha/api.js'></script>-->

</head>
<body class="body<?php echo get_the_ID(); ?>">

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

if (get_the_category()[0]->slug=='blog'){

?>
<div class='postsbycategorymain' >
<ul class='postsbycategory widget_recent_entries'>
<li class='titleb'>
<?php echo get_the_title(); ?>
</li>
    <li class="contentc">
    <h2>
    <?php
}
    the_content();


if (get_the_category()[0]->slug=='blog'){

    ?>
    </h2>
    </li>
    </ul>
    </div>
    <?php
}
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>








<!-------------Car purchase popup------------------->

<div id="popthankyou" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-body text-center signupeamilbody">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
                <h2>Thank You!</h2>
                <p><span>We'll respond to your query shortly...</span></p>

            </div>

        </div>

    </div>

</div>




<div id="popthankyouhome" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-body text-center signupeamilbody">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
                <h2>Thank You!</h2>
                <p><span>We'll respond to your request shortly...</span></p>

            </div>

        </div>

    </div>

</div>



</body>
</html>
