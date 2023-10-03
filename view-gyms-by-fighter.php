<h1>Gyms by instructor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
          <th>ID</th>
      <th>Name</th>
      <th>Description</th>
        <th>Style</th>
        <th>Origin</th>
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
  <td><?php echo $gym['style']; ?></td>
  <td><?php echo $gym['origin']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
