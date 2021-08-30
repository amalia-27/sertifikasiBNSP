  
<!-- Header Section-->
<section class="dashboard-header section-padding"> 
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
              <!-- alert -->
                <?php if($this->session->flashdata('flash-data') ):  ?>
                  <div class="col-lg-12">
                      <div class="col-md-10">
                          <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong> <?= $this->session->flashdata('flash-data'); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                      </div>
                  </div>
		            <?php endif; ?>
            <!-- To Do List-->
            <div class="col-lg-12 col-md-8">
              <div class="card to-do">
                <h3 class="display h1"><strong >Arsip Surat >> Unggah</strong></h3>
                <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan. </p>
                <p>Catatan:
                    <ul>
                        <li> Gunakan file berformat PDF</li>
                    </ul>
                </p>
                
              
                <form action="<?php echo base_url().'Home/proses_arsip'?>" enctype="multipart/form-data" method="POST">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nomor Surat</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-6">
                    <select class="form-control" name="kategori" id="kategori">
                    <option value="Undangan">Undangan</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                    <option value="Pemberitahuan">Pemberitahuan</option>
                    </select>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Judul</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="judul" name="judul" required>
                   
                    </div>
                  </div>

                  <div class="form-group row">
                    
                    <label class="col-sm-3 col-form-label">File Surat (PDF)</label>
                    
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" id="file_surat" name="file_surat">
                    </div>
                        
                    </div>
                    </div>
                    <div class="form-group" style="padding-top: 15px;">       
                      
                      <a href="<?php echo base_url().'Home'?>" class="btn btn-secondary"> << Kembali </a>

                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>

                
          <div class="form-group" style="padding-top: 15px;">       
           
            </div>
          </div>
            </div>
          
      </section>