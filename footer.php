        <footer id="colophon" class="site-footer" role="contentinfo">
        <?php get_sidebar('footer'); ?>
        <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'eruma-yon' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'eruma-yon' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'eruma-yon' ), 'eruma-yon', '<a href="http://www.eruma.se" rel="designer">Tobias Årud</a>' ); ?>
		</div><!-- .site-info -->
        </footer>
    </div><!-- #page .hfeed .site -->
    <script>
        var nav = responsiveNav(".nav-collapse");
    </script>
    <?php wp_footer(); ?>
</body>
</html>