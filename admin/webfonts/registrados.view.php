
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
            <h1>Listado de Usuarios Registrados</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cuadro de usuarios</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="excel-alumnos.php" class="btn btn-outline-success m-0">Descargar Excel <i class="fas fa-file-excel"></i></a>
                <table id="registros" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($alumnos as $alumno): ?>
                        <tr>
                          <td><?php echo $alumno['nombres'];?></td>
                          <td><?php echo $alumno['apellidos'];?></td>
                          <td><?php echo $alumno['dni'];?></td>
                          <td><?php echo $alumno['telefono'];?></td>
                          <td><?php echo $alumno['email'];?></td>
                          <td><a href="editar-alumno.php?id=<?php echo $alumno['id'];?>" 
                              class="btn bg-orange btn-flat margin disabled"
                              
                              > <i class="fas fa-edit"></i> Editar
                            </a>
                            <a href="#" 
                                onclick="eliminarAlumno(<?php echo $alumno['id'];?>)"
                              data-id="<?php echo $alumno['id'];?>"
                              data-tipo="alumno"
                              class="btn bg-maroon btn-flat margin borrar-alumno"
                              > <i class="fas fa-trash"></i> Eliminar
                            </a></td>
                        </tr>
                    <?php endforeach; ?>
                        
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->