<section class="content-header">
  <h1>
    Edit Data Pegawai
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Data Pegawai</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <form role="form" action="<?php echo base_url('admin/Master/ubahPegawai')?>" method="post">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Edit Data Pegawai</h3>
          <p><span class="wajib">* wajib diisi</span></p>
        </div>
        
         <?php
 
 foreach($pegawai as $row){
  $idPetugas = $row->idPegawai;
  $nama =  $row->nama;
  $jabatan =  $row->jabatan;
  $nip=  $row->nip;
  $pangkat =  $row->pangkat;
  $golongan =  $row->golongan;
  $ketuatim = $row->ketuaTim;
  $ppk =  $row->ppk;
 }?>


        <div class="col-md-12">
          <hr>
       
           <input type="hidden" class="form-control" placeholder="Nama Pegawai" name="id" id="id" value=<?echo $idPetugas ?> required>
          
          <!-- nama pegawai -->
           <div class="form-group row">
                  <label for="noSuratTugas" class="col-sm-6 col-form-label">Nama Pegawai<span class="wajib"> *</span></label>
                  <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-list"></i></span>
                      <input type="text" class="form-control" placeholder="Pilih Nama " name="nama" id="nama" value="<?=$nama?>" required>
                    </div>
                  </div>
                </div>
                
        <!--jabatan-->
        
         <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Pangkat<span class="wajib"> *</span></label>
            <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <select class="form-control" name="jabatan" id="jabatan" required>
                  <option value="<?echo $jabatan ?>"  selected><?echo $jabatan ?></option>
                  <option>-</option>
                  <option>Kepala Balai POM di Batam</option>
                  <option>Kepala Sub Bagian Tata Usaha</option>
                  <option>Koordinator Substansi Infokom</option>
                  <option>Koordinator Substansi Penindakan</option>
                  <option>Koordinator Substansi Pemeriksaan</option>
                  <option>Koordinator Substansi Pengujian</option>
                  <option>PFM Ahli Madya</option>
                  <option>PFM Ahli Muda</option>
                  <option>PFM Ahli Pertama</option>
                  <option>PFM Keahlian</option>
                  <option>PFM Terampil</option>
                  <option>PFM Terampil Pelaksana</option>
                  <option>PFM Terampil Pelaksana Lanjutan</option>
                  <option>Perencana Ahli Pertama</option>
                  <option>Pranata Komputer Pelaksana</option>
                  <option>Analis Kepegawaian Pelaksana Lanjutan</option>
                  <option>Arsiparis Terampil</option>
                  <option>Analis Laporan Keuangan</option>
                  <option>Analis Pengadaan Barang dan Jasa</option>
                  <option>Bendahara</option>
                  <option>Pengadministrasi Umum</option>
                   <option>Tenaga Administrasi</option>
                </select>
              </div>
            </div>
          </div>

       


          <!-- nip -->
           <div class="form-group row">
                  <label for="noSuratTugas" class="col-sm-6 col-form-label">NIP<span class="wajib"> *</span></label>
                  <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-list"></i></span>
                      <input type="text" class="form-control" placeholder="NIP " name="nip" id="nip" value="<?=$nip?>" required>
                    </div>
                  </div>
                </div>

          <!-- pangkat -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Jabatan<span class="wajib"> *</span></label>
            <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <select class="form-control" name="pangkat" id="pangkat" required>
                  <option value="<?echo $pangkat ?>"  selected><?echo $pangkat ?></option>
                  <option>-</option>
                  <option>Pengatur</option>
                  <option>Pengatur Tk.I</option>
                  <option>Penata Muda</option>
                  <option>Penata Muda Tk.I</option>
                  <option>Penata</option>
                  <option>Penata Tk.I</option>
                  <option>Pembina</option>
                  <option>Pembina Tk.I</option>
                  <option>Pembina Utama Muda</option>
                  <option>Pembina Utama Madya</option>
                  <option>Pembina Utama</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Golongan -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Golongan<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <select class="form-control" name="golongan" id="golongan" required>
                  <option value="<?echo $golongan ?>"  selected><?echo $golongan ?></option>
                  <option>-</option>
                  <option>II c</option>
                  <option>II d</option>
                  <option>III a</option>
                  <option>III b</option>
                  <option>III c</option>
                  <option>III d</option>
                  <option>IV a</option>
                  <option>IV b</option>
                  <option>IV c</option>
                  <option>IV d</option>
                  <option>IV e</option>
                </select>
              </div>
            </div>
          </div>
          
           <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Ketua Tim<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <select class="form-control" name="ketua" id="ketua" required>
                 
                  <option>-</option>
                  <?php
                  if($ketuatim == 0){
                                      echo "<option value='0' selected >Tidak</option>";
                  } 
                  else{
                      echo "<option value='1' selected >Ya</option>";
                  }
                  ?>
                       
                      
                  
                  <option value="1">Ya</option>
                  <option value="0">Tidak</option>
                </select>
              </div>
            </div>
          </div>
          
          <!--ppk-->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">PPK<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <select class="form-control" name="ppk" id="ppk" required>
                  <option value="" disabled selected>- PPK -</option>
                  <option>-</option>
                  <?php
                  if($ppk == 0){
                                      echo "<option value='0' selected >Tidak</option>";
                  } 
                  else{
                      echo "<option value='1' selected >Ya</option>";
                  }
                  ?>
                       
                      
                  
                  <option value="1">Ya</option>
                  <option value="0">Tidak</option>
                </select>
              </div>
            </div>
          </div>

          </div>

        <div class="box-footer">
         <button type="submit" value="submit"  class="btn btn-info"><i class="fa fa-print"></i> Save Document</button>
         <button type="reset"  value ="reset" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset Form</button>
       </div>
     </form>

   </div>





 </div>
</div>
<style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #ca2e2e;
    border: 1px solid #aaa;
    border-radius: 4px;
    box-sizing: border-box;
    display: inline-block;
    margin-left: 5px;
    margin-top: 5px;
    padding: 0;
    padding-left: 20px;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    white-space: nowrap;
    font-size: 15px;
  }
</style>

<!-- /.row -->
</section>
<!-- /.content -->
