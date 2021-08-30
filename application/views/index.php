
<!-- Header Section-->
<section class="dashboard-header section-padding"> 
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
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
                <h3 class="display h1"><strong >Arsip Surat</strong></h3>
                <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br>Klik "Lihat" pada kolom aksi untuk menampilkan surat. </p><br><br>
              
              
              <div class="input-group">
                  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" name="keyword" aria-describedby="search-addon" />
                  <a type="submit" class="btn btn-outline-primary" >search</a>
                </div>
              
                

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nomor Surat</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Waktu Pengerjaan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
            <tbody>
            <?php
              foreach($arsip as $a) {
              ?>
								<tr>
                  <td><?php echo $a->nomor_surat; ?></td>
									<td><?php echo $a->kategori; ?></td>
									<td><?php echo $a->judul; ?></td>                   
									<td><?php echo $a->waktu; ?></td>                   
									<td>
										
                  <a onclick="return confirm('Apakah anda yakin ingin menghapus arsip surat ini?');" <?php echo anchor('home/hapus/'.$a->id_arsip, 
                      '<div class="btn btn-danger">Hapus</div>') ?></a>
                    <a class="btn btn-warning" <?php echo anchor('Home/download/'.$a->id_arsip,'Unduh') ?></a>
                    <a class="btn btn-info" <?php echo anchor('Home/lihat_surat/'.$a->id_arsip,'Lihat>>') ?></a>
									</td>
								</tr>
                <?php } ?>
            </tbody>
          </table>
          
          <div class="form-group" style="padding-top: 15px;">       
            <a href="<?php echo base_url().'Home/arsip_surat'?>" class="btn btn-info"> Arsipkan Surat </a>
            
            </div>
          </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      
 