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
          <h4 class="modal-title" id="labelKategori">Pesan Makanan</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <!-- <p>Your ID: <input class="form-control" type="text" name="id"></p> -->
              <ul class="list-group">
               <div class="panel panel-default">
                <!-- Default panel contents -->
                  <div style="background-color: #F22C1F; border-color: #FF473A;" class="panel-heading"><h4 style="color: #E1F438;">Summary</h4></div>
                  <?php
                  $pulsa = 1000000;
                  @$jumlah_tempe = $_GET['porsi'];
                  @$jumlah_opor = $_GET['porsi'];
                  @$jumlah_Nasgor = $_GET['porsi'];
                  @$jumlah_Baso = $_GET['porsi'];
                  @$jumlah_Jamur = $_GET['porsi'];
                  @$jumlah_Kikil = $_GET['porsi'];
                   ?>
                  
                  
                  <!-- Table -->
                  <table class="table">
                  
                     <tr><td><b>Makanan</b></td><td><b>Porsi</b></td><td><b>Harga@(Rp)</b></td><td><b>Subtotal(Rp)</b></td></tr>
                     <?php 
                     if(isset($jumlah_Nasgor)&&$jumlah_Nasgor!=""&&$jumlah_Nasgor!=0)
                     {
                    echo "<tr><td>Nasi Goreng</td><td> $jumlah_Nasgor </td><td>10000</td><td>"; echo ($jumlah_Nasgor*10000) . "</td></tr>";
                       } ?>
                    <?php if(isset($jumlah_tempe)&&$jumlah_tempe!=""&&$jumlah_tempe!=0){ 
                    echo "<tr><td>Tempe</td><td> $jumlah_tempe </td><td>8000</td><td>"; echo ($jumlah_tempe*8000) . "</td></tr>";
                     } ?>
                    <?php if(isset($jumlah_opor)&&$jumlah_opor!=""&&$jumlah_opor!=0){ 
                    echo "<tr><td>Opor Ayam</td><td>$jumlah_opor</td><td>12000</td><td>"; echo ($jumlah_opor*12000) . " </td></tr>";
                     } ?>
                     <?php if(isset($jumlah_Baso)&&$jumlah_Baso!=""&&$jumlah_Baso!=0){ 
                    echo "<tr><td>Bakso Moo</td><td>$jumlah_Baso</td><td>30000</td><td>"; echo ($jumlah_Baso*30000) . " </td></tr>";
                     } ?>
                     <?php if(isset($jumlah_Jamur)&&$jumlah_Jamur!=""&&$jumlah_Jamur!=0){ 
                    echo "<tr><td>Oseng Jamur</td><td>$jumlah_Jamur</td><td>15000</td><td>"; echo ($jumlah_Jamur*15000) . " </td></tr>";
                     } ?>
                     <?php if(isset($jumlah_Kikil)&&$jumlah_Kikil!=""&&$jumlah_Kikil!=0){ 
                    echo "<tr><td>Kikil Cabe Ijo</td><td>$jumlah_Kikil</td><td>25000</td><td>"; echo ($jumlah_Kikil*25000) . " </td></tr>";
                     } ?>
                  </table>
                </div>
                </ul>
                <div class="alert alert-warning" role="alert">Total Bayar : <?php $total = ($jumlah_Nasgor*10000)+($jumlah_tempe*8000)+($jumlah_opor*12000)+($jumlah_Baso*30000)+($jumlah_Jamur*15000)+($jumlah_Kikil*25000); echo $total . " Rupiah" ;
                    require('moneyFormat.php');
                                echo "<br>";
                                $moneyFormat = new moneyFormat();

                                $angka = $total;

                                /* Format Terbilang*/
                                $terbilang1 = $moneyFormat->terbilang($angka);
                                echo "Terbilang &nbsp&nbsp&nbsp: ".$terbilang1." Rupiah";
                                ?>
                </div>
                <div class="alert alert-info" role="alert">Saldo Anda(Rp)  &nbsp: <?php echo $pulsa - $total;  
                            echo "<br>";
                            $moneyFormat = new moneyFormat();

                            $angka = $pulsa - $total;

                            /* Format Terbilang*/
                            $terbilang2 = $moneyFormat->terbilang($angka);
                            echo "Terbilang &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: ".$terbilang2." Rupiah";
                            ?></div>
                
            </div>
          </div>
        </div>
        <!-- script js-->




<script>
function Nasi(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Nasi Goreng Lengkap dengan potongan sosis dan sayuran : Harga per porsi adalah 10000 rupiah", "Indonesian Female");
}
function Opor(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Opor ayam dengan rasa asli Indonesia : Harga per porsi adalah 12000 rupiah","Indonesian Female");
}
function Tempe(){
  responsiveVoice.cancel();
  responsiveVoice.speak("8 Deretan Tempe goreng garing renyah : Harga per porsi adalah 8000 rupiah","Indonesian Female");
}
function Baso(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Bakso Mu  : Bakso dari daging sapi kualitas terbaik dari Australia : Harga per porsi adalah 30000 rupiah","Indonesian Female");
}
function Jamur(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Oseng Jamur : terbuat dari jamur segar pilihan petani indonesia : Harga per porsi adalah 15000 rupiah","Indonesian Female");
}
function Kikil(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Kikil Cabe Ijo : Kikil kulit sapi Australia dengan cabai pilihan : Harga per porsi adalah 25000 rupiah","Indonesian Female")
}
function addtocart(){
  responsiveVoice.cancel();
  responsiveVoice.speak("Apakah anda yakin ?","Indonesian Female");
}
function ya(){
  responsiveVoice.speak("Ya", "Indonesian Female");
}
function tidak(){
  responsiveVoice.speak("Tidak","Indonesian Female");
}
function hasil(){
  var nasgor = '<?php 
   if(isset($jumlah_Nasgor)&&$jumlah_Nasgor!=""){
    echo " Anda Memesan Nasi Goreng sejumlah :".$jumlah_Nasgor."porsi : dengan harga per porsinya 10000 Rupiah, total keseluruhan adalah".$jumlah_Nasgor*10000 . "rupiah : ";
        } else echo "" ?>';
 var tempe = ' <?php if(isset($jumlah_tempe)&&$jumlah_tempe!=""){ 
          echo " Anda Memesan Tempe sejumlah :".$jumlah_tempe."porsi  : dengan harga per porsinya 8000 Rupiah, total keseluruhan adalah".$jumlah_tempe*8000 . "rupiah : " ;
        } else echo "" ?>';
 var opor = '<?php if(isset($jumlah_opor)&&$jumlah_opor!=""){ 
          echo " Anda Memesan Opor Ayam sejumlah :".$jumlah_opor."porsi : dengan harga per porsinya 12000 Rupiah, total keseluruhan adalah".$jumlah_opor*12000 . "rupiah : ";
        } else echo "" ?>';
 var baso = '<?php if(isset($jumlah_Baso)&&$jumlah_Baso!=""){ 
          echo " Anda Memesan Bakso Mu sejumlah :".$jumlah_Baso."porsi : dengan harga per porsinya 30000 Rupiah, total keseluruhan adalah".$jumlah_Baso*30000 . "rupiah : ";
        } else echo "" ?>';
 var jamur =  '<?php if(isset($jumlah_Jamur)&&$jumlah_Jamur!=""){ 
          echo " Anda Memesan Oseng Jamur sejumlah :".$jumlah_Jamur."porsi  : dengan harga per porsinya 15000 Rupiah, total keseluruhan adalah".$jumlah_Jamur*15000 . "rupiah : " ;
        } else echo "" ?>';
 var kikil = '<?php if(isset($jumlah_Kikil)&&$jumlah_Kikil!=""){ 
          echo " Anda Memesan Kikil Cabe Ijo sejumlah :".$jumlah_Kikil."porsi : dengan harga per porsinya 25000 Rupiah, total keseluruhan adalah".$jumlah_opor*25000 . "rupiah : ";
        } else echo "" ?>';
 var hasil = '<?php if ($total!=0)echo "Jadi Total keseluruhan pemesanan Anda adalah ".$terbilang1 . "Rupiah : "; ?>';
 var saldo = '<?php echo "Sisa saldo anda adalah".$terbilang2 . "Rupiah"; ?>';
  responsiveVoice.cancel();
  responsiveVoice.speak(nasgor + tempe + opor + baso + jamur + kikil + hasil + saldo, "Indonesian Female" );
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
            <button style="background-color: #F22C1F; border-color: #FF473A color : #E1F438;"type="button" class="btn btn-primary"  data-dismiss="modal" data-target= "#notif" ?>" >Order</button>
          </form>
        </div>
      </div>
    </div>
</div>
</html>
