<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">

    <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <?php require('cabezote.php');
            require('config.php');

            ?>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-3 text-uppercase"><span class="text-muted fw-light"><?php echo $_GET["ruta"] ?>/</span> Administrar</h4>
                    <!-- Basic Layout -->
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Administrar Entrenadores</h5>
                                    <small class="text-muted float-end">Actualizacion en timepo real de todas los Entrenadores</small>
                                </div>
                                <div class="card-body">


                                    <div class="d-flex flex-wrap" id="icons-container">
                                        <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                            <div class="card-body">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mdlAgregarEntrenador">Agregar Entrenador
                                                </button>
                                            </div>
                                        </div>


                                        <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                            <div class="card-body">
                                                <a href="inicio" class="btn btn-success">Regresar<i class=" bx bx-repeat"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl">
                            <div class="card mb-8">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Todas los Entrenadores</h5>
                                    <small class="text-muted float-end">Estado:Actualizado <i class="bx bx-upload"></i></small>
                                </div>
                                <div class="card-body">
                                    <!-- Bootstrap Dark Table -->
                                    <div class="card">
                                        <h5 class="card-header">Entrenadores</h5>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered table-striped dt-responsive tablas">

                                                <thead>

                                                    <tr>

                                                        <th style="width:10px">Nombre</th>
                                                        <th style="width:10px">Identificación</th>
                                                        <th>Teléfono</th>
                                                        <th>Correo</th>
                                                        <th>Direección</th>
                                                        <th>Foto</th>
                                                        <th>Sexo</th>
                                                        <th>Estado Civil</th>
                                                        <th>Fecha de Ingreso</th>
                                                        <th>Estado</th>
                                                        <th>Acciones</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr>
                                                        <td>Juan Torres Melendez Asofeifa</td>
                                                        <td>89653214</td>
                                                        <td>(+506) 897412</td>
                                                        <td>juan@gmail.com</td>
                                                        <td>Tibas, San José</td>
                                                        <td><img src="vistas/assets/img/avatars/5.png" class="img-thumbnail" class="img-thumbnail" width="40px"></td>
                                                        <td><button class="btn btn-primary btn-xs">Masculino</button></td>
                                                        <td><button class="btn btn-danger btn-xs">Soltero</button></td>
                                                        <td>2017-12-11 12:05:32</td>
                                                        <td><button class="btn btn-success btn-xs">Activado</button></td>


                                                        <td>

                                                            <div class="dropdown">
                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="inicio"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Karla Morrison Asofeifa</td>
                                                        <td>89653214</td>
                                                        <td>(+506) 84225554</td>
                                                        <td>juan@gmail.com</td>
                                                        <td>Tibas, San José</td>
                                                        <td><img src="vistas/assets/img/avatars/6.png" class="img-thumbnail" class="img-thumbnail" width="40px"></td>
                                                        <td><button class="btn btn-primary btn-xs">Masculino</button></td>
                                                        <td><button class="btn btn-danger btn-xs">Soltero</button></td>
                                                        <td>2017-12-11 12:05:32</td>
                                                        <td><button class="btn btn-success btn-xs">Activado</button></td>


                                                        <td>

                                                            <div class="dropdown">
                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="inicio"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>

                                                        </td>

                                                    </tr>




                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <!--/ Bootstrap Dark Table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->


                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

</div>


<div class="col-lg-4 col-md-6">
    <small class="text-light fw-semibold">Formulario Agregar Entrenadores</small>
    <div class="mt-3">
      
        <!-- Modal -->
        <div class="modal fade" id="mdlAgregarEntrenador" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Formulario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0"> Agregar Entrenadores</h5>
                      <small class="text-muted float-end">(*)Todos los campos son requeridos</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Identificación</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nuevaIdentificacion"
                                name="nuevaIdentificacion"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nombre</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class="bx bx-buildings"></i
                              ></span>
                              <input
                                type="text"
                                id="nuevoNombre"
                                name="nuevoNombre"
                                class="form-control"
                                placeholder="Karla Morrison"
                                aria-label="Karla Morrison"
                                aria-describedby="basic-icon-default-company2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Apellidos</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class="bx bx-buildings"></i
                              ></span>
                              <input
                                type="text"
                                id="nuevoApellidos"
                                name="nuevoApellidos"
                                class="form-control"
                                placeholder="Rojas Arias"
                                aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                placeholder="john.doe"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Teléfono N°</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                              ></span>
                              <input
                                type="text"
                                id="basic-icon-default-phone"
                                class="form-control phone-mask"
                                placeholder="658 799 8941"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class="bx bx-comment"></i
                              ></span>
                              <textarea
                                id="basic-icon-default-message"
                                class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                              ></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>












<?php require('footer.php'); ?>