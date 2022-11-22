<?= $this->extend(dashboard_view('_layouts')); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url('dashboard/css/dataTables.bootstrap4.css') ?>">
<?= $this->endSection(); ?>



<?= $this->section('content'); ?>

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12">
			<h2 class="mb-2 page-title">User List</h2>
			<div class="row my-4">
				<!-- Small table -->
				<div class="col-md-12">
					<div class="card shadow">
						<div class="card-body">
							<!-- table -->
							<table class="table datatables" id="dataTable-1">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Email</th>
										<th>Groups</th>
										<th>Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $user) : ?>
										<?php if ($user->email == "hello@cindalogikagrafia.com") continue;  ?>
										<tr>
											<td><?= htmlspecialchars($user->first_name . ' ' . $user->last_name); ?></td>
											<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
											<td>
												<?php foreach ($user->groups as $group) : ?>
													<!-- <?php echo anchor('auth/edit_group/' . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br /> -->
													<?= $group->name ?> <br />
												<?php endforeach ?>
											</td>
											<td><?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, lang('Auth.index_active_link')) : anchor("auth/activate/" . $user->id, lang('Auth.index_inactive_link')); ?></td>
											<td class="text-center">
												<div>
													<a href="<?= base_url("auth/edit_user/" . $user->id) ?>"><button type="button" class="btn mb-2 btn-info"><span class="fe fe-edit fe-16 mr-2"></span>Edit</button></a>
													<a href="<?= base_url("auth/delete_user/" . $user->id) ?>"><button type="button" class="btn mb-2 btn-danger"><span class="fe fe-trash fe-16 mr-2"></span>Delete</button></a>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>

							</table>
						</div>
					</div>
				</div> <!-- simple table -->
			</div> <!-- end section -->
		</div> <!-- .col-12 -->
	</div> <!-- .row -->
</div> <!-- .container-fluid -->

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src='<?= base_url('dashboard/js/jquery.dataTables.min.js') ?>'></script>
<script src='<?= base_url('dashboard/js/dataTables.bootstrap4.min.js') ?>'></script>
<script>
	$('#dataTable-1').DataTable({
		autoWidth: true,
		"lengthMenu": [
			[10, 15, 25, -1],
			[10, 15, 25, "All"]
		]
	});
</script>
<?= $this->endSection(); ?>