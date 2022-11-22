<?= $this->extend(dashboard_view("_layout")) ?>
<?= $this->section("content") ?>
<div class="page-heading">
  <h3>Nonaktifkan Akun</h3>



</div>
<div class="page-content">
  <section class="row">
    <div class="col-12">
      <?php $breadcrumb = [
        [
          'name' => 'Dashboard',
          'link' => 'panel/'
        ],

        [
          'name' => 'Users',
          'link' => 'auth/'
        ]

      ];
      breadcrumb($breadcrumb, 'Nonaktifkan Akun') ?>

      <div class="card">
        <div class="card-header">
          <h4>
            Apakah Anda yakin ingin menonaktifkan Users <b> 'administrator'</b>
          </h4>
        </div>
        <div class="card-body">
          <?php echo form_open('auth/deactivate/' . $user->id); ?>

          <p>
            <?php echo form_label(lang('Auth.deactivate_confirm_y_label'), 'confirm'); ?>

            <input type="radio" class="form-check-input" name="confirm" value="yes" checked="checked" />
            <?php echo form_label(lang('Auth.deactivate_confirm_n_label'), 'confirm'); ?>
            <input type="radio" class="form-check-input" name="confirm" value="no" />
          </p>

          <?php echo form_hidden('id', $user->id); ?>


          <button type="submit" class="btn btn btn-outline-dark"><i class="fas fa-user-plus"></i>Simpan</button>



          <?php echo form_close(); ?>

        </div>
      </div>
    </div>
  </section>
</div>




<?= $this->endSection() ?>