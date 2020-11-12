<?php 
// Header
include("./template/header.php");
?>

<main>
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-1">
            <h3>Daftar Penjualan</h3>
            <?php include('utils/alert.php') ?>
          </div>
          <div class="col-12">
            <!-- Listing barang -->
            <div id="toolbar">
              <a class="btn btn-primary mr-1" href="add-penjualan.php"
                ><i class="fa fa-plus"></i> Tambah</a
              >
            </div>

            <div class="table-responsive">
              <table
                class="table table-hover rounded text-nowrap"
                data-toggle="table"
                data-pagination="true"
                data-show-columns="true"
                data-buttons-align="left"
                data-toolbar="#toolbar"
                data-buttons-prefix="btn"
                data-search="true"
                data-show-export="true"
                data-show-toggle="true"
              >
                <thead class="bg-dark text-white">
                  <tr>
                    <th data-sortable="true" data-field="faktur">Faktur</th>
                    <th data-sortable="true" data-field="no">No Pelanggan</th>
                    <th data-sortable="true" data-field="tanggal">Tanggal Penjualan</th>
                    <th data-field="action"><i class="fa fa-cogs"></i></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  require_once('./config/db.php');
                  require_once('./controllers/Penjualan.php');

                  $connect = connect();
                  $query = getAllPenjualan($connect);
              
                  if(mysqli_num_rows($query) > 0 ) {
                      while($data = mysqli_fetch_array($query)){
              ?>
                <tr>
                    <th scope="row"><?= $data['faktur']; ?></th>
                    <td><?= $data['nopelanggan']; ?></td>
                    <td><?= $data['tanggalpenjualan']; ?></td>
                    <td>
                      <a class="btn-sm btn-warning text-white mr-1 p-2" href="edit-penjualan.php?id=<?= $data['faktur']; ?>&no=<?= $data['nopelanggan']; ?>"
                        ><i class="fa fa-edit" aria-hidden="true"></i></a
                      >
                      <a class="btn-sm btn-danger text-white mr-1 p-2" onclick="confirmDeletePenjualan(<?= $data['faktur']; ?>)" href="#"
                        ><i class="fa fa-trash"></i></a
                      >
                    </td>
                  </tr>
              <?php 
                      }
                  }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</main>

<?php 
// Foooter
include("./template/footer.php");
?>