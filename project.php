<?php
/*
Template Name: Project
*/
get_header();
$feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id() ); 
?>

<!-- projects section starts here -->
     <section class="gallery projects py-2 projects-page inner-project-page">
        <div class="container">
			
            <div class="row mt-5 grid">
				<?php
			$gallery = get_field('work_listing'); 
			foreach($gallery as $gallery_img){
			?>
                <!-- single col -->
                 <div class="col-md-6 col-sm-6 col-lg-3 my-3">
                    <div class="projects-img-wrapper">
                        <img src="<?php echo $gallery_img['url']; ?>" alt="<?php echo $gallery_img['alt']; ?>" class="img-fluid">
                        <div class="plus-sign">
                            <a href="<?php echo $gallery_img['url']; ?>" data-fancybox="gallery">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2"/></svg>
                        </a>
                        </div>
                    </div>
                 </div>
                <!-- end of single col -->
				
				 <?php } ?>                                        
            </div>
        </div>
     </section>
    <!-- projects section ends here -->

<?php get_footer(); ?>