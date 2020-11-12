<?php 
// Header
include("./template/header.php");
?>

<main>
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-1">
            <h3>Daftar Barang</h3>
            <?php include('utils/alert.php') ?>
          </div>
          <div class="col-12">
            <!-- Listing barang -->
            <div id="toolbar">
              <a class="btn btn-primary mr-1" href="add-barang.php"
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
                data-side-pagination="server"
                data-click-to-select="true"
                data-toolbar="#toolbar"
                data-buttons-prefix="btn"
                data-search="true"
                data-show-export="true"
                data-show-toggle="true"
              >
                <thead class="bg-dark text-white">
                  <tr>
                    <th data-sortable="true" data-field="id">Kode</th>
                    <th data-sortable="true" data-field="nama">Nama</th>
                    <th data-sortable="true" data-field="harga">Harga</th>
                    <th data-field="action"><i class="fa fa-cogs"></i></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  require_once('./config/db.php');
                  require_once('./controllers/Barang.php');

                  $connect = connect();
                  $query = getAllBarang($connect);
              
                  if(mysqli_num_rows($query) > 0 ) {
                      while($data = mysqli_fetch_array($query)){
              ?>
                <tr>
                    <th scope="row"><?= $data['kodebarang']; ?></th>
                    <td><?= $data['namabarang']; ?></td>
                    <td>Rp. <?= $data['hargabarang']; ?></td>
                    <td>
                      <a class="btn-sm btn-warning text-white mr-1 p-2" href="edit-barang.php?id=<?= $data['kodebarang']; ?>"
                        ><i class="fa fa-edit" aria-hidden="true"></i></a
                      >
                      <a class="btn-sm btn-danger text-white mr-1 p-2" onclick="confirmDeleteBarang(<?= $data['kodebarang']; ?>)" href="#"
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