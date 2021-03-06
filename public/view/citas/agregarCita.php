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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Calendar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Calendar</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg font-16 btn-primary btn-block  ">
                                                    <i class="mdi mdi-plus-circle-outline"></i> Create New Event
                                                </a>
                                                <div id="external-events" class="m-t-20">
                                                    <br>
                                                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                    <div class="external-event bg-success" data-class="bg-success">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>New Theme Release
                                                    </div>
                                                    <div class="external-event bg-info" data-class="bg-info">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>My Event
                                                    </div>
                                                    <div class="external-event bg-warning" data-class="bg-warning">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Meet manager
                                                    </div>
                                                    <div class="external-event bg-danger" data-class="bg-danger">
                                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Create New theme
                                                    </div>
                                                </div>
    
                                                <!-- checkbox -->
                                                <div class="custom-control custom-checkbox mt-3">
                                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                                </div>

                                              
    
                                            </div> <!-- end col-->

                                            <div class="col-lg-9">
                                                <div id="calendar"></div>
                                            </div> <!-- end col -->

                                        </div>  <!-- end row -->
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Agregar nueva cita</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div> 
                                            <div class="modal-body p-3">
                                            </div>
                                            <div class="text-right p-3">
                                                <button type="button" class="btn btn-light " data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-success save-event  ">Crear cita</button>
                                                <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">Eliminar</button>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->

                                <!-- Modal Add Category -->
                                <div class="modal fade" id="add-category" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add a category</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div> 
                                            <div class="modal-body p-3">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="control-label">Category Name</label>
                                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Choose Category Color</label>
                                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                            <option value="primary">Primary</option>
                                                            <option value="success">Success</option>
                                                            <option value="danger">Danger</option>
                                                            <option value="info">Info</option>
                                                            <option value="warning">Warning</option>
                                                            <option value="dark">Dark</option>
                                                        </select>
                                                    </div>

                                                </form>
                                                <div class="text-right pt-2">
                                                    <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary ml-1   save-category" data-dismiss="modal">Save</button>
                                                </div>

                                            </div> <!-- end modal-body-->
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
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
