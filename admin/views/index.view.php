<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once 'includes/barra.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once 'includes/navegacion.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seccion de Administradores</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small Box (Stat card) -->
        <h5 class="mb-2 mt-4">Datos del Sistema</h5>
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $total_registrados; ?></h3>

                <p><b>Usarios Registrados</b></p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="registrados.php" class="small-box-footer">
                Mas informacion <i class="fas fa-arrow-circle-right"></i>
              </a>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>1000</h3>

                <p>Vacantes en Total</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
              Mas informacion <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      <!-- Default box -->
      <div class="card col-md-8">
        <div class="card-header">
          <h3 class="card-title">Usuarios : </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <a href="excel-alumnos.php" class="btn btn-outline-success">Descargar Excel Usuarios <i class="fas fa-file-excel"></i></a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          ...
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->


    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->