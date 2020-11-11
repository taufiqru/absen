    <div class="main" style="margin-top: -100px; margin-bottom: -100px;">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                <center>
                    <img src="<?=base_url()?>/dist/images/logo.png" class="logo">
                    <br><br>
                </center>
                <h2 class="form-title">
                    Absen Harian 
                    <br>Personel Pushansiber
                </h2>
             
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5>
                  <i class="icon fas fa-info"></i> 
                  Perhatian !</h5>
                  Batas waktu pengisian absensi harian telah habis, silahkan mengisi formulir pada pukul 04.00 - 07.00 WIB.<br>
                </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
      setInterval(function(){
                let url = "<?=base_url()?>index.php/absen/reload";
                $.get(url,function(data){
                    let val = JSON.parse(data);
                    //console.log(val.status);    
                    if(val.status=='ok'){
                        window.location.reload();
                    }
                });
                
            },1000); 
    </script>