<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="opacity:1">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan</h1>
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
            <i class="fas fa-cogs"></i>
            Pembatasan Waktu Absen
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              Status Pembatasan Waktu Absen :
            </div>
            <div class="col-md-3">
              <span id="status">
                <button id="on" class="btn btn-success" style="display:none">On</button>
                <button id="off" class="btn btn-danger" style="display:none">Off</button>
              </span>  
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
     $('#off').hide();
     $('#on').hide();

    let url = "<?=base_url()?>index.php/absen/getstatustimer"
    $.get(url,function(data){
      data = JSON.parse(data);
      console.log(data.status);
      if(data.status=="On"){
        $('#on').show();
      }else{
        $('#off').show();
      }
    });

    $('#on').on('click',function(){
      update('off');
      $('#off').show();
     $('#on').hide();      
    });

    $('#off').on('click',function(){
      update('on');
      $('#on').show();
     $('#off').hide();      
    });

    function update(status){
      let url = "<?=base_url()?>index.php/absen/updatestatustimer";
      let data = {'status' : status};
      let res;
      $.post(url,data)
        .done(function(data){
          console.log(data);
          if(status=="on"){
            res="Dihidupkan";
            $.notify({message:"Pembatasan Waktu Absen "+res},{type:"success"});
          }else{
            res="Dimatikan";
            $.notify({message:"Pembatasan Waktu Absen "+res},{type:"danger"});
          }
          
        });
    }

  });
</script>
