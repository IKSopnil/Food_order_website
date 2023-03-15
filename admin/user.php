<?php include"db_connect.php";


$sql = "SELECT * FROM user";

$result=$conn->query($sql);
?>

<section>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">phone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
  if ($result->num_rows > 0) {

$num = 0;
while ($row = $result->fetch_assoc()) {
  ?>

    <tr>
      <th scope="row">1</th>
      <td>1</td>
      <td>john</td>
      <td>john.doe@example.com</td>
      <td>sdsadasd</td>
      <td>123street</td>
      <td>123</td>
      <td>
        <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <?php
}
  }
  ?>
  </tbody>
</table>
</section>