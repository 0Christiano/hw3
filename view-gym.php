<h1>Gym</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
          <th>ID</th>
      <th>Name</th>
      <th>Descriptiont</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($gym = $gyms->fetch_assoc()) {
?>
<tr>
  <td><?php echo $gym['gym_ID']; ?></td>
  <td><?php echo $gym['gym_name']; ?></td>
  <td><?php echo $gym['gym_description']; ?></td>
  <td>
    <form method="post" action="MArts-by-gym.php">
      <input type="hidden" name="gid" value="<?php echo $gym['gym_ID']; ?>">
  <button type="submit" class="btn btn-primary">Martial Arts</button>
</form>
  </td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
