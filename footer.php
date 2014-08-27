<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */
?>
</div><!-- #main .wrapper -->
</div>
<div style="margin-top:5%;">
</div><!-- #page -->

			<?php wp_footer(); ?>
			<div id="footer_menu" class="col-lg-12 visible-lg" style="background-color:#1d1c1c" >
			<div class="container" style="padding-top:20px;padding-bottom:20px;">
			<div id="menu_footer_id">
            <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'footer_menu_class','menu_id'=>'menu_footer_id','items_wrap'=>'<ul id="%1$s">%3$s</ul>')); ?>
			</div>
			</div>
</div>
<div  style="background-color:#d6cfb8">
			
					<div class="container-fluid" style="padding-top:20px;padding-bottom:20px;">
					<div class="row">
					<div class="container-fluid">
              <a href="http://www.twitter.com/teknoplan_eng"><img height="36px" width="36px" src="http://teknoplan.com.tr/wp-content/uploads/2013/12/Active-Twitter-icon.png"></a>
              <a href="https://www.facebook.com/TeknoplanMuh"><img height="36px" width="36px" src="http://teknoplan.com.tr/wp-content/uploads/2013/12/Active-Facebook-icon.png"></a>
              <a href="http://www.youtube.com/channel/UCW5dQYg6Get_4qzRk5ZoF1A"><img height="36px" width="36px" src="http://teknoplan.com.tr/wp-content/uploads/2013/12/Active-YouTube-icon.png"></a>
              <a href="http://www.linkedin.com/company/2620339"><img height="36px" width="36px" src="http://teknoplan.com.tr/wp-content/uploads/2013/12/Active-LinkedIn-icon.png"></a>
              <a href="#"><img height="36px" width="36px" src="http://teknoplan.com.tr/wp-content/uploads/2013/12/Hover-Google-plus-icon.png"></a>
					<div class="pull-right">
					<p><strong><span style="color:#054b93">Tekno</span><span style="color:#ff6600">plan</span> © <span style="color:#201f1a">Copyright 2013</span></strong> </a></p>
					</div>
					</div>
					</div>
			<div class="row">
        	<div class="container">
            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <p itemprop="streetAddress" style="text-align:center">
              Kdz. Ereğli OSB, 4 Nolu Yol Sokak No: 12, Kdz.Ereğli/Zonguldak
            </p></span>
            <p style="text-align:center"><span itemprop="telephone">0372 – 312 18 60 </span>| 0372 – 312 18 73</p>
            <p itemprop="email" style="text-align:center"> teknoplan@teknoplan.com.tr</p>
			</div>
			</div>
			</div>
			</div>
</body>
</html>