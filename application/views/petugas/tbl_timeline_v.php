<section class="content-header">
  <h1 small class="label label-primary">
    Data Timeline &nbsp <i class="fa fa-server"></i>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Petugas</a></li>
    <li><a href="#">Timeline</a></li>
  </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="dt-center">Nomor Surat</th>
                  <th class="dt-center">Sarana</th>
                  <th class="dt-center">Tanggal Surat</th>
                  <th class="dt-center">Tanggal Timeline</th>
                  <th class="dt-center">Timeline</th>
                  <th class="dt-center">Status</th> 
                </tr>
                </thead>
                <tbody>
                <?php     
                 if(isset($timeline)){
                  foreach ($timeline->result() as $row){
                
                  $status='<small class="label label-danger"><i class="fa fa-exclamation-triangle"></i> TIMELINE</small>';
                 
                   echo "<tr>";
                   echo "<td class='dt-center'>".$row->no_surat."</td>";      
                   echo "<td class='dt-center'>".$row->sarana."</td>";
                   echo "<td class='dt-center'>".$row->tgl_surat."</td>";
                   echo "<td class='dt-center'>".$row->tanggal_timeline."</td>";
                   echo "<td class='dt-center'>".$row->timeline." Hari Tersisa</td>";
                   echo "<td class='dt-center'>".$status."</td>";
                  }
                  }else{
                   echo "no record found";
                  }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <style>
    th.dt-center, td.dt-center { text-align: center; }
  </style>