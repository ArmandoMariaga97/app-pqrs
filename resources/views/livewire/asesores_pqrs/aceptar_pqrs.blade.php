
<div wire:ignore class="modal fade text-left" id="aceptar-{{ $pqrs->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div style="border: solid 1px #48D7A4; border-radius:8px;" class="modal-content">
        <div style="background:#48D7A4; border-radius:8px 8px 0 0;" class="modal-header">
          <label class="modal-title text-white text-text-bold-600" >Aceptar PQRS</label>
        </div>
        <form action="#">
            <div class="modal-body">
                <h5>Seguro desea aceptar el PQRS con Radicado # <b>( {{ $pqrs->radicado }} )</b> </h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
              <buttom wire:click="aceptarPQRS({{ $pqrs->id }})"  type="reset" class="btn btn-outline-success" data-dismiss="modal">Aceptar</buttom>
            </div>  
        </form>

    </div>
  </div>
</div>



