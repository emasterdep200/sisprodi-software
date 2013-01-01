            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sisprodi</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pacientes</a></li>
                                            <li class="breadcrumb-item active">Todos</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Pacientes</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row no-gutters">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle bg-total-Pacientes rounded-0 card-box mb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary">
                                                <i class="fe-users font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><a href="" data-toggle="modal" data-target=".bs-example-modal-lg" class="text-white "><span data-plugin="counterup">3,947</span></a></h3>
                                                <p class="text-white mb-1 text-truncate font-weight-bold ">Total Pacientes</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                             <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle bg-total-diabetes1 rounded-0 card-box mb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger">
                                                <i class="fe-user font-22 avatar-title text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-white mt-1"><span data-plugin="counterup">128</span></h3>
                                                <p class="text-white mb-1 text-truncate font-weight-bold ">Diabetes Tipo 1</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                             <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle bg-total-diabetes2 rounded-0 card-box mb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning">
                                                <i class="fe-user font-22 avatar-title text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-white mt-1"><span data-plugin="counterup">624</span></h3>
                                                <p class="text-white mb-1 text-truncate font-weight-bold">Diabetes Tipo 2</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle bg-total-diabetes3 rounded-0 card-box mb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-success">
                                                <i class="fe-user font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-white mt-1"><span data-plugin="counterup">3195</span></h3>
                                                <p class="text-white mb-1 text-truncate font-weight-bold">Diabetes Tipo 3</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
   
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <button type="button" class="btn btn-primary waves-effect waves-light float-right" data-toggle="modal" data-target=".add-pacientes-modal">
                                        <i class="mdi mdi-plus "></i> Agregar paciente
                                    </button>

                                    <h4 class="header-title mb-4">Todos los pacientes</h4>

                                    <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                                        <thead>
                                        <tr class="bg-light">
                                            <th>
                                                ID
                                            </th>
                                            <th>Nombre</th>
                                            <th>Cedula</th>
                                            <th>Edad</th>
                                            <th>Tipo</th>                        
                                            <th>Primera <br>consulta</th>
                                            <th>Ultima <br>consulta</th>
                                            <th class="hidden-sm">Acción</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td><b>#1256</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">José Martínez</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                             <td>
                                                22
                                            </td>

                                            <td>
                                                <span class="badge badge-light-secondary">Tipo 3</span>
                                            </td>

                                          

                                            <td>
                                                2017/04/28
                                            </td>

                                            <td>
                                                2017/04/28
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#2542</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Francisco López</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                27
                                            </td>

                                        
                                            <td>
                                                <span class="badge badge-light-warning">Tipo 2</span>
                                            </td>

                                         

                                            <td>
                                                2008/04/25
                                            </td>

                                            <td>
                                                2008/04/25
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#320</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-body">
                                                    <img src="../../view/assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Juan Sánchez</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                69
                                            </td>

                                            <td>
                                                <span class="badge badge-light-danger">Tipo 1</span>
                                            </td>

                                
                                            <td>
                                                2017/04/20
                                            </td>

                                            <td>
                                                2017/04/25
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1254</b></td>
                                            <td>
                                                <a href="javascript: void(0);" class="text-body">
                                                    <img src="../../view/assets/images/users/user-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Manuel González</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                             <td>
                                                58
                                            </td>



                                            <td>
                                                <span class="badge badge-light-danger">Tipo 1</span>
                                            </td>

                                        

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1020</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Pedro Gómez</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                             <td>
                                                25
                                            </td>

                                            <td>
                                                <span class="badge badge-light-warning">Tipo 2</span>
                                            </td>

                                        
                                            <td>
                                                2013/08/11
                                            </td>

                                            <td>
                                                2013/08/30
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#854</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Dolores Jiménez</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                             <td>
                                                28
                                            </td>
             
                                            <td>
                                                <span class="badge badge-light-danger">Tipo 1</span>
                                            </td>

                                           

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#9501</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">María José Pérez</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                30
                                            </td>

                                            <td>
                                                <span class="badge badge-light-secondary">Tipo 3</span>
                                            </td>

                                           

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3652</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Ana Navarro</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                             <td>
                                                36
                                            </td>

                 

                                            <td>
                                                <span class="badge badge-light-warning">Tipo 2</span>
                                            </td>

                                           

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#9852</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">María Isabel Ruiz</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                38
                                            </td>

          

                                            <td>
                                                <span class="badge badge-light-danger">Tipo 1</span>
                                            </td>

                                            

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3652</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">María ángeles Díaz</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                42
                                            </td>

                                            <td>
                                                <span class="badge badge-light-secondary">Tipo 3</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1352</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Ana maría Hernández</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                47
                                            </td>


                                            <td>
                                                <span class="badge badge-light-danger">Tipo 1</span>
                                            </td>

                                            

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3562</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Antonia Rodríguez</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                32
                                            </td>


                                            <td>
                                                <span class="badge badge-light-secondary">Tipo 3</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3658</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Antonio García</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                40
                                            </td>

                                            <td>
                                                <span class="badge badge-light-warning">Tipo 2</span>
                                            </td>

                                           

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#2251</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Rafel Diaz</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                             <td>
                                                26
                                            </td>


                                            <td>
                                                <span class="badge badge-light-danger">Tipo 1</span>
                                            </td>

                                            

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>Ver perfil</a>
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Borrar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3654</b></td>
                                            <td>
                                                <a href="../dashboard/perfil" class="text-body">
                                                    <img src="../../view/assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                    <span class="ml-2">Roberto Romero</span>
                                                </a>
                                            </td>

                                            <td>
                                                V-26.704.032
                                            </td>

                                            <td>
                                                64
                                            </td>


                                            <td>
                                                <span class="badge badge-light-secondary">Tipo 3</span>
                                            </td>

                                           

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="../dashboard/perfil" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" type="button"  data-toggle="modal" data-target=".edit-pacientes-modal"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Editar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Cerrar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Eliminar</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Marcar como no leído</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->    
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->













            <!--  Modal content for the above example -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-total-Pacientes text-white">
                            <h4 class="modal-title text-white" id="myLargeModalLabel">Historial pacientes</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">



                             <!-- Portlet card -->
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        

                                        <div id="cardCollpase1" class="collapse show">
                                            <div class="bg-soft-light border-light border">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <p class="text-muted mb-0 mt-3">Diabestes Tipo 1</p>
                                                        <h2 class="font-weight-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-muted align-middle mr-1"></small>
                                                            <span>751</span>
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted mb-0 mt-3">Diabestes Tipo 2</p>
                                                        <h2 class="font-weight-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-info align-middle mr-1"></small>
                                                            <span>2,874</span>
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted mb-0 mt-3">Diabestes Tipo 3</p>
                                                        <h2 class="font-weight-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-danger align-middle mr-1"></small>
                                                            <span>1,258</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dash-item-overlay d-none d-md-block">
                                              
                                               
                                            </div>
                                            <div id="apex-line-1" class="apex-charts" style="min-height: 480px !important;"></div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->






                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
