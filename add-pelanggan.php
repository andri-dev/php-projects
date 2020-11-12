<?php 
include("./template/header.php");
?>

<main>
<div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-3">
            <h3>Tambah Pelanggan</h3>
          </div>
          <div class="col-12">
            <form action="routes/pelanggan.php?add=true" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama">Nama Pelanggan</label>
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
                    <label for="alamat">Alamat</label>
                    <input
                        type="text"
                        name="alamat"
                        class="form-control"
                        maxlength="25"
                        id="alamat"
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
