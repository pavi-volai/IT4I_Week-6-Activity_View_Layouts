<?= $this->extend("layouts/base"); ?>

<?= $this->section('title'); ?>

<?= $page_title; ?>

<?= $this->endSection(); ?>


<?= $this->section("content"); ?>

 <div class="content-wrapper">
        <div class="container-fluid">

        <!-- Content Header (Page header) -->
        <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Events</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Events</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>
        <!-- /.content-header -->

      </div>
    </div>

<?= $this->endSection(); ?>