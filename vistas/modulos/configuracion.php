<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Menu -->





    <!-- / Menu -->

    <!-- Layout container -->
    <div class="layout-page">
      <!-- Navbar -->

      <?php require('cabezote.php'); ?>

      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-3 text-uppercase"><span class="text-muted fw-light"><?php echo $_GET["ruta"] ?>/</span> Gimnasio</h4>

          <!-- Basic Layout -->
          <div class="row">
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Configuración del Gimnasio</h5>
                  <small class="text-muted float-end">(*)Todos los campos son requeridos</small>
                </div>
                <div class="card-body">


                  <div class="d-flex flex-wrap" id="icons-container">
                    <div class="card icon-card cursor-pointer text-center mb-4 mx-2 bg-warning">
                      <div class="card-body">
                        <i class="bx bxs-key mb-2"></i>
                        <p class="icon-name text-capitalize text-truncate mb-0">Licencia Activa</p>
                      </div>
                    </div>


                    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                      <div class="card-body">
                        <i class="bx bxs-data mb-2"></i>
                        <p class="icon-name text-capitalize text-truncate mb-0">Backup Activo</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Ingrese las Credenciales</h5>
                  <small class="text-muted float-end">(*)Todos los Campos son Requeridos</small>
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-fullname">Nombre Comercial </label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">Cedula Jurídica</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                        <input type="text" id="basic-icon-default-company" class="form-control" placeholder="3-101-896532" aria-label="3-101-896532" aria-describedby="basic-icon-default-company2" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-email">Correo Electrónico</label>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                      </div>
                      <div class="form-text">You can use letters, numbers & periods</div>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-phone">Teléfono</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                        <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-phone">Provincia</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-home"></i></span>

                        <select class="form-control phone-mask" name="" id="">
                          <option value="1">Alajuela</option>
                          <option value="2">San José</option>
                        </select>

                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-phone">Cantón</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-home"></i></span>
                        <select class="form-control phone-mask" name="" id="">
                          <option value="1">Central</option>
                          <option value="2">San Ramón</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-phone">Distrito</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-home"></i></span>
                        <select class="form-control phone-mask" name="" id="">
                          <option value="1">Central</option>
                          <option value="2">Amón</option>
                        </select>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-message">Otras Señas</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                        <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </form>
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

<?php require('footer.php'); ?>