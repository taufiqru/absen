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
              <pre id="data"></pre>
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
    
    Pace.track(function(){
      
      $('#data').html('Loading Data ...');
      $url= "<?=base_url();?>index.php/respon/absenropeg";
      $.get($url,function(data){
        $('#data').html(JSON.stringify(data,undefined, 2));
        
      },"json")
        .done(function(){
          //$('#data').html('selesai!');
        });
    });

  });
</script>
