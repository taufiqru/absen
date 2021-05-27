$(document).ready(function(){
    loadCookies();
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
        let url = "index.php/absen/reload";
        $.get(url,function(data){
            let val = JSON.parse(data);
            if(val.status=='timeout'){
                window.location.reload();
            }
        });
        
    },1000); 

    
    let datapersonil;
    var a = "index.php/";
    var b = "absen/";
    var c = "getpersonil";
    var url = a+b+c;
    
    $("#name").autocomplete({
        source:url,
        minLength: 3,
    });

    var today = new Date();
    var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

    function setCookie(name,value){
        document.cookie=name+"="+escape(value)+";path=/;expires="+expiry.toGMTString();
    }

    $("signup-form").submit(function(e){
        e.preventDefault();
        storeValues();
        $("signup-form")[0].submit();
    });

    function storeValues(){
        setCookie("nama",$("#name").val());
        setCookie("pangkat",$("#pangkat").val());
    }

    // Original JavaScript code by Chirp Internet: chirpinternet.eu
    // Please acknowledge use of this code by including this header.

    function getCookie(name){
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
    }

    function loadCookies(){
        var nama,pangkat;
        if(nama=getCookie("nama")){$("#name").val(nama)};
        if(pangkat=getCookie("pangkat")){$("#pangkat").val(pangkat)};
    }

});