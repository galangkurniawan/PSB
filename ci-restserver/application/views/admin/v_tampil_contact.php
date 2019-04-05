<div class="content-wrapper">
<div class="card mb-3"> 
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Contact </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr>
                  <!-- <th>&bnsp;</th>
                  <th>&bnsp;</th> -->
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>pesan</th>
                </tr>
                <?php 
                $no = 1;
                foreach($user as $u){ 
                ?>
                <tr>
                  <!-- <th>&bnsp;</th>
                  <th>&bnsp;</th> -->
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->email ?></td>
                  <td><?php echo $u->subjek ?></td>
                  <td><?php echo $u->pesan ?></td>
                  <!-- <td>
                        <?php echo anchor('admin/news_edit/'.$u->id,'Edit'); ?>
                                          <?php echo anchor('admin/news_hapus/'.$u->id,'Hapus'); ?>
                  </td> -->
                </tr>
                <?php } ?>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>