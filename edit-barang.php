<?php 
include("./template/header.php");
?>

<main>
<div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-3">
            <h3>Edit Barang</h3>
            <?php include('utils/alert.php') ?>
          </div>
          <div class="col-12">
          <?php 
            require_once('./config/db.php');
            require_once('./controllers/Barang.php');

            $connect = connect();
            $id = $_GET['id'];
    
            $query = getBarang($connect, $id);
            
            if(mysqli_num_rows($query) > 0 ) { 
              $data = mysqli_fetch_array($query); ?>

                <form action="routes/barang.php?edit=true" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nama">Nama Barang</label>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input
                            type="text"
                            class="form-control"
                            name="nama"
                            maxlength="25"
                            value="<?= $data['namabarang']; ?>"
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
                                value="<?= $data['hargabarang']; ?>"
                                required
                            />
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            <?php
                } else {
                    header("Location: barang.php");
                } 
            ?>

          </div>
        </div>
      </div>
</main>

<?php 
include("./template/footer.php");
?>
