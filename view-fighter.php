<h1>Fighter</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
          <th>ID</th>
      <th>Name</th>
      <th>Weight</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($instructor = $instructors->fetch_assoc()) {
?>
<tr>
  <td><?php echo $fighter['figher_ID']; ?></td>
  <td><?php echo $fighter['figher_name']; ?></td>
  <td><?php echo $fighter['weight']; ?></td>
</tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
