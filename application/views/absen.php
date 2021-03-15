    <div class="main" style="margin-top: -100px; margin-bottom: -100px;">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?=base_url()?>index.php/absen/submit">
                        <center>
                            <img src="<?=base_url()?>/dist/images/logo.png" class="logo">
                            <br><br>
                        </center>
                        <h2 class="form-title">
                            Absen Harian 
                            <br>Personel Pushansiber
                        </h2>
                     
                        <div class="alert alert-info alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fas fa-info"></i> Perhatian !</h5>
                          Dengan hormat, kepada seluruh personel agar mengisi formulir pada pukul 04.00 - 07.00 WIB setiap harinya.<br>
                        Note : Kolom alamat hanya diisi jika ada perubahan alamat dr sebelumnya
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="name" placeholder="Nama Lengkap" required />
                        </div>
                        <div class="form-group">
                            <select name="pangkat" id="pangkat" class="form-input" required>
                                <option value="" class="placeholder">--- Pangkat ---</option>
                                <option value="Brigjen TNI">Brigjen TNI</option>
                                <option value="Kolonel">Kolonel</option>
                                <option value="Letkol">Letkol</option>
                                <option value="Mayor">Mayor</option>
                                <option value="Kapten">Kapten</option>
                                <option value="Letda">Letda</option>
                                <option value="Pelda">Pelda</option>
                                <option value="Serka">Serka</option>
                                <option value="Pembina IV/a">Pembina IV/a</option>
                                <option value="Penata Tk. I III/d">Penata Tk. I III/d</option>
                                <option value="Penata III/c">Penata III/c</option>
                                <option value="Penada Tk. I III/b">Penata Muda Tk. I III/b</option>
                                <option value="Penata Muda III/a">Penata Muda III/a</option>
                                <option value="Pengatur II/c">Pengatur II/c</option>
                                <option value="SDM">SDM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="keterangan" id="keterangan" class="form-input" required>
                                <option value ="" class="placeholder">--- Keterangan ---</option>
                                <option value="Dinas Kantor">Dinas Kantor</option>
                                <option value="Dinas Rumah">Dinas Rumah</option>
                                <option value="Dinas Dalam/Piket">Dinas Dalam/Piket</option>
                                <option value="Dinas Luar">Dinas Luar</option>
                                <option value="Pendidikan DN">Dik DN</option>
                                <option value="Pendidikan LN">Dik LN</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                        </div>
                        
                        <div class="form-group" id="tambahan" style="display:none" >
                            <input type="text" class="form-input" name="others" id="others" placeholder="Keterangan Lainnya">
                        </div>

                        <div class="form-group">
                            <select name="kondisi" id="kondisi" class="form-input" required>
                                <option value="" class="placeholder">--- Kondisi ---</option>
                                <option value="Aman/Sehat">Aman/Sehat</option>
                                <option value="Sakit">Sakit</option>
                            </select>
                        </div>

                        <div class="form-group" id="ketsakit" style="display:none" >
                            <input type="text" class="form-input" name="ketsakit" id="ketsakit" placeholder="Keterangan Sakit">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="alamat" id="alamat" placeholder="Alamat WFH (Hanya diisi jika ada perubahan alamat)">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-block btn-primary btn-lg" value="SIMPAN" /><br>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function(){

            $('#keterangan').on('change',function(){
                let elm = $('#keterangan').val();
                if(elm=="Lainnya"){
                    $('#tambahan').fadeIn();
                }else{
                    $('#tambahan').fadeOut();
                }
            });

            $('#kondisi').on('change',function(){
                let elm = $('#kondisi').val();
                if(elm=="Sakit"){
                    $('#ketsakit').fadeIn();
                }else{
                    $('#ketsakit').fadeOut();
                }
            });

           
            setInterval(function(){
                let url = "<?=base_url()?>index.php/absen/reload";
                $.get(url,function(data){
                    let val = JSON.parse(data);
                    //console.log(val.status);    
                    if(val.status=='timeout'){
                        window.location.reload();
                    }
                });
                
            },1000); 

            
            let datapersonil;
            var url = "<?=base_url()?>index.php/absen/getpersonil"
            // $.get(url,function(data){
            //     datapersonil = JSON.parse(data);
                
            // })

            $("#name").autocomplete({
                source:url,
                minLength: 3,
            });

        });
    </script>