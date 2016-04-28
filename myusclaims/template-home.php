<?php
/**
 * Template Name: Template Home New
 **/
?>

<?php get_header();?>

	<div class="content-wrapper">
		<div class="home-banner" style="background: url('<?php the_field('banner_image');?>');">
		
			<div class="container">
			
				<div class="row">
					
					<div class="col-md-8 col-md-offset-4 col-sm-9 col-sm-offset-3">
						<div class="hb-inner">
							<?php if( get_field('banner_title') ): ?>
								<h2><?php the_field('banner_title');?></h2>
							<?php endif; ?>
							<?php if( get_field('banner_description') ): ?>
								<p><?php the_field('banner_description');?></p>
							<?php endif; ?>
							<?php if( get_field('banner_contact') ): ?>
								<div class="blue-row">
									<h3><?php the_field('banner_contact');?></h3>
								</div>
							<?php endif; ?>
							<?php if( get_field('banner_logo') ): ?>
								<img src="<?php the_field('banner_logo');?>" alt="reg"/>
							<?php endif; ?>
							
						</div>
					</div>
					
				</div> <!-- row end -->
			
			</div>
		</div> <!-- home-banner end -->
		<?php if( get_field('bottom_text') ): ?>
		<div class="info-wrapper">
			<div class="container">
				<h4><?php the_field('bottom_text');?></h4>
			</div>
		</div> <!-- info-wrapper end -->
		<?php endif; ?>
		
		<div class="programs-wrapper">
		
			<div class="container">
			
				<div class="programs-title-wrapper">
					<?php if( get_field('title') ): ?>
						<h2><?php the_field('title');?></h2>
					<?php endif; ?>
				</div>
				
				<div class="row">
					
					<?php

					// check if the repeater field has rows of data
					if( have_rows('process_list') ):

						// loop through the rows of data
						while ( have_rows('process_list') ) : the_row();?>
						
							<div class="col-md-4 col-sm-4">
								<div class="p-content">
									<?php if( get_sub_field('icon') ): ?>
										<img src="<?php the_sub_field('icon'); ?>" alt="reg"/>
									<?php endif; ?>
									<?php if( get_sub_field('column_title') ): ?>
										<h3><?php the_sub_field('column_title'); ?></h3>
									<?php endif; ?>
									<?php if( get_sub_field('column_description') ): ?>
										<?php the_sub_field('column_description'); ?>
									<?php endif; ?>
									
								</div>
							</div>
							
						<?php 
						endwhile;

					else :

						// no rows found

					endif;

					?>
					
				</div> <!-- row end -->
				
				<div class="learn-more-wrapper">
					<?php if( get_field('button_text') ): ?>
						<?php 
						$target = get_field('button_target_blank');
						?>
						<a href="<?php the_field('button_link');?>" <?php if($target=="Yes"){echo 'target="_blank"';}?>><?php the_field('button_text');?></a>
					<?php endif; ?>
					
				</div>
			
			</div>
		</div> <!-- home-banner end -->
		
		<div class="testimonial-wrapper hidden-xs">
		
			<div class="container">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php
						$y = 0;
						// check if the repeater field has rows of data
						if( have_rows('testimonial_list') ):

							// loop through the rows of data
							while ( have_rows('testimonial_list') ) : the_row();?>
								<li data-target="#carousel-example-generic" data-slide-to="<?php echo $y; ?>" <?php if($y==0){echo 'class="active"';}?>></li>
							<?php 
							$y++;
							endwhile;
						else :
							// no rows found
						endif;
						?>
					</ol>
					
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					
						<?php
						$x = 1;
						// check if the repeater field has rows of data
						if( have_rows('testimonial_list') ):

							// loop through the rows of data
							while ( have_rows('testimonial_list') ) : the_row();?>
							
								<div class="item <?php if($x==1){echo "active";}?>">
									<div class="row">
										<div class="col-md-2 col-md-offset-1">
											<div class="test-name">
												<?php if( get_sub_field('testimonial_image') ): ?>
													<img src="<?php the_sub_field('testimonial_image'); ?>" alt="reg"/>
												<?php endif; ?>
												
												<?php if( get_sub_field('testimonial_name') ): ?>
													<h4><?php the_sub_field('testimonial_name'); ?> <span><?php the_sub_field('testimonial_position'); ?></span></h4>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-8">
											<div class="test-caption">
												<p>"<?php the_sub_field('testimonial_description'); ?>"</p>
											</div>
										</div>
									</div>
								</div>
								
							<?php 
							$x++;
							endwhile;
						else :
							// no rows found
						endif;
						?>
					
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="left-arrow"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="right-arrow"></span>
						</a>
					</div>
				</div>
			</div>
		</div> <!-- testimonial-wrapper end -->
		
		<div class="wide-blue-wrapper">
			<div class="container">
				<?php if( get_field('row_title') ): ?>
					<h2><?php the_field('row_title');?></h2>
				<?php endif; ?>
				
				<div class="row row-top">
					<?php
					// check if the repeater field has rows of data
					if( have_rows('service_list') ):

						// loop through the rows of data
						while ( have_rows('service_list') ) : the_row();?>
							
							<div class="col-md-4 col-sm-6">
								<div class="row">
									<div class="col-md-3 col-sm-3 hidden-xs">
										<?php if( get_sub_field('service_icon') ): ?>
											<div class="img-wrapper">
												<a href="<?php the_sub_field('services_link'); ?>"><img src="<?php the_sub_field('service_icon'); ?>" alt="circ2"></a>
											</div>
										<?php endif; ?>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="blue-text equal_height">
											<?php if( get_sub_field('service_title') ): ?>
												<h3><?php the_sub_field('service_title'); ?></h3>
											<?php endif; ?>
											<?php if( get_sub_field('service_description') ): ?>
												<p><?php the_sub_field('service_description'); ?></p>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
								
						<?php 
						endwhile;
					else :
						// no rows found
					endif;
					?>
				</div>
				
				<div class="blue-details">
					<?php if( get_field('row_title') ): ?>
						<h3><?php the_field('contact_details');?></h3>
					<?php endif; ?>
					<h4>Still have questions? <a href="<?php the_field('faq_link');?>" class="faqs">Read our Faqs</a></h4>
				</div>
			</div>
		</div> <!-- wide-blue-wrapper end -->
		
	</div> <!-- content-wrapper end -->
	
<?php get_footer();?>
