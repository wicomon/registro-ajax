<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-3">
                <div class="card-header text-center">Ingreso al Sistema</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico : </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">DNI : </label>

                            <div class="col-md-6">
                                <input id="dni" type="password" class="form-control" name="dni" required autocomplete="current-dni">
                            </div>
                        </div>
                        
                        <?php if($errores == 1): ?>
                        <div class=" row ">
                            <label for="email" class="col-md-4 col-form-label text-md-right"> </label>
                            <div class="col-md-6 my-3 mx-0 py-2  px-0 border border-danger">
                                <h5 class="text-center text-danger">Datos Incorrectos</h5>
                            </div>
                        </div>
                        
                        <?php endif; ?>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success btn-lg ">
                                    Acceder
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>