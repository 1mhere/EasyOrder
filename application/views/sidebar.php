  <div class="col-md-3">
                <p class="lead">Kategori</p>
                <div class="list-group">
                <?php
                	foreach($kategori as $kategori){

                ?>
                    <a href="<?php echo base_url()."index.php/web/kategori/".$kategori['kode_kategori'];?>" class="list-group-item"><?php echo $kategori['judul_kategori']?></a>
                 <? } ?>
                </div>
            </div>