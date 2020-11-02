    <div class="main" style="margin-top: -100px; margin-bottom: -100px;">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?=base_url()?>absen/submit">
                        <center>
                            <img src="<?=base_url()?>/dist/images/logo.png" class="logo">
                            <br><br>
                        </center>
                        <h2 class="form-title">Absen Harian <br>Personel Pushansiber</h2>
                        <div class="callout callout-info" >
                        <p style="color:white">Dengan hormat, kepada seluruh personel agar mengisi formulir pada pukul 04.00 - 06.30 WIB setiap harinya.<br>
                        Note : Kolom alamat hanya diisi jika ada perubahan alamat dr sebelumnya</p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="name" placeholder="Nama Lengkap" required />
                        </div>
                        <div class="form-group">
                            <select name="pangkat" id="pangkat" class="form-input" required>
                                <option class="placeholder">--- Pangkat ---</option>
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
                                <option value="Penada III/a">Penata Muda III/a</option>
                                <option value="Pengatur II/c">Pengatur II/c</option>
                                <option value="SDM">SDM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="keterangan" id="keterangan" class="form-input" required>
                                <option class="placeholder">--- Keterangan ---</option>
                                <option value="Dinas Kantor">Dinas Kantor</option>
                                <option value="Dinas Rumah">Dinas Rumah</option>
                                <option value="Dinas Dalam/Piket">Dinas Dalam/Piket</option>
                                <option value="Dinas Luar">Dinas Luar</option>
                                <option value="Dinas DN">Dinas DN</option>
                                <option value="Dinas LN">Dinas LN</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <select name="kondisi" id="kondisi" class="form-input" required>
                                <option class="placeholder">--- Kondisi ---</option>
                                <option value="Aman/Sehat">Aman/Sehat</option>
                                <option value="Sakit">Sakit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="alamat" id="alamat" placeholder="Alamat WFH (Hanya diisi jika ada perubahan alamat)">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Kirim" /><br>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>