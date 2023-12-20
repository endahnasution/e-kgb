<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
      <img src="<?php echo base_url('assets/uploads/images/foto_profil/' . $userdata->photo); ?>" class="img-circle">
      </div>
      <div class="pull-left info">
        <p><?= $userdata->nama; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

 
   
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <!--  -->
      <?php
      if($userdata->substansi=="pemeriksaan"){
       ?>
       <!-- Data Sarana -->
       <li class="active"><a href="<?= base_url('petugas/Master/data_sarana') ?>"><i class="fa fa-database"></i> <span>Data Sarana</span></a></li>

       <li><a href="<?php echo base_url('petugas/surat_tugas/surat_tugas') ?>"><i class="fa fa-circle-o"></i>Surat Tugas</a></li>
       <!-- LHK Pem -->
       <li><a href="<?php echo base_url('petugas/lhk/List_lhk_c') ?>"><i class="fa fa-book"></i>LHK Pemeriksaan</a></li>
       <!-- TL dan CAPA -->
             <li class="active"><a href="<?= base_url('petugas/surat_peringatan/c_surat_peringatan') ?>"><i class="fa fa-history"></i> <span>Buat Tindak Lanjut </span></a></li>

      <!-- <li class="treeview" style="height: auto;">-->
      <!--  <a href="#">-->
      <!--    <i class="fa fa-share"></i> <span>Tindak Lanjut</span>-->
      <!--    <span class="pull-right-container">-->
      <!--      <i class="fa fa-angle-left pull-right"></i>-->
      <!--    </span>-->
      <!--  </a>-->
      <!--  <ul class="treeview-menu" style="display: none;">-->
      <!--    <li><a href="<?= base_url('petugas/surat_peringatan/c_surat_peringatan') ?>"><i class="fa fa-circle-o"></i>Buat Tindak Lanjut</a></li>-->
      <!--    <li><a href="<?= base_url('petugas/surat_capa') ?>"><i class="fa fa-circle-o"></i>Buat CAPA</a></li>-->
      <!--  </ul>-->
      <!--</li>-->

      <!-- Monitoring TL dan CAPA -->
      <!--<li class="active"><a href="<?= base_url('petugas/monitoring/data_monitoring') ?>"><i class="fa fa-history"></i> <span>Monitoring TL </span></a></li>-->
      <!--<li class="active"><a href="<?= base_url('petugas/monitoring/data_capa') ?>"><i class="fa fa-history"></i> <span>Monitoring CAPA</span></a></li>-->
       <?php
      }else if($userdata->substansi=="penindakan"){
        ?>
        <!-- Data Sarana -->
       <li class="active"><a href="<?= base_url('petugas/Master/data_sarana') ?>"><i class="fa fa-database"></i> <span>Data Sarana</span></a></li>
       <li><a href="<?php echo base_url('petugas/surat_tugas/surat_tugas/surat_tugas_penindakan') ?>"><i class="fa fa-circle-o"></i>Surat Tugas</a></li>
       <li><a href="<?php echo base_url('petugas/lhkPenindakan/List_lhk_c') ?>"><i class="fa fa-circle-o"></i>LHK Penindakan</a></li>
        <?php
      }

      else if($userdata->substansi=="pengujian"){
        ?>
        <!-- Data Sarana -->
        <li><a href="<?php echo base_url('petugas/surat_tugas/surat_tugas/surat_tugas_pengujian') ?>"><i class="fa fa-circle-o"></i>Surat Tugas</a></li>
        <li><a href="<?php echo base_url('petugas/lhkPengujian/List_lhk_c') ?>"><i class="fa fa-circle-o"></i>LHK Pengujian</a></li>
        <?php
      }

      else if($userdata->substansi=="infokom"){
        ?>
        <!-- Data Sarana -->
        <li><a href="<?php echo base_url('petugas/surat_tugas/surat_tugas/surat_tugas_infokom') ?>"><i class="fa fa-circle-o"></i>Surat Tugas</a></li>
        <li><a href="<?php echo base_url('petugas/lhkInfokom/List_lhk_c') ?>"><i class="fa fa-circle-o"></i>LHK Infokom</a></li>
       
        <?php
      }else{
        ?>
        <!-- <li><a href="<?php echo base_url('petugas/surat_tugas/surat_tugas/surat_tugas_tu') ?>"><i class="fa fa-circle-o"></i>Surat Tugas</a></li> -->
        <!-- <li><a href="<?php echo base_url('petugas/kgb/index/'.$userdata->idPegawai) ?>"><i class="fa fa-circle-o"></i>Informasi KGB</a></li> -->
         <li><a href="<?php echo base_url('petugas/kgb/list_kgb/'.$userdata->idPegawai) ?>"><i class="fa fa-circle-o"></i>List Pengajuan KGB</a></li>
        <?php
      }
      
      ?>

<!-- <li class="active"><a href="<?= base_url('petugas/kgb/index/'.$userdata->idPegawai) ?>"><i class="fa fa-dashboard"></i> <span>KENAIKAN GAJI BERKALA (KGB)</span></a></li> -->

      
      <!--  -->

      


     


      <!-- <li class="treeview" style="height: auto;">
        <a href="<?= base_url('petugas/mentoring/data_mentoring') ?>">
          <i class="fa fa-history"></i> <span>Monitoring TL & CAPA</span>
         
        </a>
        
      </li> -->

      

      <!-- sub 5 -->
      <!-- <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-history"></i> <span>UMPAN BALIK</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="<?= base_url('petugas/feedback') ?>"><i class="fa fa-circle-o"></i>Lihat Feedback</a></li>
          <li><a href="<?= base_url('petugas/umpan_balik') ?>"><i class="fa fa-circle-o"></i>Lihat Riwayat CAPA</a></li>

        </ul>
      </li> -->

      <!--  <li class="active"><a href="<?php echo base_url('petugas/eksporData') ?>"><i class="fa fa-download"></i> <span>Ekspor Data</span></a></li> -->

      <!--    <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-share"></i> <span>REPORT</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="#"><i class="fa fa-circle-o"></i>CAPA</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Anggaran</a></li>
 
        </ul>
      </li> -->


    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>