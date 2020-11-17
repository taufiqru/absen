    <div class="main" style="margin-top: -100px; margin-bottom: -100px;">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?=base_url()?>index.php/absen/submit_kapushansiber">
                        <center>
                            <img src="<?=base_url()?>/dist/images/logo.png" class="logo">
                            <br><br>
                        </center>
                        <h2 class="form-title">
                            Absen Harian 
                            <br>Kapushansiber
                        </h2>
                     
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="name" value="Sarwono" readonly />
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-input" id="pangkat" name="pangkat" value="Brigjen TNI" readonly>
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

           
           
    </script>