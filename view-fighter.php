<h1>Fighter</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
          <th>ID</th>
      <th>Name</th>
      <th>Weight</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($fighter = $fighters->fetch_assoc()) {
?>
<tr>
  <td><?php echo $fighter['fighter_ID']; ?></td>
  <td><?php echo $fighter['fighter_name']; ?></td>
  <td><?php echo $fighter['weight']; ?></td>
  <td><a href="gyms-by-fighter.php?id=<?php echo $fighter['fighter_ID']; ?>">Gyms</a></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
