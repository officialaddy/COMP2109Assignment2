<?php

 /*template name: Urban Clothing */
 

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
            <div class="container" style="margin-bottom:50px;">
                <h2 style="margin:50px 0px;color:#2E3192;text-align:center">Urban Clothing</h2>
                <?php echo do_shortcode('[showurbanclothes]');?>
            </div>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();