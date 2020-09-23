<?php $row = $results->fetch_assoc();
/*$date = date("d F Y", strtonline($row['date']));*/
?>

<!-- image -->
<div class="container">
  <div class="row mt-3">
    <div class="col">
      <h3><?php echo $row['title']; ?></h3>
    </div>
  </div>
  <div class="row mt-3"><!-- mt = margin top -->
    <div class="col-3">
      <img src="<?php echo $row['image']; ?>" width=100% alt="image" class="movie">
    </div>
    <!-- information image -->
    <div class="col-4">
      <ul class="list-group">
        <li class="list-group-item active text-dark"><?php echo $row['title']; ?></li>
        <li class="list-group-item">Sortie de Film : <?php echo $row['date']; ?></li>
        <li class="list-group-item"><?php echo $row['type']; ?></li>
      </ul>
    </div>
  </div>
  <!-- Description -->
  <div class="row mt-3">
    <div class="col">
      <h3 class="ml-3">Synopsis</h3>
       <p class="text-justify"><?php echo $row['description']; ?></p>
    </div>
  </div>
  <!-- Trailer -->
  <div class="row"> <!-- centrer les éléments -->
    <div class="col "> <!-- md = taille  -->
      <h3>Trailer</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="<?php echo $row['trailer']; ?>" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
