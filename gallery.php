<?php
$title = "Photo Gallery";
include ('./includes/header.php');
?>

<section class="w3l-inner-page-main">
<div class="breadcrumb-infhny">
<div class="container">
<nav aria-label="breadcrumb">
<h2 class="hny-title text-center">Gallery</h2>
<ol class="breadcrumb mb-0">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="gallery.php">Gallery</a></li>
<li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
</ol>
</nav>
</div>
</div>
</section>


<!-- portfolio -->
<section class="w3-gallery">
<div class="porfolio-inf py-5">
<div class="container py-lg-5">
<h3 class="hny-title text-center">Our Portfolio<span class="dot-1">.</span></h3>
<ul class="portfolio-categ filter my-md-5 my-4 p-0 text-center">
<li class="port-filter all active">
<a href="#">All</a>
</li>
<li class="cat-item-1">
<a href="#" title="Category 1">Architecture</a>
</li>
<li class="cat-item-2">
<a href="#" title="Category 2">Web Design</a>
</li>
<li class="cat-item-3">
<a href="#" title="Category 3">Creative</a>
</li>
<li class="cat-item-4">
<a href="#" title="Category 4">Portfolio</a>
</li>
</ul>
<ul class="portfolio-area clearfix p-0 m-0 row">
<li class="portfolio-item2 content" data-id="id-1" data-type="cat-item-1">
<span class="image-block">

<a class="image-zoom" href="assets/images/p1.jpg" data-gal="prettyPhoto[gallery]">
<div class="content-overlay"></div>
<img src="assets/images/p1.jpg" class="img-fluid" alt="portfolio-img">

<div class="content-details fadeIn-bottom">
<h3 class="content-title">Add Your Title</h3>

</div>
</a>
</span>
</li>
<li class="portfolio-item2 content" data-id="id-2" data-type="cat-item-2">
<span class="image-block">

<a class="image-zoom" href="assets/images/p2.jpg" data-gal="prettyPhoto[gallery]">
<div class="content-overlay"></div>
<img src="assets/images/p2.jpg" class="img-fluid" alt="portfolio-img">
<div class="content-details fadeIn-bottom">
<h3 class="content-title">Add Your Title</h3>

</div>
</a>
</span>
</li>
<li class="portfolio-item2 content" data-id="id-3" data-type="cat-item-1">
<span class="image-block">

<a class="image-zoom" href="assets/images/p3.jpg" data-gal="prettyPhoto[gallery]">
<div class="content-overlay"></div>
<img src="assets/images/p3.jpg" class="img-fluid" alt="portfolio-img">
<div class="content-details fadeIn-bottom">
<h3 class="content-title">Add Your Title</h3>

</div>
</a>
</span>
</li>
<li class="portfolio-item2 content" data-id="id-7" data-type="cat-item-3">
<span class="image-block">

<a class="image-zoom" href="assets/images/p4.jpg" data-gal="prettyPhoto[gallery]">
<div class="content-overlay"></div>
<img src="assets/images/p4.jpg" class="img-fluid" alt="portfolio-img">
<div class="content-details fadeIn-bottom">
<h3 class="content-title">Add Your Title</h3>

</div>
</a>
</span>
</li>
<li class="portfolio-item2 content" data-id="id-2" data-type="cat-item-2">
<span class="image-block">
<a class="image-zoom" href="assets/images/p5.jpg" data-gal="prettyPhoto[gallery]">
<div class="content-overlay"></div>
<img src="assets/images/p5.jpg" class="img-fluid" alt="portfolio-img">
<div class="content-details fadeIn-bottom">
<h3 class="content-title">Add Your Title</h3>

</div>
</a>
</span>
</li>
<li class="portfolio-item2 content" data-id="id-7" data-type="cat-item-3">
<span class="image-block">

<a class="image-zoom" href="assets/images/p6.jpg" data-gal="prettyPhoto[gallery]">
<div class="content-overlay"></div>
<img src="assets/images/p6.jpg" class="img-fluid" alt="portfolio-img">
<div class="content-details fadeIn-bottom">
<h3 class="content-title">Add Your Title</h3>

</div>
</a>
</span>
</li>
</ul>
<!--end portfolio-area -->
</div>
<!-- //gallery container -->
</div>
</section>


<?php
include ('./includes/footer.php');
?>
