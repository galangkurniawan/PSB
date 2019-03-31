1<div class="content-wrapper">
<div class="card mb-3"> 
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table News</div>
        <div class="card-body">
          <button type="submit" class="btn btn-primary" onclick="window.location.href='<?php echo base_url().'Admin/tambah_news' ?>'">
            <img src="<?php echo base_url().'assets_admin/add.png' ?>"> Add Berita</button>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr>
                  <!-- <th>&bnsp;</th>
                  <th>&bnsp;</th> -->
                  <th>No</th>
                  <th>tanggal</th>
                  <th>gambar</th>
                  <th>judul</th>
                  <th>isi</th>
                  <th>sumber</th>
                  <th>Action</th>
                </tr>
                <?php 
                $no = 1;
                foreach($user as $u){ 
                ?>
                <tr>
                  <!-- <th>&bnsp;</th>
                  <th>&bnsp;</th> -->
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->tanggal ?></td>
                  <td><img src="<?php echo base_url().'assets/img/' ?><?php echo $u->gambar ?>" width="40" height="40" class="img-responsive"></td>
                  <td><?php echo $u->judul ?></td>
                  <td><?php echo $u->isi ?></td>
                  <td><?php echo $u->sumber ?></td>
                  <td>
                      <a href="<?php echo base_url().'Admin/news_edit/'.$u->id ?>"> <img src="<?php echo base_url().'assets_admin/edit.png' ?>"> </a> | 

                      <a href="<?php echo base_url().'Admin/news_hapus/'.$u->id ?>"> <img src="<?php echo base_url().'assets_admin/delete.png' ?>"> </a>


                    <!-- <?php echo anchor('admin/news_edit/'.$u->id,'Edit'); ?> | 
                    <?php echo anchor('admin/news_hapus/'.$u->id,'Hapus'); ?> -->
                  </td>
                </tr>
                <?php } ?>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>