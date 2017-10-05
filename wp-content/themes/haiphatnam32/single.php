<?php 
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>


<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
			<?php
				if ((class_exists('incart_breadcrumb_class'))) { $incart_breadcumb->custom_breadcrumb(); }
			?>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->
    <!--container start-->
    <div class="container">
      <div class="row">
        <!--blog start-->
		<!--col-lg-9-->
        <div class="col-lg-9 ">
		    <!--blog-item-->
			<div class="blog-item">
				<div class="row">
					<div class="col-lg-2 col-sm-2">
						<div class="date-wrap">
						<span class="date">
							<?php the_time('j') ?>
						</span>
						<span class="month">
							<?php the_time('F,Y') ?>
						</span>
						</div>

					</div>
					<div class="col-lg-10 col-sm-10">


						<div class="blog-img gs">
							<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
								<?php the_post_thumbnail('full'); ?>
							<?php } ?>
						</div>

					</div>
				</div>
				<div class="row">
              <div class="col-lg-2 col-sm-2 text-right">
                <div class="author">
                  Viết bởi
                  <a href="#">
                    <?php  the_author_posts_link(); ?>
                  </a>
                </div>
                <div class="st-view">
                  <ul class="list-unstyled">
                    <li>
                      <a href="javascript:;">
                        <?php _e('<i class="fa fa-comment" aria-hidden="true"></i> ','incart-lite');?><?php comments_popup_link(__('Chưa có bình luận ','incart-lite'), __('1 Bình Luận ','incart-lite'), __('% Bình Luận ','incart-lite')) ; ?>
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <h1>
                   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h1>
				<div class="skepost">
					<?php the_content( __( 'Đọc thêm <span class="meta-nav">&rarr;</span>', 'incart-lite' ) ); ?>
					<?php wp_link_pages(__('<p><strong>Pages:</strong> ','incart-lite'), '</p>', __('number','incart-lite')); ?>
				</div>
                
				<div class="navigation"> 
					<span class="nav-previous"><?php previous_post_link( __('&larr; %link','incart-lite')); ?></span>
					<span class="nav-next"><?php next_post_link( __('%link &rarr;','incart-lite')); ?></span> 
				</div>
				<div class="clearfix"></div>
				<div class="comments-template">
					<?php comments_template( '', true ); ?>
				</div>

              </div>
            </div>
			</div><!--blog-item-->
		</div><!--col-lg-9-->
	  </div><!--row-->
	  
	</div><!--container-->


<?php endwhile; ?>
<?php else :  ?>

<div class="post">
	<h2><?php _e('Not Found','incart-lite'); ?></h2>
</div>
<?php endif; ?>
			

<!-- Sidebar -->
<div id="sidebar" class="col-md-3 hidden-xs">
	<ul class="skeside">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</ul>
</div>
<!-- Sidebar --> 
</div>
<?php get_footer(); ?>