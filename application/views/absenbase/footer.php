
    <!-- JS -->
    <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>/dist/js/main.js"></script>
    <script src="<?=base_url();?>dist/js/upup.min.js"></script>
    <script type="text/javascript">
       UpUp.start({
        'cache-version' : 'v2',
        'content-url' : '<?=site_url($this->uri->segment(1))?>',
        'content' : 'Offline',
        'service-worker-url': '/upup.sw.min.js'
       });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>