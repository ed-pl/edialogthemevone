<?php
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
?>

<?php get_header();?>

<!--Jumbotron-->
<div class="banner d-flex justify-content-center align-items-center" style="text-shadow: -2px 0 black, 0 2px black,  1px 0 black, 0 -3px black;">


	<div class="p-5 text-center">
      <div class="jumbotron-text container-fluid py-5 text-bg-info bg-opacity-50">
        <h3 class="jumbotron-text display-5 fw-bold text-white" style="text-shadow: -2px 0 black, 0 2px black,  1px 0 black, 0 -1px black;">Du hast eine Digitale Idee</h3>
        <h3 class="jumbotron-text fs-4 text-center text-white" style="text-shadow: -1px 0 black, 0 2px black,  1px 0 black, 0 -1px black;">Wir <i class="bi bi-balloon-heart" style="font-size: 5rem;"></i> lieben das zu Coden</h3>
		<h3 class="jumbotron-text fs-4 text-center text-white" style="text-shadow: -1px 0 black, 0 2px black,  1px 0 black, 0 -1px black;"> und setze <i class="bi bi-laptop" style="font-size: 3rem;"></i>  es für Dich um</h3>
        
      </div>
		
    </div>

</div>

<!--Wilkomm Bersich-->

<div 

class="container-fluid p-5 mb-0 px-0 text-white"
style="background: linear-gradient(135deg,rgb(13, 13, 185) 0%,rgba(172,198,242,0.75) 100%);"

>
	<div class="container-fluid">
    <div class="row">
        
        <div class="herzlich-willkomen-bereich col-12 text-center">
            <h2>Herzlich Wilkommen</h2>
			<hr>
			<h5>
				Wir sind der Digitalpartner für Ihr Unternehmen
			</h5>
			
			<h5>
				Im Bereich KI - Web-entwicklung sowie Branchen-Software-Lösungen
			</h5>
			<hr>
			<h5>
			Schnell | Zuverlässig | Kostengünstig 
			</h5>

          
        </div>
        
    </div>
</div>
</div>
<!-- Leistungen Bereich -->
 <!-- Titel - Leistungen -->
<div class="container-fluid pt-5 p-1 bg-secondary bg-opacity-10">
    <div class="row">
        
        <div class="col-12 mt-3 text-center">
            <h4 class="unter-color"><strong style="background:linear-gradient(180deg, transparent 60%, aquamarine 90%);
              ">Leistungen / Full-Services</strong></h4>
          
        </div>
        
    </div>
</div>
<!-- - Cards - LEISTUNGEN - Die Posts Cards  --> 
<div class="container py-5 bg-secondary bg-opacity-10">
    <div class="row justify-content-md-center py-2 px-2">
       
			
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
		             
		   <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mt-5 mb-5">
			
		
			   
				<div class="card h-100 " 
					 style="border-radius: 0px; border: 2px; box-shadow: 5px 6px rgba(124, 249, 214, 0.90); 
							background: linear-gradient(135deg,rgb(144, 189, 255, 100%) 0%,hsla(157.85deg, 97.78%, 21.66%, 0.75) 100%);
							">
						<div 
						class="card-icon position-absolute start-50 translate-middle textlight rounded-circle p-3"
						style="background: linear-gradient(135deg,rgb(6, 6, 156) 0%,hsla(218, 97.20%, 57.30%, 0.75) 100%);"
						>	

							<img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="" class="img-fluid" width="50" height="50">
							
					</div>
                    <div class="post mt-3 mb-3">
                        <h5 class="leistungen-titel py-1 px-2 pt-5 text-width"><?php the_title(); ?></h5>
						<hr>
                        <div class="posty pt-3 px-2 text-white">

							<?php echo get_the_content(); ?>
						
                        </div>
                        
                    </div>
							
				</div><!-- Card -->
				
           
			</div><!--End col-md-->
			   
			        <?php endwhile;
            else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
        
    </div>
</div>

<!-- Titel - Service -->

<!-- Ende Section Services -->

<!-- Technologien -->
<section class="mb-5">

<div class="row">
<div class="col-12 mt-3 mb-5 text-center">
	<!-- Section Title - Technologien - -->
	<h4>
		<strong style="background:linear-gradient(180deg, transparent 60%, aquamarine 95%);
         ">Technologien</strong>
	</h4>
	
</div>
<div class="col">
<div class="container text-center d-flex justify-content-evenly">
<a>
<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 512 512">
	<!--!Font Awesome Free 6.7.2 by @fontawesome - 
	https://fontawesome.com License - 
	https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
	<path fill="#74C0FC" 
	d="M403.5 455.4A246.2 246.2 0 0 1 256 504C118.8 504 8 393 8 256 8 118.8 119 8 256 8a247.4 247.4 0 0 1 165.7 63.5 3.6 3.6 0 0 1 -2.9 6.2A418.6 418.6 0 0 0 362.1 74c-129.4 0-222.4 53.5-222.4 155.4 0 109 92.1 145.9 176.8 178.7 33.6 13 65.4 25.4 87 41.6a3.6 3.6 0 0 1 0 5.7zM503 233.1a3.6 3.6 0 0 0 -1.3-2.4c-51.8-43-93.6-60.5-144.5-60.5-84.1 0-80.3 52.2-80.3 53.6 0 42.6 52.1 62 112.3 84.5 31.1 11.6 63.2 23.6 92.7 39.9a3.6 3.6 0 0 0 5-1.8A249 249 0 0 0 503 233.1z"/>
</svg>
Shopware</a>
<a>
<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 512 512">
	<!--!Font Awesome Free 6.7.2 by @fontawesome - 
	https://fontawesome.com License - 
	https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
	<path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8 .9 0 1.8 .1 2.8 .2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7 .3 13.7 .3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"/></svg>
WordPress</a>
<a>
<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 448 512">
	<!--!Font Awesome Free 6.7.2 by @fontawesome - 
	https://fontawesome.com License - 
	https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
	<path fill="#e67f0a" d="M178.7 78.4c0-24.7 5.4-32.4 13.9-39.4-69.5 8.5-149.3 34-176.3 66.4-5.4 7.7-9.3 20.8-9.3 37.1C7 246 113.8 480 191.1 480c36.3 0 97.3-59.5 146.7-139-7 2.3-11.6 2.3-18.5 2.3-57.2 0-140.6-198.5-140.6-264.9zM301.5 32c-30.1 0-41.7 5.4-41.7 36.3 0 66.4 53.8 198.5 101.7 198.5 26.3 0 78.8-99.7 78.8-182.3 0-40.9-67-52.5-138.8-52.5z"/></svg>
TYPO3</a>

<a>
<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 512 512">
	<!--!Font Awesome Free 6.7.2 by @fontawesome - 
	https://fontawesome.com License - 
	https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
	<path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm133.7 143.5c-11.5 .4-19.4-6.5-19.8-16.9-.3-9.2 6.7-13.4 6.5-18.9-.2-6.6-10.2-6.8-12.9-6.7-39.8 1.3-48.6 57-58.9 113.9 21.4 3.2 36.7-.7 45.1-6.2 12-7.8-3.3-15.7-1.4-24.6 4-18.2 32.6-19 32 5.3-.4 17.9-25.9 41.8-77.6 35.7-10.8 59.5-18.4 115-58.2 161.7-29 34.5-58.4 39.8-71.6 40.3-24.7 .9-41-12.3-41.6-29.8-.6-17 14.5-26.3 24.3-26.6 21.9-.8 30.1 25.7 14.9 34-12.1 9.7 .1 12.6 2.1 12.6 10.4-.4 17.3-5.5 22.2-9 24-20 33.2-54.9 45.4-118.4 8.2-49.7 17-78 18.2-82-16.9-12.8-27.1-28.6-49.9-34.7-15.6-4.2-25.1-.6-31.8 7.8-7.9 10-5.3 23 2.4 30.7l12.6 14c15.5 17.9 24 31.9 20.8 50.6-5.1 29.9-40.7 52.9-82.9 39.9-36-11.1-42.7-36.6-38.4-50.6 7.5-24.2 42.4-11.7 34.6 13.6-2.8 8.6-4.9 8.7-6.3 13.1-4.6 14.8 41.9 28.4 51-1.4 4.5-14.5-5.3-21.7-22.3-39.9-28.5-31.8-16-65.5 3-79.7C204.2 140.1 251.9 197 262 205.3c37.2-109 100.5-105.5 102.4-105.5 25.2-.8 44.2 10.6 44.8 28.7 .3 7.7-4.2 22.6-19.5 23.1z"/></svg>
Symfony</a>

		</div>
	</div>
</div>

</section>

<!-- Parallaxa Section -->
<section>
<div class="parallax">
	

<div class="p-2 mt-3 text-center ">
      <div class="container-fluid py-3 pt-3 " style="padding-top: 4rem;">
		  
		  
		  <i class="fa-solid fa-file-shield" style="color: #ffffff; font-size: 4rem;"></i>
        <h3 class="display-5 fw-bold text-white" 
		    style="text-shadow: -4px 0 black, 0 2px black,  1px 0 black, 0 -1px black;">
		    Cybersicherheit und sabuere Daten
	    </h3>
    
      </div>
</div>
  
</div><!-- /Content-->

<!-- End Parallax -->

</section><!-- /Parallax Section -->
		
<!-- Tech Stack -->
<section>
			
<div class="row">
			
	<div class="col-12 text-center mt-5 mb-5">
		
		<h4 class="pb-5">
		<strong style="background:linear-gradient(180deg, transparent 40%, aquamarine 90%);
         ">Tech Stack</strong></h4>
		
	</div>

<div class="col mt-5">

 <div class="icons-tech-stack text-center gx-3 d-flex flex-wrap justify-content-evenly" style="font-size: 3rem; padding: 8px;">
  <a href="##"              id="html"><i class="fab fa-html5"></i></a>
  <a href="##" class="ms-3" id="css"><i class="fab fa-css3-alt"></i></a>
  <a href="##" class="ms-3" id="js"><i class="fab fa-js"></i></a>
  <a href="##" class="ms-3" id="sass"><i class="fab fa-sass"></i></a>
  <a href="##" class="ms-3" id="php"><i class="fab fa-php"></i></a>
  <a href="##" class="ms-3" id="symfon"><i class="fab fa-symfony"></i></a>
  <a href="##" class="ms-3" id="github"><i class="fab fa-typo3"></i></a>
  <a href="##" class="ms-3" id="wordpress"><i class="fab fa-wordpress"></i></a>
  <a href="##" class="ms-3" id="adobe"><i class="fab fa-shopware"></i></a>
  <a href="##" class="ms-3" id="python"><i class="fab fa-python"></i></a>
  <a href="##" class="ms-3" id="bootstrap"><i class="fab fa-bootstrap"></i></a>
  <a href="##" id="github"><i class="fab fa-github"></i></a>

		</div>
  	</div>
</div>
	
</section>


<!-- Referenzen -->
<section class="mt-5 mb-3">
<div class="col-12 mb-3 text-center">
			<h4 class="mb-3">
		<strong style="background:linear-gradient(180deg, transparent 70%, aquamarine 90%);
         ">Referenzen</strong></h4>
	
		</div>
	
</section>


<!-- Image Gallery 1 -->
<section class="mt-3">
<div class="row">
<div class="col-xs-10 offset-xs-1">
<div class="row">
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample14.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg">TYPO3</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample20.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg">TYPO3</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card card-inverse"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample22.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg">TYPO3</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample15.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg">Wordpress</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample35.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample35.jpg">Wordpress</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample16.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample16.jpg">Shopware</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample13.jpg" class="card-img img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample13.jpg">TYPO3</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample11.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample11.jpg">Shopware</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample23.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg">Shopware</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample9.jpg" class="card-img img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample9.jpg">Wordpress</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample5.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample5.jpg">Shopware</a></h4>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample4.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample4.jpg">view</a></h4>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg" class="card-img img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg">TYPO3</a></h4>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample2.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample2.jpg">Shopware</a></h4>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-xs-center">
<div class="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample7.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample7.jpg">Wordpress</a></h4>
</div>
</div>
</div>
<div class="col-xl-3 col-xl-offset-0 col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-4 col-sm-6 text-xs-center">
<div class="card m-x-auto"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample21.jpg" class="img-fluid" />
<div class="card-img-overlay">
<h4 class="card-title text-xs-center"><a class="text-light" href="#galleryModal" data-toggle="modal" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample21.jpg">Shopware</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- Image Gallery 2 -->


<hr>
<!-- Projekt Anfrage -->
<section class="mt-3 mb-3">
		
	<div class="row mt-5 mb-5">
			
		<div class="col-12 mb-3 text-center">
			<h3>Projekt Anfrage | schnell | unferbindlich</h3>
		</div>
		<div class="col-12 mt-3 text-center">
			<button type="button" class="btn btn-primary btn-lg rounded-0">Anfrage anforrdern</button>
		</div>
	</div>
</section>

<?php get_footer(); ?>