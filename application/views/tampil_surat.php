  
<!-- Header Section-->
<section class="dashboard-header section-padding"> 
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
                
            <!-- To Do List-->
            <div class="col-lg-12 col-md-8">
              <div class="card to-do">
                <h3 class="display h1"><strong >Arsip Surat >> Lihat</strong></h3>
                <h6>Nomor:<?= $tampil['nomor_surat']; ?></h6>
                <h6>Kategori:<?= $tampil['kategori']; ?></h6>
                <h6>Judul:<?= $tampil['judul']; ?></h6>
                <h6>Waktu:<?= $tampil['waktu']; ?></h6>
                <br>
                <iframe src="<?= base_url('uploads/') . $tampil['file_surat']; ?>" width="100%" height="500px">
                </iframe>
                 
                <div class="form-group" style="padding-top: 15px;">       
                <a href="<?php echo base_url().'Home'?>" class="btn btn-secondary"> << Kembali </a>
                <a class="btn btn-warning " <?php echo anchor('Home/download/'.$tampil['id_arsip'],'Unduh') ?></a>
                <a class="btn btn-info" href="#" >Edit/Ganti File</a>
            
            </div>
           
            </div>
          </div>
            </div>
          
      </section>