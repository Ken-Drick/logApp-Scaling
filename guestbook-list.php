<?php
require('config/config.php');
require('config/db.php');

$sql = "SELECT IdNo ,lastname, firstname, Address, log_date from person";
$result = mysqli_query($conn,$sql);

?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($result as $Ken) : ?>
                    <tr>
                    <th scope="row"><?php echo $Ken['IdNo'];?></th>
                    <td><?php echo $Ken['lastname'];?></td>
                    <td><?php echo $Ken['firstname'];?></td>
                    <td><?php echo $Ken['Address'];?></td>
                    <td><?php echo $Ken['log_date'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>