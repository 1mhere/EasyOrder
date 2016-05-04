<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1nspire | Easy Order</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/css/shop-homepage.css");?>" rel="stylesheet">
    
    <link href="<?php echo base_url("assets/css/font-awesome.min.css");?>" rel="stylesheet"type="text/css" media="all" >
     <link href="<?php echo base_url("assets/css/style.css");?>" rel="stylesheet"type="text/css" media="all" >
    <script src="http://code.responsivevoice.org/responsivevoice.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='https://drive.google.com/open?id=0B0Yf4HLqmZAMdkh0STF4MWl0VXM' rel='icon' type='image/png'/>
</head>

<body>

    <!-- Navigation -->
    <nav style="background-color: #F22C1F; border-color: #FF473A" class="bg navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">1nspire</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a href="
                http://localhost:1717/easyorder/" style="color : #E1F438; " class="navbar-brand" >Easy Order</a>
                <a href="<?= site_url('admin');?>" class="navbar-brand" >Login as Admin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div style="margin-top:10px;text-align:right;">
          <a href="#" data-toggle="modal" data-target= "#modalProg" onclick="hasil();">
              <i  aria-haspopup="true" aria-expanded="false" style="color:#E1F438; font-size:30px;"  class="fa fa-spinner"></i>
             </a>&nbsp&nbsp&nbsp&nbsp
             <a href="#" data-toggle="modal" data-target= "#modalChart" onclick="hasil();">
              <i  aria-haspopup="true" aria-expanded="false" style="color:#E1F438; font-size:30px;"  class="fa fa-shopping-basket"></i>
             </a>
          </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  
    <!-- Page Content -->
    <div class="container">

        <div class="row">

          <!-- sidebar -->
          <?php echo $sidebar; ?>
          <!-- end of sidebar -->

            <div class="col-md-9">

                <div class="row carousel-holder">

               <!--  banner -->
               <?php echo $banner; ?>
               <!--  end of banner -->

                </div>

                <!-- main content -->
                <?php echo $content; ?>
                <!-- end of main content -->
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <?php echo $footer?>
        <!-- end of footer -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url("assets/js/jquery.js");?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
    

</body>

<!--pop up cart-->
  <div class="modal fade bs-example-modal-lg" data-backdrop="" id="modalChart" tabindex="-1" role="dialog" aria-labelledby="labealKategori">
    <div class="modal-dialog" style="margin-top: 100px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"  data-dismiss="modal" aria-label="Close" id="klos">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="labelKategori">EasyOrder</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <!-- <p>Your ID: <input class="form-control" type="text" name="id"></p> -->
              <ul class="list-group">
               <div class="panel panel-default">
                <!-- Default panel contents -->
                  <div style="background-color: #F22C1F; border-color: #FF473A;" class="panel-heading"><h4 style="color: #E1F438;">Summary</h4></div>
                  
                  <!-- Table -->
                  <table class="table">
                  
                     <tr><td><b>Makanan</b></td><td><b>Porsi</b></td><td><b>Harga@(Rp)</b></td><td><b>Subtotal(Rp)</b></td></tr>
                      <?php
                        $no = 0;
                        $total=0;
                        foreach ($this->cart->contents() as $key):
                        ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $key['name'];?></td>
                          <td><?php echo $key['qty'];?></td>
                          <td><?php echo $key['qty']*$key['price'];?></td>
                        </tr>
                        <?php
                        $total+=$key['qty']*$key['price'];
                        $no++;
                        endforeach;
                      ?>
                  </table>
                </div>
                </ul>
                <div class="alert alert-warning" role="alert">Total Bayar : <?php echo $total . " Rupiah" ;
                    require('moneyFormat.php');
                                echo "<br>";
                                $moneyFormat = new moneyFormat();

                                $angka = $total;

                                /* Format Terbilang*/
                                $terbilang1 = $moneyFormat->terbilang($angka);
                                echo "Terbilang &nbsp&nbsp&nbsp: ".$terbilang1." Rupiah";
                                ?> 
                </div>
                <br> Nomor Meja : <input type="number" name="meja">
            </div>
          </div>
        </div>
        <!-- script js-->




<script>
function ya(){
  responsiveVoice.speak("Ya", "Indonesian Female");
}
function tidak(){
  responsiveVoice.speak("Tidak","Indonesian Female");
}
function hasil(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Berikut Summary Transaksi Anda. <?php echo "Total Tagihan Anda adalah ".$terbilang1." Rupiah"?>. Silahkan Masukkan Nomor meja Anda ", "Indonesian Female" );
}
function hearit(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Just Hear it, Anda tidak perlu membacanya , dengarkan saja mesin membacakannya untuk anda", "Indonesian Female");
}
function clickit(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Just Click it, Tidak perlu menulis ataupun mengatakan apapun yang ingin anda pesan, cukup dengan klik di pilihan anda","Indonesian Female");
} 
function close(){
  responsiveVoice.cancel();
}
$('#klos').on('click', function(){
  responsiveVoice.cancel();
})
</script>
        <div class="modal-footer">
          <form action="homepage.php">
            <button type="submit" data-dismiss="modal" class="btn btn-default">CANCEL</button>
            <button style="background-color: #F22C1F; border-color: #FF473A color : #E1F438;"type="button" class="btn btn-primary"  data-dismiss="modal" data-target= "#notif" onclick="checkout();">Order</button>
          </form>
        </div>
      </div>

       <script type="text/javascript">

        function checkout(meja){
          $.post("<?php echo site_url('web/checkout'); ?>", {meja:meja}, function(result){
                if(result){
                  // $(".isi").append("<tr><td>"+id+"</td><td>"+nama+"</td><td>"+qty+"</td><td>"+qty*price+"</td></tr>");
                  alert("Berhasil!");
                  id++;
                }else{
                  alert("Sorry!");
                }
            }).error(function(err){
                alert(err);
            }); 
        }
        

      </script>

    </div>
</div>
</html>
