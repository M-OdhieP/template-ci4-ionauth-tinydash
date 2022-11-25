<?= $this->extend(dashboard_view('_layouts')); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
      <div class="row justify-content-center">
            <div class="col-12">
                  <h2 class="mb-2 page-title">Create User</h2>
                  <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                              <div class="card shadow">
                                    <div class="card-body">
                                          <form action="<?= base_url('auth/create_user') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                            <label for="first_name">First Name</label>
                                                            <input type="text" class="form-control" name="first_name" id="first_name" value="<?= $first_name['value']; ?>">
                                                            <?php autherror('first_name') ?>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                            <label for="last_name">Last Name</label>
                                                            <input type="text" class="form-control" name="last_name" id="last_name" value="<?= $last_name['value']; ?>">
                                                            <?php autherror('last_name') ?>
                                                      </div>
                                                </div>
                                                <div class="form-row">
                                                      <div class="form-group col-md-4">
                                                            <label for="company">Company</label>
                                                            <input type="text" class="form-control" name="company" id="company" value="<?= $company['value']; ?>">
                                                            <?php autherror('company') ?>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" value="<?= $email['value']; ?>">
                                                            <?php autherror('email') ?>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                            <label for="phone">Phone</label>
                                                            <input type="text" class="form-control" name="phone" id="phone" value="<?= $phone['value']; ?>">
                                                            <?php autherror('phone') ?>
                                                      </div>
                                                </div>
                                                <div class="form-row">

                                                      <div class="form-group col-md-6">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" name="password" id="password">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                            <label for="password_confirm">Password Confirm</label>
                                                            <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                                                      </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Create User</button>
                                          </form>

                                    </div>
                              </div>
                        </div>
                  </div> <!-- end section -->
            </div> <!-- .col-12 -->
      </div> <!-- .row -->
</div> <!-- .container-fluid -->
<?= $this->endSection(); ?>




<?php $validation = \Config\Services::validation(); ?>
<div class="page-content">
      <section class="row">
            <div class="col-12 p-0">

                  <div class="card">
                        <div class="card-header">
                              <h4>Tambah User Baru</h4>
                        </div>
                        <div id="infoMessage"><?php echo $message; ?></div>
                        <div class="card-body">
                              <!-- icon bootstrap -->
                              <form action="<?= base_url('auth/create_user') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row justify-content-center">
                                          <div class="col-11">
                                                <label for="first_name" class="form-label">Nama Depan:</label>
                                                <div class="input-group">
                                                      <span class="input-group-text" id="fnIcon"><i class="bi bi-person"></i></span>
                                                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nama Depan" aria-describedby="fnIcon" value="<?= $first_name['value']; ?>">
                                                </div>
                                                <?php if ($validation->hasError('first_name')) : ?>
                                                      <div>
                                                            <small class="form-text text-danger pt-0 mt-0  mb-3"> <?= $error = $validation->getError('first_name'); ?></small>
                                                      </div>
                                                <?php endif; ?>
                                                <label for="last_name" class="form-label">Nama Belakang:</label>
                                                <div class="input-group ">
                                                      <span class="input-group-text" id="fnIcon"><i class="bi bi-person-fill"></i></span>
                                                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Nama Belakang" aria-describedby="fnIcon" value="<?= $last_name['value']; ?>">
                                                </div>
                                                <?php autherror('last_name') ?>
                                                <?php
                                                if ($identity_column !== 'email') {
                                                      echo '<p>';
                                                      echo lang('create_user_identity_label');
                                                      echo '<br />';
                                                      echo $error = $validation->getError('identity');
                                                      echo form_input($identity);
                                                      echo '</p>';
                                                }
                                                ?>
                                                <label for="company" class="form-label">Perusahaan :</label>
                                                <div class="input-group">
                                                      <span class="input-group-text" id="fnIcon"><i class="bi bi-building"></i></span>
                                                      <input type="text" class="form-control" name="company" id="company" placeholder="Perusahaan " aria-describedby="fnIcon" value="<?= $company['value']; ?>">
                                                </div>
                                                <?php autherror('company') ?>
                                                <label for="email" class="form-label">Email:</label>
                                                <div class="input-group ">
                                                      <span class="input-group-text" id="fnIcon"><i class="bi bi-envelope-fill"></i></span>
                                                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="fnIcon" value="<?= $email['value']; ?>">
                                                </div>
                                                <?php autherror('email') ?>
                                                <label for="phone" class="form-label">Phone:</label>
                                                <div class="input-group">
                                                      <span class="input-group-text" id="fnIcon"><i class="bi bi-telephone-fill"></i></span>
                                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" aria-describedby="fnIcon" value="<?= $phone['value']; ?>">
                                                </div>
                                                <?php autherror('phone') ?>
                                                <label for="password" class="form-label">Password:</label>
                                                <div class="input-group">
                                                      <span class="input-group-text" id="PasswordIcon"><i class="bi bi-key"></i></span>
                                                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-describedby="PasswordIcon">
                                                </div>
                                                <label for="password_confirm" class="form-label">Konfirmasi Password:</label>
                                                <div class="input-group">
                                                      <span class="input-group-text" id="PasswordConfirmIcon"><i class="bi bi-key-fill"></i></span>
                                                      <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Konfirmasi Password" aria-describedby="PasswordConfirmIcon">
                                                </div>
                                                <div class="pt-4">
                                                      <button type="submit" class="btn btn btn-outline-dark"><i class="fas fa-user-plus"></i>Tambah</button>
                                                </div>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </section>
</div>