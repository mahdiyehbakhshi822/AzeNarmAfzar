<?php get_header();?>
 
 
<?php get_footer();?>
<div class="main-content">
 
 
<div class="container">
 
 
<div class="posts col-md-9 col-sm-12 col-xs-12 pull-right">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // اینجا که حلقه قرار دادیم ?>
 
 
<div class="post-list">
 
 
<div class="post-image">
<?php if (has_post_thumbnail()){ // اینجا هم که تصویر شاخص رو میزاریم نشون بده the_post_thumbnail('post-img'); } ?>
</div>
 
 
 
 
<div class="post-content">
 
 
<h2 class="post-title"><?php the_title();?></h2>
 
 
<!-- اینجا هم که عنوان نوشته رو بر میگردونم -->
 
 
<div class="clearfix"></div>
 
 
 
 
<div class="post-meta">
<span><i class="fa fa-user"></i> <?php the_author();?></span> <!-- اینجا هم نام نویسنده -->
<span><i class="fa fa-calculator"></i><?php the_time('M j, Y');?> </span> <!-- اینجا هم تاریخ ارسال نوشته -->
<span><i class="fa fa-comments"></i> <?php comments_number( 'بدون دیدگاه', 'دیدگاه', '% دیدگاه' ); ?></span> <!-- اینجا هم تعداد دیدگاه های نوشته -->
</div>
 
 
 
 
<?php the_content();?>
 
<!-- این تابع تمامی محتوای نوشته رو بر می گردونه -->
 
 
 
<div class="tags">
<?php the_tags('','');?> <!-- این تابع هم در واقع کلمات کلیدی در نوشته رو بر میگردونه -->
 
</div>
 
 
</div>
 
 
</div>
 
 
<?php endwhile; else : ?>
 
 
<?php _e( 'چیزی پیدا نشد' ); ?>
 
<?php endif; ?>
</div>
 
 
 
 
<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : // بررسی می کند که آیا ابزارکی وجود دارد یا خیر ?>
 
 
<div class="sidebar col-md-3 col-sm-12 col-xs-12 pull-left">
<?php dynamic_sidebar( 'sidebar-widgets' ); // فراخوانی ابزارک ?>
</div>
 
 
<?php endif; ?>
 
</div>
 
 
</div>
 
 
</div>