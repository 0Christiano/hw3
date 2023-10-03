<h1>Fighters with Gyms</h1>
<div class="card-group">
      <?php
while ($fighter = $fighters->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $fighter['fighter_name']; ?></h5>
      <p class="card-text">    
  <?php
$Gyms = selectGymsbyfighter($fighter['fighter_ID']);
  while ($gym = $gyms->fetch_assoc()) {
    ?>
    <?php
  }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Weight: <?php echo $fighter['weight']; ?></small></p>
    </div>
  </div>
 
      <?php
}
?>
</div>
