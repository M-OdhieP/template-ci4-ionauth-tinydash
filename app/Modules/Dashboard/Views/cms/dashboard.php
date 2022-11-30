<?= $this->extend(dashboard_view('_layouts')); ?>

<?= $this->section('content'); ?>
hello

<?= getUsername() ?>
<?= $this->endSection(); ?>