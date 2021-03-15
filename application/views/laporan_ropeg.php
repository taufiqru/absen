<link rel="stylesheet" href="<?=base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<script src="<?=base_url()?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="opacity:1">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Absensi Ropeg</h1>
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
            Laporan Absensi Ropeg
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
          
            <div class="col-md-12">
<!--               <?php
// echo 'Curl: ', function_exists('curl_version') ? 'Enabled' . "\xA" : 'Disabled' . "\xA";
?> -->


              <div id="jsGrid">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Foto</th>
                  <th>NIP</th>
                  <th>Jam</th>
                  <th>Status</th>
                  <th>Kondisi</th>
                  <th>Lokasi</th>
                </tr>
                </thead>
                <tbody>
               
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Foto</th>
                  <th>NIP</th>
                  <th>Jam</th>
                  <th>Status</th>
                  <th>Kondisi</th>
                  <th>Lokasi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          
            <pre id="data"></pre>
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
    

    Pace.track(function(){
      
      $('#data').html('Mengambil Data Absen Ropeg Tanggal <?=date("d-m-Y")?> ...');
      $url= "<?=base_url();?>index.php/respon/absenropeg";
      $.get($url,function(data){
        //$('#data').html(JSON.stringify(data,undefined, 2));
        //console.log(data);
        var table = $("#example2 tbody");
        table.empty();
        $.each(data, function (a, b) {
                table.append("<tr><td><img src='data:image/jpeg;base64,"+b.foto+"'  style='max-width:70px;max-height:100px'></td>"+
                    "<td>"+b.Nama+"<br>("+ b.NIP + ")</td>" +
                    "<td>" + b.Jam + "</td>" +
                    "<td>" + b.Status + "</td>" +
                    "<td>" + b.Kondisi + "</td>" +
                    "<td>" + b.Lokasi + "</td></tr>");
            });
      },"json")
        .done(function(){
          $("#example2").DataTable();
          $('#data').html('');
        });
        

    
    });
  });
</script>
