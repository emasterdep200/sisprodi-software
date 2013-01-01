

<div class="modal fade add-medicamentos-modal" id="modal-addMedicamentos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" elh-style="modal-add-medicamentos" style="display: none;">
    <div class="modal-dialog">
        <form class="modal-content" action="#" method="post" elh-form="insertarMedicamento">


           
                <div class="modal-header bg-total-Pacientes text-center" >
                    <h4 class="modal-title text-white text-center">Agregar nuevo medicamento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Nombre*</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label font-weight-bold">Codigo*</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Fecha de expedición </label>
                                        <input type="date" class="form-control" id="field-1" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Fecha de vencimiento </label>
                                        <input type="date" class="form-control" id="field-1" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Numero de lote </label>
                                        <input type="text" class="form-control" id="field-1" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label font-weight-bold">Marca  * </label>
                                        <input type="text" class="form-control" id="field-1" placeholder="">
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