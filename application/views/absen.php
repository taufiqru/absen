<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pushansiber</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url()?>/dist/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="<?=base_url()?>/dist/images/favicon.ico">
    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url()?>/dist/css/style.css">
</head>

<body>

    <div class="main" style="margin-top: -100px; margin-bottom: -100px;">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="config/kirim.php">
                        <center>
                            <img src="<?=base_url()?>/dist/images/logo.png" class="logo">
                        </center>
                        <h2 class="form-title">Absen Harian Pushansiber</h2>
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
                                <option value="Penada Tk. I III/b">Penada Tk. I III/b</option>
                                <option value="Penada III/a">Penada III/a</option>
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
                            <input type="text" class="form-input" name="alamat_wfh" id="alamat" placeholder="Alamat WFH (Hanya diisi jika ada perubahan alamat)">
                        </div>
                        <div class="form-group">
                            <input type="button" name="submit" id="submit" class="form-submit" value="Kirim" /><br>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>/dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#submit').on('click',function(){
                var data = {
                    nama : $('#name').val(),
                    pangkat : $('#pangkat').val(),
                    keterangan : $('#keterangan').val(),
                    kondisi : $('#kondisi').val(),
                    alamat : $('#alamat').val()
                }

                var url = "<?=base_url()?>/absen/submit";
                $.post(url,data,function(status,data){
                    
                });


            });
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>