<?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>

<?php foreach($js_files as $file): ?> 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="opacity:1">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Respon Absensi Pushansiber</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content"  style="opacity:1">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        
        <div class="card-body">
          <?php echo $output; ?>
        </div>
        <!-- /.card-body -->
      </div>
       
      <!-- /.card -->
    </div>
  </div>
</section>
  
</div>




<!-- /.content-wrapper -->