<?php 
include("./template/header.php");
?>

<main>
<div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-3">
            <h3>Tambah Barang</h3>
            <?php include('utils/alert.php') ?>
          </div>
          <div class="col-12">
            <form action="routes/barang.php?add=true" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama">Nama Barang</label>
                  <input
                    type="text"
                    class="form-control"
                    name="nama"
                    maxlength="25"
                    id="nama"
                    required
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="harga">Harga</label>
                    <input
                        type="number"
                        name="harga"
                        class="form-control"
                        min="0"
                        maxlength="25"
                        id="harga"
                        required
                    />
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
