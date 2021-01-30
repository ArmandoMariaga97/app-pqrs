
<div class="modal fade text-left" id="delete-modal-{{ $asesor->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div style="border: solid 1px red; border-radius:8px;" class="modal-content">
        <div style="background:#FF6C6C; border-radius:8px 8px 0 0;" class="modal-header">
          <label class="modal-title text-white text-text-bold-600" >Eliminar Asesor</label>
        </div>
        <form action="#">
            <div class="modal-body">
                <h5>Seguro desea eliminar al Asesor <b>( {{ $asesor->name }} )</b> </h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
              <buttom wire:click="destroy({{ $asesor->id }})"  type="reset" class="btn btn-danger" data-dismiss="modal">Eliminar</buttom>
            </div>  
        </form>

    </div>
  </div>
</div>



