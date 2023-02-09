<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
   <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?php echo base_url(); ?>administracion/perfil">
      <img src="<?php echo base_url();?>public/img/theme/logo.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">CubacSoft</span>
      </a>
   </div>
   <hr class="horizontal dark mt-0">
   <div class="navbar-collapse  w-auto " style="height: 563px !important;" id="sidenav-collapse-main">
      <ul class="navbar-nav">
         <!-- ROL ADMINISTRADOR TIENE TODOS LOS PRIVILEGIOS --> 
         <?php if($this->session->userdata("rol") == "Administrador"){ ?>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>administracion/inicio">
            <i class="fas fa-home"></i>
            <span class=" "> Inicio</span>
            </a>
         </li>
         
          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url(); ?>administracion/citas">
              <i class="fa fa-users"></i>
              <span class="sidenav-normal">Usuarios</span>
            </a>
          </li>
         <li class="nav-item ">
            <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#atencion">
            <i class="fas fa-cogs"></i>
            <span class="sidenav-normal "> Configuración <b class="caret"></b></span>
            </a>
            <div class="collapse " id="atencion">
               <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                     <a class="nav-link " href="<?php echo base_url(); ?>administracion/pacientes">
                     <span class="sidenav-normal">Datos Personas</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url(); ?>administracion/atencion">
                     <span class="sidenav-normal">Carga de votantes</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="<?php echo base_url(); ?>administracion/laboratorio">
                     <span class="sidenav-normal">Tablero de resultados</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="<?php echo base_url(); ?>administracion/triaje">
                     <span class="sidenav-normal">Fecha y hora del evento</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>administracion/inicio">
            <i class="fas fa-address-card"></i>
            <span class=" "> Postulados</span>
            </a>
         </li>
         
         
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>administracion/reportes">
            <i class="fas fa-chart-pie"></i>
            <span> Escrutinio</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>administracion/reportes">
            <i class="fas  fa-thumbs-up"></i>
            <span> Ganadores</span>
            </a>
         </li>
         
         
         <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-info-circle"></i>
            <span> Version 1.0.0.0</span>
            </a>
         </li>
      </ul>
   </div>
   <div class="sidenav-footer ">
      <div class="card card-plain shadow-none" id="sidenavCard">
         <div class="card-body  p-3 w-100 pt-0">
            <div class="docs-info">
               <ul class="navbar-nav">
                  <!-- MENU DOCTORES -->
                  <?php } else if ($this->session->userdata("rol") == "Doctor"){  ?>
                  <li class="nav-item">
                     <a class="nav-link" target="blank" href="<?php echo base_url(); ?>administracion/calendariodoctor">
                     <i class="fas fa-home"></i>
                     <span class=" "> Inicio</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url(); ?>administracion/atencionmedicos">
                     <i class="fas fa-user-md"></i>
                     <span class=" "> Atención</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"  href="<?php echo base_url(); ?>administracion/pacientes">
                     <i class="fas fa-users"></i>
                     <span class=" "> Pacientes</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"  href="<?php echo base_url(); ?>administracion/colposcopia">
                     <i class="fas fa-microscope"></i>
                     <span class=" "> Colposcopia</span>
                     </a>
                  </li>
                  <!-- MENU ENFERMERA -->
                  <?php } else if($this->session->userdata("rol") == "Enfermera") { ?>
                  <li class="nav-item ">
                     <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#atencion">
                     <i class="fas fa-user-nurse"></i>
                     <span class="sidenav-normal "> Atención <b class="caret"></b></span>
                     </a>
                     <div class="collapse " id="atencion">
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url(); ?>administracion/atencion">
                              <span class="sidenav-normal"> Recepción</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="<?php echo base_url(); ?>administracion/triaje">
                              <span class="sidenav-normal"> Triaje</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="<?php echo base_url(); ?>administracion/pacientes">
                              <span class="sidenav-normal">Pacientes</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="<?php echo base_url(); ?>administracion/laboratorio">
                              <span class="sidenav-normal">Laboratorio</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <li class="nav-item">
                     <a class="nav-link"  href="<?php echo base_url(); ?>administracion/citas">
                     <i class="fas fa-stethoscope"></i>
                     <span class=" "> Citas</span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#inventarios">
                     <i class="fa fa-shopping-cart"></i>
                     <span class="sidenav-normal"> Inventarios <b class="caret"></b></span>
                     </a>
                     <div class="collapse " id="inventarios">
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a class="nav-link " href="<?php echo base_url(); ?>administracion/productos">
                              <span class="sidenav-normal"> Productos</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="<?php echo base_url(); ?>administracion/inventarios">
                              <span class="sidenav-normal"> Kardex</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="<?php echo base_url(); ?>administracion/movimientos">
                              <span class="sidenav-normal">Movimientos</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link " href="<?php echo base_url(); ?>administracion/gastos">
                     <i class="fas fa-money-bill"></i>
                     <span class="">Gastos</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="https://boticasmm.saludmadreymujer.com" target="_blank">
                     <i class="fas fa-money-bill"></i>
                     <span class="">Botica</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"  href="<?php echo base_url(); ?>administracion/colposcopia">
                     <i class="fas fa-microscope"></i>
                     <span class=" "> Colposcopia</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"  href="<?php echo base_url(); ?>administracion/doctores">
                     <i class="fas fa-user-md"></i>
                     <span class=" "> Medicos</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"  href="<?php echo base_url(); ?>administracion/pacientes">
                     <i class="fas fa-download"></i>
                     <span class=" "> Cargar Documentos</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url(); ?>administracion/reportes">
                     <i class="fas fa-chart-pie"></i>
                     <span> Reportes</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                     <i class="fas fa-info-circle"></i>
                     <span> Version 2.0.0.0</span>
                     </a>
                  </li>
                  <!-- MENU LABORATORIO -->
                  <?php } else if($this->session->userdata("rol") == "Laboratorista") { ?>
                  <li class="nav-item">
                     <a class="nav-link"  href="<?php echo base_url(); ?>administracion/pacientes">
                     <i class="fas fa-download"></i>
                     <span class=" "> Cargar documentos</span>
                     </a>
                  </li>
                  <!-- MENU PATOLOGIA -->
                  <?php } else if($this->session->userdata("rol") == "Patologo"){ ?>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url(); ?>administracion/pacientes">
                     <i class="fas fa-file-pdf"></i>
                     <span> Cargar documentos</span>
                     </a>
                  </li>
                  <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</aside>