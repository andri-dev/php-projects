<?php 
include("./template/header.php");
?>

<main>
<div class="container">
        <div class="row mb-5">
          <div class="col-12 mt-5 mb-3">
            <h3>Edit Pelanggan</h3>
          </div>
          <div class="col-12">
          <?php 
            require_once('./config/db.php');
            require_once('./controllers/Pelanggan.php');

            $connect = connect();
            $id = $_GET['id'];
    
            $query = getPelanggan($connect, $id);
            
            if(mysqli_num_rows($query) > 0 ) { 
              $data = mysqli_fetch_array($query); ?>

                <form action="routes/pelanggan.php?edit=true" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input
                            type="text"
                            class="form-control"
                            name="nama"
                            maxlength="25"
                            value="<?= $data['namapelanggan']; ?>"
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
                                min="0"
                                maxlength="25"
                                id="alamat"
                                value="<?= $data['alamat']; ?>"
                                required
                            />
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            <?php
                } else {
                    header("Location: pelanggan.php");
                } 
            ?>

          </div>
        </div>
      </div>
</main>

<?php 
include("./template/footer.php");
?>
