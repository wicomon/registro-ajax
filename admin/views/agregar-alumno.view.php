
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
            <h1>Agregar  Usuario</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Registro los Datos: </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
                </div>
                <div class="card-body">
                <!-- form start -->
                    <form role="form" method="POST" action="modelo-alumno.php" name="crear-alumno" id="crear-alumno">
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombres </label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control " name="nombre" required autocomplete="nombre" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>Usuario Incorrecto</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellidos </label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control " name="apellido" value="" required autocomplete="apellido" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>Incorrecto</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" minlength="8" required autocomplete="email">


                                    <span class="invalid-feedback" role="alert">
                                        <strong>Ya se registró este Email.</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">Dni </label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control " name="dni" value="" required autocomplete="dni" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>Ya se registró este DNI.</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono </label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control " name="telefono" value="" required autocomplete="dni" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong>Incorrecto</strong>
                                    </span>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg ">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
      <!-- Default box -->
      
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
