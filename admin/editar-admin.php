<?php 
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  $id = $_GET['id'];
  if ( !filter_var($id, FILTER_VALIDATE_INT) ) {
    die("Error !");
  }
  include_once 'header.php'; 
?>

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once 'barra.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once 'navegacion.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Administrar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
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
                <h3 class="card-title">Crear Administrador</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
                </div>
                <div class="card-body">
                  <?php
                    try {
                      $sql= "SELECT * FROM admins WHERE id_admin = $id ";
                      $resultado = $conn->query($sql);
                      $admin = $resultado->fetch_assoc();
                    } catch (\Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }

                  ?>
                <!-- form start -->
                    <form role="form" method="POST" action="modelo-admin.php" name="editar-admin" id="editar-admin">
                        <div class="form-group">
                            <label for="usuario">Usuario : </label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?php echo $admin['id_admin'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre : </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" value="<?php echo $admin['nombre'];?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password : </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña para Iniciar Sesión">
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="registro" value="actualizar">
                            <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-primary">Añadir</button>
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

<?php include_once 'footer.php'; ?>