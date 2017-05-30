<?php include 'inc/header.php' ;
		include 'lib/user.php';
		$user=new User();


?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>User List:<span class="pull-right"><strong>Welcome!</strong>Arjun</span></h2>
				</div>

					<div class="panel-body">
						<table class="table table-striped">
						<tr>
							<th width="20%">Serial</th>
							<th width="20%">Name</th>
							<th width="20%">Username</th>
							<th width="20%">Email</th>
							<th width="20%">Action</th>
						</tr>

							<tr>
								<td>01</td>
								<td>Arjun Ghosh</td>
								<td>Arjun420</td>
								<td>arjun@gmail.com</td>
								<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
							</tr>


							<tr>
								<td>02</td>
								<td>Alok Ghosh</td>
								<td>Alok430</td>
								<td>alok@gmail.com</td>
								<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
							</tr>


							<tr>
								<td>03</td>
								<td>Jakia sultana</td>
								<td>jakia20</td>
								<td>toma@gmail.com</td>
								<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
							</tr>


							<tr>
								<td>04</td>
								<td>Ikramul haque</td>
								<td>emon567</td>
								<td>emon@gmail.com</td>
								<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
							</tr>
						</table>
					</div>
			</div>
				
				<?php include 'inc/footer.php' ;?>