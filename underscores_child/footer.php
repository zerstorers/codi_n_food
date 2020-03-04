


	</main>
	<footer id="colophon" class="site-footer">
		<div class="row m-5">
			<div class="col-12 col-md-4">
				<div>
					<h3 class="h2">Plop</h3>
					<p>Lorem ipsum dolor sitit molestiae temporibus nemo pariatur obcaecati exercitationem odio aut, adipisci minus repudiandae laborum!</p>
					<div class="d-flex">
						<i class="footer-icon fab fa-facebook-f"></i>
						<i class="footer-icon pl-5 fab fa-twitter"></i>
						<i class="footer-icon pl-5 fab fa-google-plus-g"></i>
						<i class="footer-icon pl-5 fas fa-phone-alt"></i>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 nav-footer">
				<nav>
					<h4>Quik link</h4>
					<ul class="list-unstyled">
						<li><a href="">HOME</a></li>
						<li><a href="">ABOUT</a></li>
						<li><a href="">SHOP</a></li>
						<li><a href="">BLOG</a></li>
						<li><a href="">CONTACT</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-12 col-md-4">
				<div>
					<h4>Weekly Newletter</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eligendi earum alias, doloribus vero error atque nobis vitae asperiores reiciendis. Ipsum vero officia hic dolorum iusto veniam minima. Asperiores, dolores.</p>
					<input type="text" placeholder="Your Email" class="w-100">
					<div class="d-flex mt-3 align-items-center">
						<input name="GDPR" type="checkbox"">
						<label class="m-0 pl-3" >Accept GDPR Terms</label>
					</div>
				</div>
			</div>
		</div>

		<div class="site-info" style="background-color: red;">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'underscores' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores' ), 'underscores', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
