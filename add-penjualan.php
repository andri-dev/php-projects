<?php 
include("./template/header.php");
?>

<main>
<div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-3">
            <h3>Tambah Penjualan</h3>
            <?php include('utils/alert.php') ?>
          </div>
          <div class="col-12">
            <form action="routes/penjualan.php?add=true" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="no">Pelanggan</label>
                  <select
                    id="no"
                    class="form-control"
                    name="no"
                    required
                  >
                    <option value="">Pilih...</option>
                    <?php 
                        require_once('./config/db.php');
                        require_once('./controllers/Pelanggan.php');

                        $connect = connect();
                        $query = getAllPelanggan($connect);
                    
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
                      required
                    />
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
          </div>
        </div>
      </div>
</main>

<?php 
include("./template/footer.php");
?>
