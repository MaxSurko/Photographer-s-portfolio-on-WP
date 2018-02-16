<?php get_header(); ?>

<?php

while ( have_posts() ) : the_post(); ?>

    <div class="content_header">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="content_body">
			<div class="row form_contacts">
				<div class="col-sm-6">
					<ul class="ul_contacts">
						<li>
							<h3><i class="icon icon-basic-mail"></i> E-mail:</h3>
							<p><a href="#" target="_blank"><?php echo get_post_meta($post->ID, 'email', true); ?></a></p>
						</li>
						<li>
							<h3><i class="icon icon-basic-geolocalize-05"></i> Address:</h3>
							<p><?php echo get_post_meta($post->ID, 'address', true); ?></p>
						</li>
						<li>
							<h3><i class="icon icon-basic-smartphone"></i> Phone:</h3>
							<p><?php echo get_post_meta($post->ID, 'phone', true); ?></p>
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<form id="callback" class="callback">

						<h3>Let's make business</h3>

						<label>
							Name
							<input type="text" name="name" required>
						</label>

						<label>
							E-mail
							<input type="text" name="email" required>
						</label>

						<label>
							Message
							<textarea name="message" required></textarea>
						</label>
						
						<button class="button" type="submit">Confirm</button>

					</form>
				</div>
			</div>

		</div>
<?php
endwhile; ?>

<?php get_footer(); ?>