<?= $this->extend(dashboard_view("_layout")) ?>
<?= $this->section("content") ?>

<div class="page-content">
    <section class="row">
        <div class="col-12 p-0">
            <div id="infoMessage"><?php echo $message; ?></div>
            <?php $breadcrumb = [
                [
                    'name' => 'Dashboard',
                    'link' => 'panel/'
                ]
            ];
            breadcrumb($breadcrumb, 'Groups') ?>
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


<?= $this->endSection() ?>