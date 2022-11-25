<?= $this->extend(dashboard_view('_layouts')); ?>
<?= $this->section("content") ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title"><?= $title ?></h2>
            <div id="infoMessage"><?php echo $message; ?></div>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>Nama Group</th>
                                        <th>Deskripsi</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($groups as $group) : ?>
                                        <tr>
                                            <td><?= $group->name ?></td>
                                            <td><?= $group->description ?></td>

                                            <td class="text-center">
                                                <div>
                                                    <a href="<?= base_url("auth/edit_group/" . $group->id) ?>"><button type="button" class="btn mb-2 btn-info"><span class="fe fe-edit fe-16 mr-2"></span>Edit</button></a>
                                                    <a href="<?= base_url("auth/delete_group/" . $group->id) ?>" class="btn-delete"><button type="button" class="btn mb-2 btn-danger"><span class="fe fe-trash fe-16 mr-2"></span>Delete</button></a>
                                                </div>
                                            </td>


                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>

<?= $this->endSection() ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url('dashboard/css/dataTables.bootstrap4.css') ?>">
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src='<?= base_url('dashboard/js/jquery.dataTables.min.js') ?>'></script>
<script src='<?= base_url('dashboard/js/dataTables.bootstrap4.min.js') ?>'></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [10, 15, 25, -1],
            [10, 15, 25, "All"]
        ]
    });

    $('.btn-delete').on('click', function(e) {
        e.preventDefault();
        var urlToRedirect = e.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        Swal.fire({
            title: 'Yakin menghapus data ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Hapus`,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = urlToRedirect;
            }
        });
    });
</script>
<?= $this->endSection(); ?>


<div class="page-content">
    <section class="row">
        <div class="col-12 p-0">
            <div id="infoMessage"><?php echo $message; ?></div>

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Daftar Group</h4>
                    <a href="<?= base_url("auth/create_group") ?>" class="btn btn-outline-dark mb-2">
                        <i class="bi bi-person-plus-fill"></i>
                        Tambah Group Baru
                    </a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <th>Nama Group</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($groups as $group) : ?>
                                <tr>
                                    <td><?= $group->name ?></td>
                                    <td><?= $group->description ?></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="<?= base_url('auth/edit_group/' . $group->id) ?>" class="btn btn-outline-dark" data-toggle="tooltip" title="Edit"><i class="bi bi-pen"></i></a>
                                            <a href="<?= base_url('auth/delete_group/' . $group->id) ?>" class="btn btn-outline-dark hapus" data-toggle="tooltip" title="Hapus"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="m-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>