<h1>Martial Arts by Gym</h1>
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
while ($MArt = $MArts->fetch_assoc()) {
?>
<tr>
  <td><?php echo $MArt['gym_ID']; ?></td>
  <td><?php echo $MArt['gym_name']; ?></td>
  <td><?php echo $MArt['gym_description']; ?></td>
  <td><?php echo $MArt['style']; ?></td>
  <td><?php echo $MArt['origin']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
