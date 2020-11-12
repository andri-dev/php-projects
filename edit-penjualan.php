<?php 
include("./template/header.php");
?>

<main>
<div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-3">
            <h3>Edit Penjualan</h3>
            <?php include('utils/alert.php') ?>
          </div>
          <div class="col-12">
            <form action="routes/penjualan.php?edit=true" method="post">
              <div class="form-row">
                <?php 
                    require_once('./config/db.php');
                    require_once('./controllers/Penjualan.php');
                    require_once('./controllers/Pelanggan.php');
                  
                    $connect    = connect();
                    $id         = $_GET['id'];
                    $no         = $_GET['no'];

                    $queryId    = getPenjualan($connect, $id);
                    $query      = getAllPelanggan($connect);

                    if(mysqli_num_rows($queryId) > 0 ) { 
                        $penjualan = mysqli_fetch_array($queryId); ?>

                <div class="form-group col-md-6">
                  <label for="no">Pelanggan</label>
                  <input type="hidden" name="id" value="<?= $id; ?>">
                  <select
                    id="no"
                    class="form-control"
                    name="no"
                    required
                  >
                    <option value="<?= $no ?>"><?= $no; ?></option>
                    <?php 
                        if(mysqli_num_rows($query) > 0 ) {
                            while($data = mysqli_fetch_array($query)){
                    ?>
                            <option value="<?= $data['nopelanggan']; ?>"><?= $data['nopelanggan']; ?> | <?= $data['namapelanggan']; ?></option>
                    <?php 
                            }
                        }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="tanggal">Tanggal Penjualan</label>
                  <div
                    class="input-group date"
                    data-provide="datepicker"
                    data-date-format="dd/mm/yyyy"
                  >
                    <input
                      type="text"
                      id="tanggal"
                      name="tanggal"
                      class="form-control"
                      placeholder="dd/mm/yyyy"
                      value="<?= $penjualan['tanggalpenjualan']; ?>"
                      required
                    />
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php
                } else {
                    header("Location: penjualan.php");
                } 
            ?>
          </div>
        </div>
      </div>
</main>

<?php 
include("./template/footer.php");
?>
