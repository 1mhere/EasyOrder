<form action=""  method="get">
<div class="row">
    <?php foreach($foods as $food){ 
      ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div style="background-color: #F22C1F; border-color: #FF473A" class="thumbnail">
                            <img src="<?php echo base_url()."assets/";?>image/<?php echo $food['gambar']?>" alt="" onclick="Nasi();"  >
                            <div class="caption">
                              <?php 
                                $id=$food['id'];
                                $nama=$food['nama'];
                                $harga=$food['harga'];
                                $qty = 1;
                              ?>
                                <h4 style="color:#FFF" class="pull-right">Rp. <?php echo $harga?></h4>
                                <h4 ><a style="color : #E1F438;"href="#"><?php echo $nama?></a>
                                </h4>
                                <p style="color:#FFF" ><?php echo $food['keterangan']?></p>
                                <p style="color:#FFF" >Waktu saji : <?php echo $food['time']?></p> 
                                <center>
                                 <button  style="background-color: #FFF; border-color: #FF473A; align-content: right; "class="btn btn-default btn-sm" type="button" class="enjoy-css"  onclick="addCart(<?php echo $id.",'".$nama."',".$qty.",".$harga; ?>);" ><b style="color:#F22C1F">Add To Cart</b> </button>
                                 </center>
                            </div>
                        </div>
                    </div>
      <?php } ?>
  </div>
  

    <!-- jQuery -->
<script src="jquery-1.12.3.min.js" type="text/javascript"> </script>
      <script type="text/javascript">

        function addCart(id,nama,qty,price){
          $.post("<?php echo site_url('web/addCart'); ?>", {id:id, namaMakanan: nama, qty: qty, price: price}, function(result){
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

     <div class="modal fade bs-example-modal-lg" data-backdrop="" id="modalProg" tabindex="-1" role="dialog" aria-labelledby="labelKategori">
                              
                <div class="modal-dialog" style="margin-t
                op: 100px;" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4  class="modal-title" id="labelKategori">Pesan Makanan</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group">
                                 <div class="panel panel-default">
                                  <!-- Default panel contents -->
                                    <div style="background-color: #F22C1F; border-color: #FF473A;" class="panel-heading"><h4 style="color: #E1F438;">Summary</h4></div>
                                    
                                    <!-- Table -->
                                    <table class="table">
                                    
                                       <tr><td><b>No</b></td><td><b>Makanan</b></td><td><b>Porsi</b></td><td><b>Status</b></td></tr>
                                       <?php
                                        $no =0;
                                        $total=0;
                                        foreach ($this->cart->contents() as $key):
                                        ?>
                                        <tr>
                                          <td><?php echo $no;?></td>
                                          <td><?php echo $key['name'];?></td>
                                          <td><?php echo $key['qty'];?></td>
                                          <td><span class="label label-default">Proses</span></td>
                                        </tr>
                                        <?php
                                        $total+=$key['qty']*$key['price'];
                                        $no++;
                                        endforeach;
                                      ?>
                                     <!--   <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                                <span class="label label-warning">Pending</span>
                                              </div></td></tr>
                                       <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                              
                                              </div></td></tr>
                                       <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                                <span class="label label-success">Done</span>
                                              </div></td></tr>
                                       <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                                <span class="label label-default">Done</span>
                                              </div></td></tr> -->

                                    </table>
                                  </div>
                             </ul>
                        </div>
                      </div>
                    </div>
                     
                  </div>
                </div>
     </div>
  

</form>

                
                  <!-- <div class="alert alert-success" role="alert" id="notif">Makanan Berhasil dipesan!</div> -->