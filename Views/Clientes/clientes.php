<?php 
    headerAdmin($data); 
    getModal('modalClientes',$data);
?>
  <main class="app-content">    
      <div class="app-title">
        <div>
            <h1><i class="fa fa-tachometer" aria-hidden="true"></i> <?= $data['page_title'] ?>
                
            </h1>
        </div>
              <?php if($_SESSION['permisosMod']['w']){ ?>
                <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
              <?php } ?>
        
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <!-- tableClientes para hacer llamado -->
                    <table class="table table-hover table-bordered" id="tableClientes">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Identificación</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Email</th>
                          <th>Teléfono</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>