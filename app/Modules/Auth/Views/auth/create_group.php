<?= $this->extend(panelview("cms\_layout")) ?>
<?= $this->section("content") ?>
<div id="infoMessage"><?php echo $message; ?></div>
<div class="page-content">
      <section class="row">
            <div class="col-12 p-0">
                  <?php $breadcrumb = [
                        [
                              'name' => 'Dashboard',
                              'link' => 'panel/'
                        ],
                        [
                              'name' => 'Groups',
                              'link' => 'auth/groups'
                        ]
                  ];
                  breadcrumb($breadcrumb, 'Tambah Group Baru') ?>
                  <div class="card">
                        <div class="card-header">
                              <h4>
                                    Silakan masukkan informasi grup di bawah ini
                              </h4>
                        </div>
                        <div class="card-body">
                              <!-- icon bootstrap -->
                              <form action="<?= base_url('auth/create_group') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row justify-content-center">
                                          <div class="col-11">
                                                <label for="group_name" class="form-label">Nama Group:</label>
                                                <div class="input-group">
                                                      <span class="input-group-text" id="fnIcon"><i class="bi bi-diagram-3-fill"></i></span>
                                                      <input type="text" class="form-control" name="group_name" id="group_name" placeholder="Nama Group" aria-describedby="fnIcon">
                                                </div>
                                                <label for="description" class="form-label">Deskripsi:</label>
                                                <div class="input-group">
                                                      <span class="input-group-text" id="fnIcon"><i class="bi bi-body-text"></i></span>
                                                      <input type="text" class="form-control" name="description" id="description" placeholder="Deskripsi" aria-describedby="fnIcon">
                                                </div>
                                                <div class="pt-4">
                                                      <button type="submit" class="btn btn btn-outline-dark"><i class="fas fa-user-plus"></i>Tambah Group</button>
                                                </div>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </section>

</div>
<?= $this->endSection() ?>