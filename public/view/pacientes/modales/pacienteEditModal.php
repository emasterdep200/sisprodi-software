

<div class="modal fade edit-pacientes-modal" id="modal-addProducts" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" elh-style="modal-add-paciente" style="display: none;">
    <div class="modal-dialog">
        <form class="modal-content" action="#" method="post" elh-form="insertarPaciente">


           
                <div class="modal-header bg-total-Pacientes text-center" >
                    <h4 class="modal-title text-white text-center">Editar paciente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-0">

                    <ul class="nav nav-tabs nav-bordered nav-justified" >
                        <li class="nav-item">
                            <a href="#datosPersonalesEdit" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                1. Datos personales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#ubicacionEdit" data-toggle="tab" aria-expanded="false" class="nav-link ">
                                2. Ubicacion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#diagnosticoEdit" data-toggle="tab" aria-expanded="false" class="nav-link">
                                3. Diagnostico
                            </a>
                        </li>
                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane active px-4 py-2" id="datosPersonalesEdit">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Nombre*</label>
                                        <input type="text" class="form-control" id="field-1" value="José ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label font-weight-bold">Apellido*</label>
                                        <input type="text" class="form-control" id="field-2" value="González">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Cedula*</label>
                                        <input type="text" class="form-control" id="field-1" value="26.704.032">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label font-weight-bold">Telefono*</label>
                                        <input type="number" class="form-control" id="field-2" value="0426-380-44-44">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Fecha de Nacimiento </label>
                                        <input type="date" class="form-control" id="field-1" value="26/02/1995">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Serial Carnet  * </label>
                                        <input type="text" class="form-control" id="field-1" value="000122245">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane px-4 py-2" id="ubicacionEdit">


                            <div class="row">
                               <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-5" class="control-label font-weight-bold">Estado</label>
                                    <input type="text" class="form-control" id="field-5" value="Sucre">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-4" class="control-label font-weight-bold">Ciudad</label>
                                    <input type="text" class="form-control" id="field-4" value="Cumaná">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-6" class="control-label font-weight-bold">Parroquia</label>
                                    <input type="text" class="form-control" id="field-6" value="Santa Ines">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label font-weight-bold">Calle</label>
                                    <input type="text" class="form-control" id="field-3" value="Calle montes">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane px-4 py-2" id="diagnosticoEdit">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-2" class="control-label font-weight-bold">Diabetes * </label>
                                    <select name="diabetes" elh-input="pdiabetes" id="" class="form-control">
                                        <option value="1" seleted>Tipo 1</option>
                                        <option value="2">Tipo 2</option>
                                        <option value="3">Tipo 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group" >
                                    <label for="field-2" class="control-label font-weight-bold">Peso</label>
                                    <input type="text" class="form-control" id="field-2" value="75 kg">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn bg-total-Pacientes waves-effect waves-light">Guardar cambios</button>
            </div>


    </form>
</div>
 </div><!-- /.modal -->