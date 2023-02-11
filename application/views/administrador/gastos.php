<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Administracion / Postulados</title>
      <?php require_once("componentes/head.php"); ?>
   </head>
   <body class="g-sidenav-show bg-gray-100">
      <div class="min-height-300 bg-default position-absolute w-100"></div>
      <?php require_once("componentes/menu.php"); ?>
      <main class="main-content position-relative border-radius-lg">
         <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                     <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Administración</a></li>
                     <li class="breadcrumb-item text-sm text-white active" aria-current="page">Postulados</li>
                  </ol>
                  <h6 class="font-weight-bolder text-white mb-0">Postulados</h6>
               </nav>
               <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                     <div class="input-group">
                     </div>
                  </div>
                  <ul class="navbar-nav  justify-content-end">
                     <li class="nav-item d-flex align-items-center">
                        <a href="<?php echo base_url(); ?>cerrarsesion" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Cerrar Sesión</span>
                        </a>
                     </li>
                     <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                           <div class="sidenav-toggler-inner">
                              <i class="sidenav-toggler-line bg-white"></i>
                              <i class="sidenav-toggler-line bg-white"></i>
                              <i class="sidenav-toggler-line bg-white"></i>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                     </li>
                     <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                           <li class="mb-2">
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                 <div class="d-flex py-1">
                                    <div class="my-auto">
                                       <img src="<?php echo base_url();?>img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                       <h6 class="text-sm font-weight-normal mb-1">
                                          <span class="font-weight-bold">New message</span> from Laur
                                       </h6>
                                       <p class="text-xs text-dark mb-0">
                                          <i class="fa fa-clock me-1"></i>
                                          13 minutes ago
                                       </p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="mb-2">
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                 <div class="d-flex py-1">
                                    <div class="my-auto">
                                       <img src="<?php echo base_url();?>public/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                       <h6 class="text-sm font-weight-normal mb-1">
                                          <span class="font-weight-bold">New album</span> by Travis Scott
                                       </h6>
                                       <p class="text-xs text-dark mb-0">
                                          <i class="fa fa-clock me-1"></i>
                                          1 day
                                       </p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                 <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                       <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <title>credit-card</title>
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                   <g transform="translate(453.000000, 454.000000)">
                                                      <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                      <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                   </g>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                       <h6 class="text-sm font-weight-normal mb-1">
                                          Payment successfully completed
                                       </h6>
                                       <p class="text-xs text-dark mb-0">
                                          <i class="fa fa-clock me-1"></i>
                                          2 days
                                       </p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <!-- End Navbar -->
         <div class="container-fluid py-5">
         <div class="row ">
            <div class="card">
               <div class="row mt-4">
                  <div class="col-md-12">
                     <a class="btn bg-gradient-danger btn-xs" data-bs-toggle="modal" href="#AgregarCPE" id="btn_AddGasto" role="button">Agregar <i class="fas fa-plus"></i> </a>
                  </div>
               </div>
               <br>  
               <div class="table-responsive" >
                  <table class="table align-items-center table-borderless mb-0 text-uppercase" id="table-gastos">
                     <thead>
                        <tr>
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" ></th>
                           <!--th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" >Estado CPE</th-->
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" >Nombre</th>
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" >Color</th>
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" ># Targeron</th>
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" >Fecha postulaciòn</th>
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" >Cargo</th>
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" >Postulacion</th>
                           <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12" >Foto</th>
                        </tr>
                     </thead>
                     
                  </table>
                  <br>
               </div>
            </div>
            <?php require_once("componentes/footer.php"); ?>
         </div>
         <div class="modal fade" id="AgregarCPE" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-xl" role="document">
               <form class="modal-content" id="AddGasto">
                  <div class="modal-header bg-default">
                     <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Registrar Postulado</h5>
                     <button type="button" class=" close" data-bs-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <h6>
                                       <strong>Datos basicos del  postulado</strong>
                                    </h6>
                                    <div class="dropdown-divider"></div>
                                 </div>
                              </div>
                              <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Tipo postulaciòn
                                       <span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <select name="cpe_tipo" id="cpe_tipo" class="form-control" required>
                                          <option value="">Seleccionar</option>
                                          <option value="3">Alcaldia</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Nombre
                                       <span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <input type="text" name="cpe_serie" id="cpe_serie"  class="form-control text-uppercase" required data-validation-required-message="Complete el Numero">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Apellido
                                       <span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <input type="text" name="cpe_serie" id="cpe_serie"  class="form-control text-uppercase" required data-validation-required-message="Complete el Numero">
                                    </div>
                                 </div>
                              </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Numero tarjeton
                                       <span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <input type="number" require step="0.01" name="cpe_gravada" id="cpe_gravada" maxlength="8" minlength="1" class="form-control" required data-validation-required-message="Complete el Numero">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-9">
                                 <div class="form-group">
                                    <label>Cargo
                                       <span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <input type="number" require step="0.01" name="cpe_igv" id="cpe_igv" maxlength="8" minlength="1" class="form-control" required data-validation-required-message="Complete el Numero">
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Color del tarjeton
                                       <span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <input name="f_emision" id="f_emision" type="color" class="form-control _date" required>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>
                                       <strong>.</strong>
                                    </label>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="form-group">
                                    <label>Tipo documento</label>
                                    <div class="controls" class="for">
                                       <select name="prov_tipo_doc" id="prov_tipo_doc" required class="form-control manual">
                                          <option value="6" selected>Cedula de ciudadania</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="form-group input-group-sm">
                                    <label>N° Documento</label>
                                    <div class="input-group">
                                       <input type="text" name="prov_nro_doc" id="prov_nro_doc" class="form-control" required data-validation-required-message="Complete el Numero" length="11" min="11">
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Foto
                                       <span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <input type="file" name="prov_razon_social" id="prov_razon_social" maxlength="100" class="form-control" required data-validation-required-message="Complete el Numero" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>
                                       <strong>Información del Colaborador Responsable</strong>
                                    </label>
                                    <hr>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Responsable<span class="required">*</span>
                                    </label>
                                    <div class="controls">
                                       <select required name="codigo_usuario" id="codigo_usuario" class="form-control" >
                                          <option value="">Seleccionar Colaborador</option>
                                             <?php foreach($users->result() as $users){ ?>
                                                <option value="<?php echo $users->codigo_usuario; ?>"><?php echo $users->nombre.' '.$users->apellido; ?></td>
                                             <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
               </form>
            </div>
         </div>
      </main>
      <?php require_once("componentes/personalizar.php"); ?>
      <!-- LARGE MODAL -->
      <?php require_once("componentes/scripts.php"); ?>
      <script src="<?php echo base_url(); ?>public/js/scripts/gastos.js"></script>
   </body>
</html>