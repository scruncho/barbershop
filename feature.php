
<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'database/conn.php'; 
?>



<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="gallery/img4.jfif" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="gallery/img3.jfif" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="gallery/img2.jfif" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="gallery/img1.jfif" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>



<?php require_once 'includes/footer.php'; ?>