<?= $this->extend(dashboard_view('_layouts')); ?>
<?= $this->section("content") ?>
<div id="infoMessage"><?php echo $message; ?></div>
<div class="page-content">
      <section class="row">
            <div class="col-12 p-0">
                  <div class="page-heading mb-3">
                        <h3>Edit Group</h3>
                  </div>

                  <div class="card">
                        <div class="card-header">
                              <h4>
                                    Silakan masukkan informasi grup di bawah ini
                              </h4>
                        </div>
                        <div class="card-body">
                              <!-- icon bootstrap -->
                              <?php echo form_open(current_url()); ?>
                              <div class="row justify-content-center">
                                    <div class="col-11">
                                          <label for="group_name" class="form-label">Nama Group:</label>
                                          <div class="input-group">
                                                <span class="input-group-text" id="fnIcon"><i class="bi bi-diagram-3-fill"></i></span>
                                                <input type="text" class="form-control" name="group_name" id="group_name" placeholder="Nama Group" aria-describedby="fnIcon" value="<?= $group_name['value']; ?>">
                                          </div>
                                          <label for="description" class="form-label">Deskripsi:</label>
                                          <div class="input-group">
                                                <span class="input-group-text" id="fnIcon"><i class="bi bi-body-text"></i></span>
                                                <input type="text" class="form-control" name="group_description" id="group_description" placeholder="Deskripsi" aria-describedby="fnIcon" value="<?= $group_description['value']; ?>">
                                          </div>


                                          <div class="pt-4">
                                                <button type="submit" class="btn btn btn-outline-dark"><i class="fas fa-user-plus"></i>Edit Group</button>
                                          </div>
                                    </div>
                              </div>
                              <?php echo form_close(); ?>
                        </div>
                  </div>
            </div>
      </section>
</div>


<?= $this->endSection() ?>