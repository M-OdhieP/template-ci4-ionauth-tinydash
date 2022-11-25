<?= $this->extend(dashboard_view('_layouts')); ?>
<?= $this->section("content") ?>
<?php $validation = \Config\Services::validation(); ?>
<div class="page-content">
      <section class="row">
            <div class="col-12 p-0">

                  <div class="card">
                        <div class="card-body">
                              <div id="infoMessage" class="text-danger"><?php echo $message; ?></div>
                              <?php echo form_open('auth/change_password'); ?>
                              <div class="row justify-content-center">
                                    <div class="col-11">
                                          <label for="first_name" class="form-label">Password Lama:</label>
                                          <div class="input-group mb-3">
                                                <span class="input-group-text" id="fnIcon"><i class="bi bi-person"></i></span>
                                                <input type="password" class="form-control" name="old" id="old" placeholder="Password Lama" aria-describedby="fnIcon">
                                          </div>
                                          <label for=" password" class="form-label">Password Baru:</label>
                                          <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="PasswordIcon"><i class="bi bi-key"></i></span>
                                                <input type="password" class="form-control" name="new" id="new" placeholder="New Password" aria-describedby="PasswordIcon">
                                          </div>
                                          <label for="password_confirm" class="form-label">Konfirmasi Password Baru:</label>
                                          <div class="input-group mb-3">
                                                <span class="input-group-text" id="PasswordConfirmIcon"><i class="bi bi-key-fill"></i></span>
                                                <input type="password" class="form-control" name="new_confirm" id="new_confirm" placeholder="Konfirmasi Password" aria-describedby="PasswordConfirmIcon">
                                          </div>
                                          <?php echo form_input($user_id); ?>
                                          <div class="pt-1">
                                                <button type="submit" class="btn btn btn-outline-dark"><i class="fas fa-user-plus"></i>Edit Password</button>
                                          </div>
                                    </div>
                              </div>
                              <?php echo form_close(); ?>
                        </div>
                  </div>
            </div>
      </section>
      <?= $this->endSection() ?>