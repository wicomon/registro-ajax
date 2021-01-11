<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h2 text-center">Simulacro Virtual del Examen de Admisión UNFV</div>

                <div class="card-body">
                    <form method="POST" action="registrar-usuario.php" id="formulario-registro">
                        <div class="form-group mt-2 ">
                            <p class="h3 font-bold"> Registro de Datos Personales: </p>
                        </div>

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
            </div>
        </div>
    </div>
</div>