<?php
class ModalsCiudad{
    public static function modalCreate(){
        ?>
        <div class="modal" tabindex="-1"  id="modalCreateDepto">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
               
                <h5 class="modal-title">Registro Ciudad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form name="frmCreateCiudad" action="<?php echo getUrl('Ciudad','Ciudad','postNew');?>" method="post">
 
                    <div class="mb-3">
                        <label for="codigo" class="from-label">codigo</label><br>
                        <input type="number" name="idCiudad" id="idCiudad" class="form-control" require><br>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="from-label">nombre</label><br>
                        <input type="text" name="nameCiudad" id="nameCiudad" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <label for="departamento" class="from-label">departamento</label><br>
                        <input type="text" name="nameDepar" id="nameDepar" class="form-control" require>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <?php
    }  
}
