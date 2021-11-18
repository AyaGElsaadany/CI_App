<table class="table table-bordered table-striped">
    <thead>
        <th>Name</th>
        <th>Login Name</th>
        <th>Phone Number</th>
        <th>Activation Status</th>
        <th>Show User</th>
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
                echo "</tr>";
            }
        ?>
    </tbody>
</table>


<?php
	echo $this->pagination->create_links();
?>
