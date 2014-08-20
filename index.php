<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header();
get_sidebar( 'mobile' ); ?>


	<div id="primary" style="margin-left:50px;" class="site-content span6">
		<div id="content" role="main">
		<div id="this-carousel-id" class="carousel slide">
        <div class="carousel-inner">
          <?php $posts = (query_posts( 'cat='.get_cat_ID('slider') ));
           //var_dump($posts);
          static $flag_active = 1;
           foreach ($posts as $value) {            
             echo ' <div class="item ';
             if($flag_active == 1)
             {
              echo 'active';
             }
             echo '">';            
             echo '<img height="100%" width="100%" src="'.wp_get_attachment_url( get_post_thumbnail_id($value->ID) ).'" />';
             
             
             echo '<div class="carousel-caption">';
             echo '<p>'.$value->post_title.'</p>';
             echo '<p>'.substr($value->post_content, 0,300) .'</p><p>';
             
             echo "</div></div>";
             $flag_active++;
            
           }
            ?>
   
        </div><!-- .carousel-inner -->
        <!--  next and previous controls here
              href values must reference the id for this carousel -->
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
          </div><!-- .carousel -->
          </div>
		  
          </div><!-- .content -->
		  <?php 
              $posts = (query_posts( 'cat='.get_cat_ID('haber') ));
          ?>     
            <div class="span4">
              <div class="row">
                <?php if(get_bloginfo('language') == "en-US"): ?>
				<div ><img src="http://www.teknoplan.com.tr/wp-content/themes/teknoplantheme/assets/img/urun_satislari_label_eng.png" usemap="#Map" style="background-image: url('http://www.teknoplan.com.tr/wp-content/themes/teknoplantheme/assets/img/urun_satislari_label.png');background-size:90% 90%;" border="0">
                      <map name="Map" id="Map">
                        <area shape="rect" coords="140,5,263,88" href="http://automation.teknoplan.com.tr/index.php/urunler/?lang=en" />
                        <area shape="rect" coords="268,4,430,89" href="http://teknoplan.com.tr/index.php/urunler-otomasyon/?lang=en" />
                      </map>
                      </div>       
                 <?php else: ?>
                    <div ><img src="http://www.teknoplan.com.tr/wp-content/themes/teknoplantheme/assets/img/urun_satislari_label.png" usemap="#Map" style="margin-top:27px;background-image: url('http://www.teknoplan.com.tr/wp-content/themes/teknoplantheme/assets/img/urun_satislari_label.png');background-size:90% 90%;" border="0">
                      <map name="Map" id="Map">
                        <area shape="rect" coords="140,5,263,88" href="http://automation.teknoplan.com.tr/index.php/urunler/" />
                        <area shape="rect" coords="268,4,430,89" href="http://teknoplan.com.tr/index.php/urunler-otomasyon/" />
                      </map>
                      </div>                              
                <?php endif; ?>
                
              </div>              
              <div class="row">
              <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <?php
                  if(get_bloginfo('language') == "en-US")
                    echo "<a href='http://teknoplan.com.tr/index.php/category/haber/?lang=en'> News</a>";
                  else
                    echo "<a href='http://teknoplan.com.tr/index.php/category/haber/'> Haberler</a>";                  
                  ?>
                </h3>
              </div>      
              <div class="panel-body">
                <div class="list-group">
                  <?php
                foreach ($posts as $value) {
                    echo '<a class="list-group-item" href="'.get_permalink( $value->ID).'">'.$value->post_title.'</a>';
                      }
                ?>
                </div>
            </div>
          </div>
          </div>
        </div>
            
          
        </div>
		  
		  	</div><!-- #primary -->
			 <div class="span4 text-center">
                    <a href="http://machine.teknoplan.com.tr/">
                    <img class="img-circle" style="width: 140px; height: 140px;" src="http://teknoplan.com.tr/wp-content/uploads/2013/10/makine.jpeg">
                    <h2>Makine</h2>
                    <p></p>
                    </a>
                  </div>
                  <div class="span4 text-center">
                    <a href="http://automation.teknoplan.com.tr/">
                    <img class="img-circle" style="width: 140px; height: 140px;" src="http://teknoplan.com.tr/wp-content/uploads/2013/10/automation1.jpg">
                    <h2>Otomasyon</h2>
                    <p></p>
                   </a>
                  </div>
                  <div class="span4 text-center">
                    <a href="http://it.teknoplan.com.tr">
                    <img class="img-circle" style="width: 140px; height: 140px;" src="http://teknoplan.com.tr/wp-content/uploads/2013/10/software.jpeg">
                    <h2>Bilişim</h2>
                    </a>
                  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>