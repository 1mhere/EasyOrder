<form action=""  method="get">
<div class="row">
    <?php foreach($foods as $food){ 
      ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div style="background-color: #F22C1F; border-color: #FF473A" class="thumbnail">
                            <img src="<?php echo base_url()."assets/";?>image/<?php echo $food['gambar']?>" alt="" onclick="Nasi();"  >
                            <div class="caption">
                                <h4 style="color:#FFF" class="pull-right">Rp. <?php echo $food['harga']?></h4>
                                <h4 ><a style="color : #E1F438;"href="#"><?php echo $food['nama']?></a>
                                </h4>
                                <p style="color:#FFF" ><?php echo $food['keterangan']?></p>
                                <p style="color:#FFF" >Waktu saji : <?php echo $food['time']?></p> 
                                <input type="hidden" value="<?php echo $food['id']?>" id="id"/> 
                                 <input type="hidden" value="<?php echo $food['nama']?>" id="nama"/> 
                                 <input type="hidden" value="<?php echo $food['harga']?>" id="price"/>
                                 <input style="width:20%" type="number" name="porsi" min="0" id="qty"/> <b style="text-align:center; color:#FFF;">Porsi</b>
                                
                                 <button  style="background-color: #FFF; border-color: #FF473A; align-content: right; "class="btn btn-default btn-sm" type="button" class="enjoy-css"  data-toggle="modal" data-target= "#modalOrder" aria-haspopup="true" aria-expanded="false" onclick="addCart();" ><b style="color:#F22C1F">Add To Cart</b> </button>
                            </div>
                        </div>
                    </div>
      <?php } ?>
  </div>
          <table border="1">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Qty</th>
         <th>harga</th>
      </tr>
      <tbody class="isi">
      
        <?php
        $no = 0;
        foreach ($this->cart->contents() as $key):
        ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $key['nama'];?></td>
          <td><?php echo $key['qty'];?></td>
          <td><?php echo $key['price'];?></td>
        </tr>
        <?php
        $no++;
        endforeach;
        ?>
      
      </tbody>
    </table>        
  
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/jQuery/jQuery-2.1.4.min.js');?>"></script>

      <script type="text/javascript">

        function addCart(){
          var id = $("#id").val();
          var nama = $("#nama").val();
          var qty = $("#qty").val();
           var price = $("#price").val();

          $.post("<?php echo site_url('web/addCart'); ?>", {id:id, namaMakanan: nama, qty: qty, price: price}, function(result){
                if(result){
                  $(".isi").append("<tr><td>"+id+"</td><td>"+nama+"</td><td>"+qty+"</td></tr>"+qty+"</td></tr>");
                  alert("Berhasil!");
                  id++;
                }else{
                  alert("Sorry!");
                }
            }).error(function(err){

            }); 
        }
        

      </script>


    <div class="modal fade bs-example-modal-lg" data-backdrop="" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="labelKategori">
                              
                <div class="modal-dialog" style="margin-top: 100px;" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4  class="modal-title" id="labelKategori">Pesan Makanan</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert" id="notif" >Apakah anda yakin?</div>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-default" data-dismiss="modal" onmouseover="tidak();">Tidak</button>
                      <button type="submit" style="background-color: #F22C1F; border-color: #FF473A;" class="btn btn-primary" name="btnSubmit" onmouseover="ya();">Ya</button>
                    </div>
                  </div>
                </div>
     </div>
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
                                    
                                       <tr><td><b>Makanan</b></td><td><b>Porsi</b></td><td><b>Status</b></td></tr>
                                       <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                  <span class="sr-only">100% Complete</span>
                                                </div>
                                              </div></td></tr>
                                       <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                  <span class="sr-only">80% Complete</span>
                                                </div>
                                              </div></td></tr>
                                       <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                  <span class="sr-only">0% Complete</span>
                                                </div>
                                              </div></td></tr>
                                       <tr><td>Makanan</td><td>Porsi</td><td><div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                  <span class="sr-only">70% Complete</span>
                                                </div>
                                              </div></td></tr>

                                    </table>
                                  </div>
                             </ul>
                                    <span class="label label-default">Default</span>
                                    <span class="label label-primary">Primary</span>
                                    <span class="label label-success">Success</span>
                                    <span class="label label-info">Info</span>
                                    <span class="label label-warning">Warning</span>
                                    <span class="label label-danger">Danger</span>
                        </div>
                      </div>
                    </div>
                     
                  </div>
                </div>
     </div>
  <!-- <div class="alert alert-success" role="alert" id="notif">Makanan Berhasil dipesan!</div> -->

</form>

                
                  <!-- <div class="alert alert-success" role="alert" id="notif">Makanan Berhasil dipesan!</div> -->