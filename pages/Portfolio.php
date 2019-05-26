<?php 
include './admin/datebase.php';
$var1 = "SELECT * FROM  project ORDER BY Id DESC";
$resultat = $db_connect->query($var1);
$data = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>



<section class="section-Portfolio A-bottom" id="PORTFOLIO">
    <h1 class="h1 text-center"><?= _H1Portfolio ?></h1> 
  <ul id="filters" class="clearfix d-flex justify-content-center">
    <li><span class="filter list-inline-item" data-filter=".app, .icon, .logo, .web">All</span></li>
    <li><span class="filter list-inline-item" data-filter=".app">HTML CSS</span></li>
    <li><span class="filter list-inline-item" data-filter=".icon">JavaScript</span></li>
    <li><span class="filter list-inline-item" data-filter=".logo">PHP</span></li>
    <li><span class="filter list-inline-item" data-filter=".web">Autre</span></li>
  </ul>
  
  <div id="portfoliolist" class="container">
  <?php 
  foreach($data as $projet) {
    $port_projet = <<<prod
 
  <div class="portfolio app" data-cat="{$projet['Category']}">
  <div class="portfolio-wrapper">			
    <img src="{$projet['Image']}" alt="" />
    <div class="label">
      <div class="label-text">
        <a class="text-title">Visual Infography</a>
        <span class="text-category">APP</span>
      </div>
      <div class="label-bg"></div>
    </div>
  </div>
</div>
prod;
echo  $port_projet;

}
  ?>

<!--     <div class="portfolio app" data-cat="app">
      <div class="portfolio-wrapper">			
        <img src="images/az.jpg" alt="" />
        <div class="label">
          <div class="label-text">
            <a class="text-title">Visual Infography</a>
            <span class="text-category">APP</span>
          </div>
          <div class="label-bg"></div>
        </div>
      </div>
    </div> -->		
 <!--    
    <div class="portfolio web" data-cat="web">
      <div class="portfolio-wrapper">						
        <img src="images/az.jpg" alt="" />
        <div class="label">
          <div class="label-text">
            <a class="text-title">Sonor's Design</a>
            <span class="text-category">Web design</span>
          </div>
          <div class="label-bg"></div>
        </div>
      </div>
    </div>				

    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper">			
        <img src="images/az.jpg" alt="" />
        <div class="label">
          <div class="label-text">
            <a class="text-title">KittyPic</a>
            <span class="text-category">Logo</span>
          </div>
          <div class="label-bg"></div>
        </div>
      </div>
    </div>																																								

    <div class="portfolio icon" data-cat="icon">
      <div class="portfolio-wrapper">			
        <img src="images/az.jpg" alt="" />
        <div class="label">
          <div class="label-text">
            <a class="text-title">Domino's Pizza</a>
            <span class="text-category">Icon</span>
          </div>
          <div class="label-bg"></div>
        </div>
      </div>
    </div>															
    		 -->																									          
  </div>
</section>