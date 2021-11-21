<table class="table table-bordered table-striped">
    <thead>
        <th>Name</th>
        <th>Login Name</th>
        <th>Phone Number</th>
        <th>Activation Status</th>
        <th>Show User</th>
		<th>Edit User</th>
    </thead>
    <tbody>
        <?php
            foreach($users as $row){
                echo "<tr>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->login_name . "</td>";
                echo "<td>" . $row->phone . "</td>";
                echo "<td>" . $row->active . "</td>";
                echo "<td>";
                echo '<a href="'. base_url('index.php/users/show_user/'.$row->id) . '"> Show </a>';
                echo "</td>";
				echo "<td>";
                echo '<a href="'. base_url('index.php/users/edit/'.$row->id) . '"> Edit </a>';
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav> -->

<?php
	echo $this->pagination->create_links();
?>
