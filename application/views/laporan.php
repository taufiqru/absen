<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="opacity:1">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Absensi</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content"  style="opacity:1">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-users"></i>
            Laporan Absensi
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
          
            <div class="col-md-12">
              <?php 
              function hitung($data,$keterangan){
                $c=0;
                $val=array();
                foreach($data as $row){
                  if($row->keterangan == $keterangan){
                    $val[$c] =  $row->pangkat.' '.$row->nama;
                    $c++;
                  }
                }
                return $val;
              }

              function hitungLainnya($data){
                $c=0;
                $val=array();
                foreach($data as $row){
                  if($row->keterangan == "Dinas Dalam/Piket" or $row->keterangan == "Dinas Kantor" or $row->keterangan == "Dinas Rumah" or $row->keterangan == "Dinas Luar" or $row->keterangan == "Dik DN" or $row->keterangan == "Dik LN" ){
                    
                  }else{
                    $val[$c] =  $row->pangkat.' '.$row->nama.' ('.$row->keterangan.')';
                    $c++;
                  }
                }
                return $val;
              }

              function cetak($val){
                echo "<ol>";
                for($i=0;$i<count($val);$i++){
                  echo '<li>'.$val[$i].'</li>';
                }
                echo "</ol>";
              }

              echo "<b>Total yang mengisi Absen : ".count($query)." Orang</b>";
              echo "<br>";
              $val = hitung($query,'Dinas Dalam/Piket');
              echo "<b>Dinas Dalam/Piket : ".count($val)." Orang </b><br>";
              cetak($val);

              $val = hitung($query,'Dinas Kantor');
              echo "<b>Dinas Kantor : ".count($val)." Orang </b><br>";
              cetak($val);

              $val = hitung($query,'Dinas Luar');
              echo "<b>Dinas Luar : ".count($val)." Orang </b><br>";
              cetak($val);

              $val = hitung($query,'Dik DN');
              echo "<b>Dik DN : ".count($val)." Orang </b><br>";
              cetak($val);

              $val = hitung($query,'Dik LN');
              echo "<b>Dik LN : ".count($val)." Orang </b><br>";
              cetak($val);

              $val = hitungLainnya($query);
              echo "<b>Lainnya : ".count($val)." Orang </b><br>";
              cetak($val);

              $val = hitung($query,'Dinas Rumah');
              echo "<b>Dinas Rumah : ".count($val)." Orang </b><br>";
              cetak($val);

              
              

              ?>
            </div>
            
          </div>
        </div>
        <!-- /.card-body -->
      </div>
       
      <!-- /.card -->
    </div>
  </div>
</section>
  
</div>
<script>
  $(document).ready(function(){
    
  });
</script>
