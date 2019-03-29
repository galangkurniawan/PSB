    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
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
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->tanggal ?></td>
                  <td><?php echo $u->gambar ?></td>
                  <td><?php echo $u->judul ?></td>
                  <td><?php echo $u->isi ?></td>
                  <td><?php echo $u->sumber ?></td>
                  <td>
                        <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                                          <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
                <?php } ?>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>