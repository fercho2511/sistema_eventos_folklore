
<?php
date_default_timezone_set("America/La_Paz");
?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Administrador<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/usuario_per/test">
                    <i class="fas fa-fw fa-bars"></i>
                    <span>Inicio</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/usuario_per/listaUsuario">
                <i class="fas fa-fw fa-user"></i>
                    <!-- <i class="fa-solid fa-user"></i> -->
                    <span>Usuario</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/cliente/listaCliente">
                    <i class="fas fa-fw fa-users"></i>
                    <!-- <i class="fa-solid fa-user"></i> -->
                    <span>Cliente</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/zona_pre/zona">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Zona/Precio</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/zona_pre/zona">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Evento</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por...."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">

                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">

                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nombres')?> </span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url(); ?>starbootstrap/img/perfil.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuracion
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Actividad
                                </a>
                                <div ></div>


                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion
                                    </a>


                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Salon</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Sillas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">500</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chair fa-2x text-gray-300"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <a class="dropdown-item1" href="#" data-toggle="modal" data-target="#logoutModal2" title ="Asignar zona y precio">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Zona y Precio</div>
                                            </a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sillas reservadas
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Observaciones</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-9 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Mapa-Escenario</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <!-- <div class="img" >



                                    <img src="<?php echo base_url(); ?>starbootstrap/img/mapa.png" alt="" whidth ="10px">


                                </div> -->




                                <!-- desde aca ers la imagen svg muy largo porsierto -->

                                <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 16.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">




                 <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="800px" height="760px" viewBox="0 0 800 760" enable-background="new 0 0 800 760" xml:space="preserve">

                            <!-- <a class="dropdown-item1" href="#" data-toggle="modal" data-target="#exampleModalCenter" title ="mesa 1"> -->


                            <!-- mesa 1 -->
                    <a xlink:href="" xlink:title="Mesa 1" class="dropdown-item" href="#" >
                     <rect  id="mesa1" onclick="miFunc(1)" name="mesa 1" x="405.061" y="40.925" transform="matrix(0.515 -0.8572 0.8572 0.515 166.7904 395.6567)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.998" height="19.001"/>
                    </a>
                    <rect   x="435.5" y="75.729" transform="matrix(0.515 -0.8572 0.8572 0.515 143.5723 417.2193)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                    <rect  x="459.192" y="36.299" transform="matrix(0.515 -0.8572 0.8572 0.515 188.8602 418.4051)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                    <rect  x="451.224" y="48.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 174.6355 418.0705)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                    <rect  x="442.983" y="62.442" transform="matrix(0.515 -0.8572 0.8572 0.515 158.8291 417.6154)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                    <rect  x="399.072" y="54.339" transform="matrix(0.515 -0.8572 0.8572 0.515 144.6951 375.3997)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                    <rect  x="422.764" y="14.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 189.9377 376.5524)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                    <rect  x="414.794" y="27.34" transform="matrix(0.515 -0.8572 0.8572 0.515 175.6765 376.1869)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                    <rect  x="406.554" y="41.052" transform="matrix(0.515 -0.8572 0.8572 0.515 159.9579 375.7992)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                    <rect  x="408.489" y="77.498" transform="matrix(0.5151 -0.8572 0.8572 0.5151 129.3773 394.6737)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="10.998"/>
                    <rect  x="448.147" y="11.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 205.2334 396.6935)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                    <rect  id="mesa 2" x="458.061" y="69.926" transform="matrix(0.515 -0.8572 0.8572 0.515 167.6368 455.1513)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                    <rect x="488.501" y="104.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 144.4081 476.7047)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <!-- mesa 2 -->
                    <a xlink:href="" xlink:title="Mesa 2" class="dropdown-item" href="#" >
                    <rect  id="mesa 2" onclick="miFunc(2)" x="458.061" y="69.926" transform="matrix(0.515 -0.8572 0.8572 0.515 167.6368 455.1513)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                    </a>
                    <rect x="488.501" y="104.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 144.4081 476.7047)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="512.192" y="65.299" transform="matrix(0.515 -0.8572 0.8572 0.515 189.7157 477.9073)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="504.224" y="77.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 175.4849 477.5719)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="495.983" y="91.442" transform="matrix(0.515 -0.8572 0.8572 0.515 159.674 477.1089)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="452.072" y="83.339" transform="matrix(0.515 -0.8572 0.8572 0.515 145.5341 434.8904)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="475.764" y="43.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 190.7719 436.0364)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="467.794" y="56.339" transform="matrix(0.515 -0.8572 0.8572 0.515 176.5216 435.6802)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="459.554" y="70.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 160.8142 435.3046)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="461.489" y="106.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 130.2044 454.1496)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="501.147" y="40.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 206.0822 456.193)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 3 -->
                        <a xlink:href="" xlink:title="Mesa 3" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(3)" x="515.061" y="102.926" transform="matrix(0.515 -0.8572 0.8572 0.515 166.9929 520.0132)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="545.501" y="137.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 143.7638 541.5657)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="569.192" y="98.299" transform="matrix(0.515 -0.8572 0.8572 0.515 189.0729 542.7714)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="561.224" y="110.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 174.8458 542.4426)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="552.983" y="124.442" transform="matrix(0.515 -0.8572 0.8572 0.515 159.0301 541.9708)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="509.072" y="116.339" transform="matrix(0.515 -0.8572 0.8572 0.515 144.8924 499.7563)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="532.764" y="76.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 190.1259 500.8946)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="524.794" y="89.339" transform="matrix(0.515 -0.8572 0.8572 0.515 175.8777 500.5421)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="516.554" y="103.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 160.1742 500.1735)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="518.489" y="139.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 129.5584 519.0078)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="558.147" y="73.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 205.4421 521.0618)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 4 -->
                        <a xlink:href="" xlink:title="Mesa 4" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(4)" x="572.061" y="134.926" transform="matrix(0.515 -0.8572 0.8572 0.515 167.2061 584.39)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="602.501" y="169.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 143.9766 605.9419)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="626.192" y="130.299" transform="matrix(0.515 -0.8572 0.8572 0.515 189.2874 607.1504)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="618.224" y="142.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 175.064 606.8281)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="609.983" y="156.442" transform="matrix(0.515 -0.8572 0.8572 0.515 159.2433 606.3477)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="566.072" y="148.339" transform="matrix(0.515 -0.8572 0.8572 0.515 145.1079 564.1371)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="589.764" y="108.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 190.3371 565.2678)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="581.794" y="121.339" transform="matrix(0.515 -0.8572 0.8572 0.515 176.091 564.9189)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="573.554" y="135.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 160.3914 564.5574)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="575.489" y="171.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 129.7696 583.3811)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="615.147" y="105.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 205.6592 585.4456)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 5 -->
                        <a xlink:href="" xlink:title="Mesa 5" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(5)"x="407.061" y="152.926" transform="matrix(0.515 -0.8572 0.8572 0.515 71.7596 451.6873)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="437.501" y="187.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 48.532 473.24)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="461.192" y="148.299" transform="matrix(0.515 -0.8572 0.8572 0.515 93.8351 474.445)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="453.224" y="160.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 79.5944 474.1147)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="444.983" y="174.442" transform="matrix(0.515 -0.8572 0.8572 0.515 63.7966 473.6449)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="401.072" y="166.339" transform="matrix(0.515 -0.8572 0.8572 0.515 49.6506 431.4295)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="424.764" y="126.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 94.9001 432.5695)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="416.794" y="139.339" transform="matrix(0.515 -0.8572 0.8572 0.515 80.6443 432.2162)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="408.554" y="153.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 64.9264 431.8461)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="410.489" y="189.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 34.3326 450.6827)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="450.147" y="123.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 110.1944 452.7344)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 6 -->
                        <a xlink:href="" xlink:title="Mesa 6" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(6)" x="459.061" y="184.926" transform="matrix(0.515 -0.8572 0.8572 0.515 69.548 511.7784)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="489.501" y="219.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 46.3201 533.3304)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="513.192" y="180.299" transform="matrix(0.515 -0.8572 0.8572 0.515 91.6246 534.5381)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="505.224" y="192.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 77.3871 534.2141)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="496.983" y="206.442" transform="matrix(0.515 -0.8572 0.8572 0.515 61.5851 533.736)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="453.072" y="198.339" transform="matrix(0.515 -0.8572 0.8572 0.515 47.4411 491.5244)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="476.764" y="158.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 92.6867 492.6571)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="468.794" y="171.339" transform="matrix(0.515 -0.8572 0.8572 0.515 78.4327 492.3073)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="460.554" y="185.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 62.7183 491.9438)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="462.489" y="221.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 32.1192 510.7704)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="502.147" y="155.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 107.9863 512.832)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 7 -->
                        <a xlink:href="" xlink:title="Mesa 7" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(7)"x="511.061" y="216.926" transform="matrix(0.515 -0.8572 0.8572 0.515 67.3365 571.8694)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="541.501" y="251.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 44.1082 593.4208)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="565.192" y="212.299" transform="matrix(0.515 -0.8572 0.8572 0.515 89.4142 594.6312)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="557.224" y="224.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 75.1798 594.3135)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="548.983" y="238.442" transform="matrix(0.515 -0.8572 0.8572 0.515 59.3736 593.8271)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="505.072" y="230.339" transform="matrix(0.515 -0.8572 0.8572 0.515 45.2315 551.6193)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="528.764" y="190.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 90.4734 552.7448)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="520.794" y="203.339" transform="matrix(0.515 -0.8572 0.8572 0.515 76.2212 552.3984)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="512.554" y="217.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 60.5102 552.0415)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="514.489" y="253.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 29.9059 570.858)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="554.147" y="187.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 105.7781 572.9297)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 8 -->
                        <a xlink:href="" xlink:title="Mesa 8" class="dropdown-item" href="#" >
                        <rect  onclick="miFunc(8)" x="567.061" y="248.926" transform="matrix(0.515 -0.8572 0.8572 0.515 67.0648 635.3892)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="597.501" y="283.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 43.836 656.9398)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="621.192" y="244.299" transform="matrix(0.515 -0.8572 0.8572 0.515 89.1436 658.153)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="613.224" y="256.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 74.913 657.8418)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="604.983" y="270.442" transform="matrix(0.515 -0.8572 0.8572 0.515 59.1019 657.3469)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="561.072" y="262.339" transform="matrix(0.515 -0.8572 0.8572 0.515 44.962 615.1429)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="584.764" y="222.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 90.1997 616.2609)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="576.794" y="235.339" transform="matrix(0.515 -0.8572 0.8572 0.515 75.9495 615.9182)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="568.554" y="249.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 60.2423 615.5681)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="570.489" y="285.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 29.6322 634.3741)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="610.147" y="219.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 105.5102 636.4562)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 9 -->
                        <a xlink:href="" xlink:title="Mesa 9" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(9)"x="621.061" y="281.926" transform="matrix(0.515 -0.8572 0.8572 0.515 64.9659 697.6795)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="651.501" y="316.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 41.7368 719.2294)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="675.192" y="277.299" transform="matrix(0.515 -0.8572 0.8572 0.515 87.0459 720.4454)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="667.224" y="289.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 72.8186 720.1407)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="658.983" y="303.442" transform="matrix(0.515 -0.8572 0.8572 0.515 57.0031 719.6373)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="615.072" y="295.339" transform="matrix(0.515 -0.8572 0.8572 0.515 42.8653 677.4373)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="638.764" y="255.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 88.0991 678.5477)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="630.794" y="268.339" transform="matrix(0.515 -0.8572 0.8572 0.515 73.8508 678.2086)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="622.554" y="282.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 58.1471 677.8654)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="624.489" y="318.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 27.5316 696.661)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="664.147" y="252.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 103.4149 698.7533)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 10 -->
                        <a xlink:href="" xlink:title="Mesa 10" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(10)"x="673.061" y="314.926" transform="matrix(0.515 -0.8572 0.8572 0.515 61.8972 758.2555)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="703.501" y="349.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 38.6678 779.8047)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="727.192" y="310.299" transform="matrix(0.515 -0.8572 0.8572 0.515 83.9782 781.0236)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="719.224" y="322.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 69.7542 780.7252)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="710.983" y="336.442" transform="matrix(0.515 -0.8572 0.8572 0.515 53.9344 780.2133)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="667.072" y="328.339" transform="matrix(0.515 -0.8572 0.8572 0.515 39.7985 738.0172)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="690.764" y="288.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 85.0286 739.1202)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="682.794" y="301.339" transform="matrix(0.515 -0.8572 0.8572 0.515 70.782 738.7846)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="674.554" y="315.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 55.0818 738.4481)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="676.489" y="351.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 24.4611 757.2335)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="716.147" y="285.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 100.3495 759.3361)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 11 -->
                        <a xlink:href="" xlink:title="Mesa 11" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(11)"x="726.061" y="346.926" transform="matrix(0.515 -0.8572 0.8572 0.515 60.1707 819.2037)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="756.501" y="381.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 36.9408 840.7522)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="780.192" y="342.299" transform="matrix(0.515 -0.8572 0.8572 0.515 82.2527 841.9738)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="772.224" y="354.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 68.032 841.6818)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="763.983" y="368.442" transform="matrix(0.515 -0.8572 0.8572 0.515 52.2079 841.1616)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="720.072" y="360.339" transform="matrix(0.515 -0.8572 0.8572 0.515 38.074 798.9693)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="743.764" y="320.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 83.3002 800.0651)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="735.794" y="333.339" transform="matrix(0.515 -0.8572 0.8572 0.515 69.0555 799.7329)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="727.554" y="347.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 53.3587 799.4031)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="729.489" y="383.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 22.7327 818.1783)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="769.147" y="317.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 98.6265 820.2909)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 12 -->
                        <a xlink:href="" xlink:title="Mesa 12" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(12)"x="409.061" y="267.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -25.8443 509.1715)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="439.501" y="302.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -49.0712 530.7229)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="463.192" y="263.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -3.7709 531.9329)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="455.224" y="275.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -18.0183 531.6142)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="446.983" y="289.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -33.8073 531.1292)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="403.072" y="281.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -47.9573 488.9207)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="426.764" y="241.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -2.7002 490.0474)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="418.794" y="254.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -16.9597 489.7004)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="410.554" y="268.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -32.6846 489.3425)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="412.489" y="304.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -63.2677 508.1606)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="452.147" y="238.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 12.5836 510.2307)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 13 -->
                        <a xlink:href="" xlink:title="Mesa 13" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(13)"x="461.061" y="299.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -28.0558 569.2626)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="491.501" y="334.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -51.2831 590.8133)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="515.192" y="295.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -5.9814 592.026)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="507.224" y="307.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -20.2256 591.7136)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="498.983" y="321.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -36.0188 591.2202)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="455.072" y="313.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -50.1669 549.0156)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="478.764" y="273.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -4.9135 550.135)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="470.794" y="286.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -19.1712 549.7916)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="462.554" y="300.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -34.8927 549.4402)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="464.489" y="336.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -65.481 568.2483)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="504.147" y="270.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 10.3754 570.3282)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 14-->
                        <a xlink:href="" xlink:title="Mesa 14" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(14)"x="513.061" y="331.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -30.2674 629.3536)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="543.501" y="366.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -53.495 650.9037)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="567.192" y="327.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -8.1919 652.1191)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="559.224" y="339.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -22.4329 651.8129)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="550.983" y="353.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -38.2303 651.3114)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="507.072" y="345.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -52.3764 609.1105)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="530.764" y="305.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -7.1268 610.2227)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="522.794" y="318.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -21.3827 609.8827)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="514.554" y="332.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -37.1008 609.5379)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="516.489" y="368.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -67.6943 628.3359)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="556.147" y="302.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 8.1672 630.4259)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 15 -->
                        <a xlink:href="" xlink:title="Mesa 15" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(15)"x="569.061" y="363.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -30.5391 692.8734)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="599.501" y="398.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -53.7671 714.4227)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="623.192" y="359.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -8.4624 715.6409)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="615.224" y="371.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -22.6998 715.3412)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="606.983" y="385.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -38.502 714.8312)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="563.072" y="377.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -52.6459 672.6342)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="586.764" y="337.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -7.4005 673.7388)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="578.794" y="350.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -21.6544 673.4025)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="570.554" y="364.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -37.3687 673.0645)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="572.489" y="400.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -67.968 691.8521)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="612.147" y="334.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 7.8994 693.9525)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 16 -->
                        <a xlink:href="" xlink:title="Mesa 16" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(16)"x="623.061" y="396.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -32.6379 755.1637)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="653.501" y="431.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -55.8663 776.7123)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="677.192" y="392.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -10.5601 777.9333)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="669.224" y="404.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -24.7941 777.6401)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="660.983" y="418.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -40.6008 777.1215)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="617.072" y="410.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -54.7427 734.9285)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="640.764" y="370.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -9.5012 736.0256)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="632.794" y="383.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -23.7532 735.6929)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="624.554" y="397.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -39.4639 735.3618)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="626.489" y="433.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -70.0687 754.1389)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="666.147" y="367.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 5.8041 756.2496)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 17 -->
                        <a xlink:href="" xlink:title="Mesa 17" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(17)" x="675.061" y="429.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -35.7067 815.7397)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="705.501" y="464.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -58.9354 837.2876)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="729.192" y="425.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -13.6278 838.5115)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="721.224" y="437.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -27.8586 838.2246)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="712.983" y="451.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -43.6695 837.6976)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="669.072" y="443.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -57.8094 795.5084)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="692.764" y="403.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -12.5717 796.5981)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="684.794" y="416.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -26.8218 796.2689)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="676.554" y="430.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -42.5292 795.9445)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="678.489" y="466.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -73.1392 814.7114)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="718.147" y="400.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 2.7387 816.8323)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 18 -->
                        <a xlink:href="" xlink:title="Mesa 18" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(18)"x="727.061" y="461.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -37.9182 875.8308)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="757.501" y="496.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -61.1473 897.3779)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <polyline fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" points="793.91,462.104 788.76,470.676 778.475,464.494
                            783.625,455.924 793.91,462.104 "/>
                        <rect x="773.224" y="469.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -30.0658 898.324)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="764.983" y="483.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -45.881 897.7887)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="722.072" y="475.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -59.5339 856.4606)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="744.764" y="435.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -14.785 856.6858)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="736.794" y="448.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -29.0334 856.36)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="728.554" y="462.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -44.7372 856.0422)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="730.489" y="498.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -75.3525 874.7991)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="770.147" y="432.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 0.5306 876.9299)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <rect x="277.5" y="20.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <!-- mesa 19 -->
                        <a xlink:href="" xlink:title="Mesa 19" class="dropdown-item" href="#" >
                        <rect x="277.5" y="46.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        </a>
                        <rect x="323.5" y="46.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="46.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="46.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="4.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="4.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="4.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="4.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="24.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="24.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="92.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="118.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="118.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="118.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="118.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="76.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="76.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="76.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="76.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="96.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="96.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="163.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="189.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="189.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="189.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="189.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="147.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="147.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="147.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="147.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="167.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="167.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="302.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="328.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="328.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="328.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="328.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="286.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="286.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="286.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="286.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="306.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="306.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="366.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="392.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="392.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="392.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="392.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="350.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="350.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="350.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="350.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="370.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="370.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="427.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="453.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="453.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="453.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="453.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="411.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="411.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="411.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="411.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="431.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="431.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="493.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="519.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="519.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="519.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="519.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="477.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="477.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="477.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="477.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="497.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="497.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="559.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="585.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="585.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="585.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="585.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="543.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="543.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="543.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="543.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="563.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="563.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="277.5" y="622.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="277.5" y="648.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="323.5" y="648.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="308.5" y="648.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="292.5" y="648.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="277.5" y="606.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="323.5" y="606.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="308.5" y="606.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="292.5" y="606.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="262.5" y="626.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="339.5" y="626.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="273.5" y="688.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="273.5" y="714.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="319.5" y="714.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="304.5" y="714.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="288.5" y="714.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="273.5" y="672.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="319.5" y="672.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="304.5" y="672.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="288.5" y="672.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="258.5" y="692.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="335.5" y="692.5" fill="#FFFFFF" stroke="#FF2462" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="20.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="46.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="46.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="46.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="46.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="4.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="4.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="4.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="4.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="24.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="24.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="92.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="118.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="118.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="118.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="118.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="76.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="76.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="76.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="76.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="96.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="96.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="163.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="189.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="189.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="189.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="189.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="147.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="147.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="147.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="147.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="167.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="167.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="302.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="328.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="328.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="328.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="328.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="286.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="286.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="286.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="286.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="306.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="306.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="366.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="392.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="392.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="392.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="392.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="350.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="350.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="350.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="350.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="370.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="370.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="427.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="453.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="453.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="453.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="453.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="411.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="411.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="411.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="411.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="431.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="431.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="493.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="519.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="519.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="519.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="519.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="477.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="477.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="477.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="477.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="497.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="497.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="559.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="585.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="585.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="585.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="585.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="543.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="543.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="543.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="543.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="563.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="563.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="622.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="648.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="648.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="648.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="648.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="606.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="606.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="606.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="606.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="626.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="626.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="173.5" y="688.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="56" height="19"/>
                        <rect x="173.5" y="714.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="219.5" y="714.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="204.5" y="714.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="188.5" y="714.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="173.5" y="672.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="219.5" y="672.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="204.5" y="672.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="188.5" y="672.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="11" height="11"/>
                        <rect x="158.5" y="692.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="235.5" y="692.5" fill="#FFFFFF" stroke="#00A320" stroke-miterlimit="10" width="10" height="11"/>
                        <rect x="130.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="539.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="520.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="501.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="485.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="467.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="450.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="432.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="412.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="395.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="377.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="176.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="157.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="138.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="122.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="104.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="87.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="69.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="49.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="32.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="14.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="358.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="339.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="320.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="304.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="286.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="269.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="251.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="231.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="214.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="130.5" y="196.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <!-- mesa 21 -->
                        <a xlink:href="" xlink:title="Mesa 21" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(21)" x="570.061" y="483.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -132.9138 751.9252)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="600.501" y="518.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -156.141 773.4731)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="624.192" y="479.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -110.8394 774.6966)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="616.224" y="491.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -125.0837 774.4089)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="607.983" y="505.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -140.8767 773.8831)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="564.072" y="497.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -155.0249 731.6934)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="587.764" y="457.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -109.7713 732.7841)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="579.794" y="470.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -124.0291 732.4543)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="571.554" y="484.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -139.7507 732.129)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="573.489" y="520.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -170.3388 750.8973)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="613.147" y="454.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -94.4827 753.0167)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 22 -->
                        <a xlink:href="" xlink:title="Mesa 22" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(22)" x="623.061" y="515.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -134.6404 812.8734)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="653.501" y="550.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -157.8679 834.4207)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="677.192" y="511.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -112.5649 835.6469)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="669.224" y="523.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -126.8058 835.3655)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="660.983" y="537.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -142.6033 834.8313)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="617.072" y="529.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -156.7495 792.6454)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="640.764" y="489.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -111.4998 793.7289)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="632.794" y="502.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -125.7557 793.4026)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="624.554" y="516.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -141.4738 793.0839)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="626.489" y="552.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -172.0673 811.8421)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="666.147" y="486.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -96.2057 813.9716)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa  19 -->
                        <a xlink:href="" xlink:title="Mesa 19" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(19)"x="461.061" y="419.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -130.9155 627.4572)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="491.501" y="454.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -154.1418 649.0066)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="515.192" y="415.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -108.8433 650.2245)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="507.224" y="427.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -123.0947 649.924)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="498.983" y="441.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -138.8785 649.415)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="455.072" y="433.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -153.0308 607.2175)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="478.764" y="393.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -107.7692 608.3232)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="470.794" y="406.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -122.0308 607.9863)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="462.554" y="420.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -137.7598 607.6475)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="464.489" y="456.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -168.3367 626.4364)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="504.147" y="390.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -92.4917 628.5354)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 20 -->
                        <a xlink:href="" xlink:title="Mesa 20" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(20)"x="514.061" y="451.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -132.6421 688.4055)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="544.501" y="486.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -155.8688 709.9541)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="568.192" y="447.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -110.5688 711.1748)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="560.224" y="459.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -124.8168 710.8806)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="551.983" y="473.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -140.605 710.3633)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="508.072" y="465.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -154.7554 668.1696)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="531.764" y="425.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -109.4976 669.2679)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="523.794" y="438.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -123.7574 668.9346)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="515.554" y="452.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -139.4829 668.6024)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="517.489" y="488.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -170.0651 687.3812)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="557.147" y="422.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -94.2148 689.4902)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 24 -->
                        <a xlink:href="" xlink:title="Mesa 24" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(24)" x="518.061" y="570.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -232.7047 749.5438)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="548.501" y="605.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -255.9307 771.0911)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="572.192" y="566.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -210.6336 772.317)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="564.224" y="578.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -224.8883 772.0348)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="555.983" y="592.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -240.6677 771.5017)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="512.072" y="584.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -254.8221 729.3153)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="535.764" y="544.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -209.5566 730.3997)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="527.794" y="557.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -223.8201 730.073)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="519.554" y="571.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -239.5526 729.7535)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="521.489" y="607.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -270.1241 748.5129)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="561.147" y="541.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -194.2844 750.6412)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 25 -->
                        <a xlink:href="" xlink:title="Mesa 25" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(25)"x="571.061" y="602.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -234.4313 810.4921)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="601.501" y="637.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -257.6577 832.0386)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="625.192" y="598.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -212.3591 833.2673)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="617.224" y="610.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -226.6104 832.9914)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="608.983" y="624.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -242.3943 832.45)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="565.072" y="616.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -256.5466 790.2675)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="588.764" y="576.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -211.285 791.3445)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="580.794" y="589.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -225.5466 791.0212)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="572.554" y="603.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -241.2756 790.7084)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="574.489" y="639.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -271.8525 809.4577)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="614.147" y="573.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -196.0075 811.596)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <!-- mesa 23 -->
                        <a xlink:href="" xlink:title="Mesa 23" class="dropdown-item" href="#" >
                        <rect onclick="miFunc(23)"x="464.061" y="539.926" transform="matrix(0.515 -0.8572 0.8572 0.515 -232.3203 688.2234)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="55.999" height="19.001"/>
                        </a>
                        <rect x="494.501" y="574.729" transform="matrix(0.5151 -0.8572 0.8572 0.5151 -255.5458 709.7714)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="518.192" y="535.299" transform="matrix(0.515 -0.8572 0.8572 0.515 -210.2502 710.9945)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10.001" height="12"/>
                        <rect x="510.224" y="547.728" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -224.5084 710.7061)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11" height="12"/>
                        <rect x="501.983" y="561.442" transform="matrix(0.515 -0.8572 0.8572 0.515 -240.2833 710.1812)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="12"/>
                        <rect x="458.072" y="553.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -254.4398 667.991)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="11.001"/>
                        <rect x="481.764" y="513.911" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -209.1702 669.0827)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="473.794" y="526.339" transform="matrix(0.515 -0.8572 0.8572 0.515 -223.4356 668.7525)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="10.998"/>
                        <rect x="465.554" y="540.052" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -239.1718 668.4264)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="11.001" height="11"/>
                        <rect x="467.489" y="576.499" transform="matrix(0.5151 -0.8571 0.8571 0.5151 -269.7377 687.1959)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="9.999" height="10.998"/>
                        <rect x="507.147" y="510.496" transform="matrix(0.5149 -0.8572 0.8572 0.5149 -193.9036 689.3141)" fill="#FFFFFF" stroke="#004AEC" stroke-miterlimit="10" width="10" height="11.001"/>
                        <rect x="115.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="539.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="520.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="501.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="485.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="467.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="450.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="432.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="412.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="395.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="377.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="176.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="157.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="138.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="122.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="104.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="87.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="69.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="49.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="32.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="14.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="358.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="339.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="320.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="304.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="286.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="269.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="251.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="231.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="214.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="115.5" y="196.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="539.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="520.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="501.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="485.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="467.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="450.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="432.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="412.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="395.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="377.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="176.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="157.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="138.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="122.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="104.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="87.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="69.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="49.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="32.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="14.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="358.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="339.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="320.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="304.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="286.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="269.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="251.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="231.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="214.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="99.5" y="196.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="539.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="520.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="501.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="485.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="467.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="450.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="432.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="412.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="395.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="377.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="176.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="157.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="138.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="122.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="104.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="87.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="69.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="49.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="32.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="14.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="358.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="339.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="320.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="304.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="286.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="269.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="251.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="231.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="214.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="84.5" y="196.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="539.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="520.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="501.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="485.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="467.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="450.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="432.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="412.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="395.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="377.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="358.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="339.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="320.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="304.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="286.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="269.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="251.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="231.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="214.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="68.5" y="196.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="539.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="520.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="501.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="485.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="467.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="450.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="432.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="412.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="395.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="53.5" y="377.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="539.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="520.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="501.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="485.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="467.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="450.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="432.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="412.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="395.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="37.5" y="377.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="22.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="720.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="701.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="682.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="666.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="648.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="631.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="613.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="593.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="576.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <rect x="6.5" y="558.5" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="10" height="12"/>
                        <line fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" x1="150.5" y1="0" x2="150.5" y2="760"/>
                        <line fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" x1="252.5" y1="0" x2="252.5" y2="760"/>
                        <line fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" x1="367.5" y1="5" x2="367.5" y2="760"/>
                        <line fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" x1="620.625" y1="190.924" x2="669.146" y2="105.247"/>
                        <line fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" x1="669.146" y1="105.247" x2="800" y2="182.5"/>
                        <line fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" x1="800" y1="182.5" x2="793.91" y2="291.425"/>
                        <line fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" x1="793.91" y1="291.425" x2="620.625" y2="190.924"/>
                        <text transform="matrix(0.866 0.5 -0.5 0.866 663.8574 166.7285)" font-family="'TimesNewRomanPSMT'" font-size="20">ESCENARIO</text>
                        </svg>
                        <?php
                        $identificador = 5;
                        ?>

                                <!-- asta este punto perteence la imagen del mapa -->
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-3 col-lg-5">
                            <div class="card shadow mb-10">
                            <form action="<?php echo base_url();?>index.php/silla/registrarSilla" method="POST">

                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Registro</h6>

                                </div>
                                <!-- Card Body -->


                                <div class="card-body">

                                    <!-- desde aca se pondra la posicion de las sillas -->

                                    <div class="form-group row">
                                        <div id="output" class="col-sm-5 mb-3 mb-sm-0">
                                            <label for="">Mesa:
                                            <input type="text" value ="" class="form-control form-control-user" id="numSilla" name="numSilla" require
                                                placeholder="Mesa"> </label>

                                        </div>

                                        <div class="form-group">
                                                <select class="form-control" name="jcity" id="jcity" class="form-control input-lg">
                                                    <option value="">Seleccionar cantidad</option>
                                                    
                                                </select>
                                        </div>



                                            <div class="col-sm-6">
                                                <label for="">Precio: </label>

                                                    <input type="number" readonly class="form-control form-control-user" id="telefono" name="telefono" require 
                                                        placeholder="Bs.-">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                        <label for="">Precio Total:
                                            <input type="text" class="form-control form-control-user" id="precio" name="precioTotal" readonly require
                                                placeholder="Bs.-"> </label>

                                        </div>
                                    <!-- asta esta posicion  -->
                                    <div class="chart-pie pt-4 pb-2">
                                    <label for="">Datos del Cliente:</label>

                                        <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nombres" name="nombres" require
                                        placeholder="Nombre">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="apellido" name="apellidos" require
                                            placeholder="Apellido">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="ci" name="ci" require
                                                placeholder="C.I.">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control form-control-user" id="telefono" name="telefono" require
                                                placeholder="Telefono">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="correo" name="correo"
                                            placeholder="Correo">
                                    </div>




                                <hr>

                            </form>

                                    </div>
                                    <div class="form-group" aling="center">
                                            <?php
                                            echo date("Y-m-d H:i:s");
                                            ?>
                                    </div>
                                    <div class="mt-2 text-center small">
                                        <!-- <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span> -->

                                        <button type="submit" class="btn btn-outline-primary" >VENTA</button>
                                        <button type="submit" class="btn btn-outline-primary" >RESERVA</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <!-- <div class="row">

                        <div class="col-lg-6 mb-4">



                        <div class="col-lg-6 mb-4">



                        </div>
                    </div> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <script>

                function miFunc(p2) {
                    let num=p2;
                     //alert( p2);
                    // document.getElementByID("sillaEvent").value=p2;
                    var cant = $("#numSilla").val(`${num}`)

                     numero = document.getElementById("numSilla").value; 
                        llamado(numero);
                }      
                
                
                function llamado(numero) {

                   
                        alert("Escogio al mesa " +" "+ numero);
                                var cantidad = numero;
                                if (cantidad != '') {
                                    $.ajax({
                                    
                                    url: "/index.php/cantidad_silla/get_mesa",
                                    type: "POST",
                                    data: {mesa: cantidad},
                                     //dataType: "ajax",
                                    success: function (respuesta) {
                                       // $("#jcity").html(data);
                                    alert(respuesta);
                                    }
                                })
                                }
                               
                    
                   



                                // $.post("<?php echo base_url() ?>index.php/cantidad_silla/get_mesa", {
                                //     id_country: id_country
                                // }, function (data) {
                                //     $("#jcity").html(data);
                                //     console.log(id_country);
                                // });
                            
                        
                    
                    // var sql ="SELECT id,silla FROM mapa where estado = 1 and mesa = '$mesa'";
                    // console.log(sql);

                    
                }            
               
                   

               

            </script> 
            
             <!-- <script>
                 $("#numSilla").change(function(){
                    var movInt = $('#numSilla').val()
                    $.ajax({
                        // url:'http://localhost:9090/CodeIgniter/sistema1/index.php/usuario_per/mostrar',
                        url:'datos.php',
                        // 
                        method:'get',
                        data: {movInt : movInt},
                        dataType:'html',
                        success:function(data){                   
                            $("#cantidad").append(data);
                        }
                    });
                });
            </script>  -->
           <!-- End of Main Content -->

           
            <!-- Footer -->
