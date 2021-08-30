<div class="row">

      <div class="col-lg-12">
      <h1 class="text-primary text-center">About</h1>
      <br>
              <!-- Monthly Usage-->
              <div class="card data-usage">
                
              <div class="row d-flex align-items-center">
                  <div class="col-sm-6">
                  
                      <?php
                      foreach($tampil as $t){
                          ?>
                        <div class="d-flex align-items-center justify-content-center"> <img src="<?= base_url('uploads/') . $t->foto; ?>" class="card-img" alt="foto_identitas" style="height: 300px; width:350px;"></div> 
                        </div>
                        <div class="col-sm-6">
                        <div class="card-body">
                        <p class="card-text">Aplikasi ini dibuat oleh: <?php echo $t->nama; ?></p>
                        <p class="card-text">NIM: <?php echo $t->nim; ?></p>
                        <p class="card-text">Tanggal: <?php echo $t->tgl; ?></p>
                      </div>
                  
                        <?php } ?>
                  
                  
                        
                    </div>
                </div>
                
              </div>
            </div>
            https://youtu.be/KSWxjosYFx8
            