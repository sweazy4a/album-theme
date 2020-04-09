<?php /* Template Name: Main Page */?>

<?php
get_header();

?>

<div class="container-fluid">
      <div id="content_block" class="container">
        <div class="row">
            <div id="content" class="col-md-5 offset-md-3">
                
   <?php 
      $post_id = 5;
      $queried_post = get_post($post_id);
    ?>
    <h1><?php echo $queried_post->post_title; ?></h1>
    <p><?php echo $queried_post->post_content; ?></p>
    </div>
   </div>

<!-- Gallery -->
<div class="mygallery">
<!-- 
  <!-- PHP loop show posts & content -->

  <?php
             // the query
             $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>

             <?php if ( $wpb_all_query->have_posts() ) : ?>
               <!-- the loop -->
                 <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                

                 <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
 
<?php endif; ?>
                   <a href="<?php echo $image[0]; ?>" data-toggle="lightbox" data-gallery="gallery" id="single" class="col-md-4 photo">
                   <?php the_content(); ?>
                 </a>

                 <?php endwhile; ?>
                 <!-- end of the loop -->

               </div>

                 <?php wp_reset_postdata(); ?>

             <?php else : ?>
                 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
             <?php endif; ?>

</div>
            

<div class="container">

<div class="mygallery2">

<?php    // the query
             $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'private', 'posts_per_page'=>3)); ?>

             <?php if ( $wpb_all_query->have_posts() ) : ?>

                 <!-- the loop -->
                 <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                

                 <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
 
<?php endif; ?>
                   <a href="<?php echo $image[0]; ?>" data-toggle="lightbox" data-gallery="gallery" id="single" class="col-md-4 photo">
                   <?php the_content(); ?>
                 </a>
                 <?php endwhile; ?>
                 <!-- end of the loop -->

                 <?php wp_reset_postdata(); ?>

             <?php else : ?>
                 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
             <?php endif; ?>

      </div> 
   </div>

<div class="container">
    <footer>
        <img class="logo" src="<?php echo get_template_directory_uri();?>/img/W.png"/>
    </footer>
</div>


<?php
get_footer();?>