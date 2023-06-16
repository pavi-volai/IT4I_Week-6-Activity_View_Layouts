<?= $this->extend("layouts/base"); ?>

<?= $this->section('title'); ?>

<?= $page_title; ?>

<?= $this->endSection(); ?>

<?= $this->section("content"); ?>


    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Brgy. Potol Map</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Brgy. Potol Map</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

        </div>
          <!-- /.content-header -->

        <!-- Content -->
          <section class="content">
          <div class="container-fluid">

            <div class="row map">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15455.71285446598!2d120.88190318731628!3d14.431300507344393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2d632e175c5%3A0xbbe8570e8ff6167c!2sMagdalo%2C%20Kawit%2C%20Cavite!5e0!3m2!1sen!2sph!4v1685603142438!5m2!1sen!2sph" width="1180" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
          </div>


          </section>
    </div>
          <!-- /.content-wrapper -->

</div>

<?= $this->endSection(); ?>