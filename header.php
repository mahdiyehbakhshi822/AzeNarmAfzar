<!Doctype html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <title><?php bloginfo( 'name' ); wp_title( '-' ); ?>project for Aza mohandece narm afzar</title>
     <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <!--<link href="css/bootstrap-rtl.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
?>
<?php wp_head(); ?>
  </head>
  <body>
  <header>
    <div class="container">
        <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand" href="#">لوگوی سایت</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"id="menu">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">صفحه اصلی <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">خدمات</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">نمونه کار</a>
                            </li>
                            
                            <li class="nav-item">
                              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">ارتباط با ما</a>
                            </li>
                          </ul>
                          <form class="form-inline my-2 my-lg-0" id="saerchid">
                            <input class="form-control mr-sm-2" type="search" placeholder="عبارت مورد جست وجو"کنید aria-label="Search" id="txtsearch">
                            <button class="btn btn-outline my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                          
                          </form>
                        </div>
                      </nav>
        </div>
    </div>
    </header>