<h1>Gym</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
          <th>ID</th>
      <th>Name</th>
      <th>Descriptiont</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($gym = $gym->fetch_assoc()) {
?>
<tr>
  <td><?php echo $fighter['gym_ID']; ?></td>
  <td><?php echo $fighter['gym_name']; ?></td>
  <td><?php echo $fighter['gym_description']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
