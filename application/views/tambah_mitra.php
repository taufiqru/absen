<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <div class="status">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Alert!</h4>
        Success alert preview. This alert is dismissable.
      </div>
    </div> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mitra</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Mitra</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Perusahaan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" id="namaperusahaan" class="form-control" placeholder="Nama Perusahaan">
              </div>
              <div class="form-group">
                <label for="kemampuan_nyata">Kemampuan Nyata (Rp)</label>
                <input type="number" id="kemampuannyata" class="form-control" placeholder="Kemampuan Modal Perusahaan">
              </div>
              <div class="form-group">
                <label for="tenaga_ahli">Jumlah Tenaga Ahli</label>
                <input type="number" id="tenagaahli" class="form-control" placeholder="Tenaga Ahli Perusahaan">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Alamat Perusahaan </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="alamat_kantor">Alamat Kantor</label>
                <textarea id="alamatkantor" class="form-control" rows="4" placeholder="Alamat Kantor Perusahaan"></textarea>
              </div>
              <div class="form-group">
                <label for="status_kantor">Status Kepemilikan</label>
                <select id="statuskantor" class="form-control custom-select">
                  <option selected disabled>Pilih Salah Satu</option>
                  <option value="Aset Perusahaan">Aset Perusahaan</option>
                  <option value="Sewa">Sewa</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Data Direktur</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="alamat_kantor">Nama</label>
                <input type="text" id="namadirektur" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="status_kantor">Jabatan</label>
                <input type="text" id="jabatandirektur" class="form-control" placeholder="Jabatan">
              </div>
              <div class="form-group">
                <label for="status_kantor">Kontak</label>
                <input type="text" id="kontakdirektur" class="form-control" placeholder="Nomer Kontak">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Narahubung</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="namanarahubung" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="status_kantor">Jabatan</label>
                <input type="text" id="jabatannarahubung" class="form-control" placeholder="Jabatan">
              </div>
              <div class="form-group">
                <label for="status_kantor">Kontak</label>
                <input type="text" id="kontaknarahubung" class="form-control" placeholder="Nomer Kontak">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-danger ">Cancel</a>
          <a href="#" class="btn btn-warning " id="reset">Reset</a>
          <input type="submit" id="submit" value="Simpan" class="btn btn-success float-right">
        </div>
      </div>
      <br><br>
    </section>
    <!-- /.content -->
  </div>
  <br><br>
  <!-- /.content-wrapper -->
  <script>
    $(document).ready(function(){
      $('#submit').on('click',function(){
        var data = {
          namaperusahaan : $('#namaperusahaan').val(),
          kemampuannyata : $('#kemampuannyata').val(),
          tenagaahli : $('#tenagaahli').val(),
          namadirektur : $('#namadirektur').val(),
          jabatandirektur : $('#jabatandirektur').val(),
          kontakdirektur : $('#kontakdirektur').val(),
          namanarahubung : $('#namanarahubung').val(),
          jabatannarahubung : $('#jabatannarahubung').val(),
          kontaknarahubung : $('#kontaknarahubung').val(),
          alamatkantor : $('#alamatkantor').val(),
          statuskantor : $('#statuskantor').val(),
        };

        var url = "<?=base_url()?>mitra/insert";

        $.post(url,data,function(data,status){
          var obj = JSON.parse(data);
          console.log(obj);
          console.log(obj.msg);
          $.notify({message:obj.msg},{type:obj.status});
          if(obj.status=='success'){
            reset();
          }
        });

      });
      $('#reset').on('click',function(){
          reset();
        });
      function reset(){
          $('#namaperusahaan').val(''),
          $('#kemampuannyata').val(''),
          $('#tenagaahli').val(''),
          $('#namadirektur').val(''),
          $('#jabatandirektur').val(''),
          $('#kontakdirektur').val(''),
          $('#namanarahubung').val(''),
          $('#jabatannarahubung').val(''),
          $('#kontaknarahubung').val(''),
          $('#alamatkantor').val(''),
          $('#statuskantor option').prop('selected', function() {
              return this.defaultSelected;
          });     
      }

    });


  </script>