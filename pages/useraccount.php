<?php 
require "lib.php";
userverifikasi();
$daftarUser = daftarUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__.'/head.php'; ?>
</head>

<body>

	<div id="wrapper">
		<?php include __DIR__.'/layout/navbar.php'; ?>
		<?php include __DIR__.'/layout/sidebar.php'; ?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">User Access</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="myTables">
								<thead>
									<tr style="text-align: center;">
										<td>No</td>
										<td>ID</td>
										<td>First Name</td>
										<td>Last Name</td>
										<td>Email</td>
										<td style="width: 12%;">Action</td>
									</tr>
								</thead>
								<tbody>
									<?php 
									$x = 1;
									foreach ($daftarUser as $key => $daftarUser) {
										?>
										<tr class="odd gradeX">
											<td style="text-align: center;"><?php echo $x;?></td>
											<td style="text-align: center;"><?php echo $daftarUser['id']; ?></td>
											<td><?php echo $daftarUser['firstName']; ?></td>
											<td><?php echo $daftarUser['lastName']; ?></td>
											<td><?php echo $daftarUser['email']; ?></td>
											<td style="text-align: center;">
												<a href="edituser.php?id=<?php echo $daftarUser['id'];?>" type="button" class="btn btn-warning btn-sm">Edit</a>
												<a type="button" class="btn btn-danger btn-sm" onclick="confirm_delete('deleteuser.php?&id=<?php echo  $daftarUser['id']; ?>');")">Delete</a>
											</td>
										</tr>
										<?php
										$x++; 
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<?php include __DIR__.'/layout/footer.php'; ?>
		</div>
	</div>


	<!-- modal hapus -->
	<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title" id="userModalLabel">Delete User</h1>
				</div>
				<div class="modal-body">
					<p>Anda yakin ingin menghapus data ini?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<a href="#" type="button" class="btn btn-danger" id="delete_link">Delete</a>
				</div>
			</div>
		</div>
	</div>


	<!-- Javascript untuk popup modal Delete--> 
	<script type="text/javascript">
		function confirm_delete(delete_url)
		{
			$('#modal_delete').modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href' , delete_url);
		}
	</script>

	<!-- Script JS -->
	<?php include __DIR__.'/js.php'; ?>

</body>
</html>
