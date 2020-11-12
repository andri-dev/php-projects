function confirmDeleteBarang(id) {
  if (confirm('Apakah kamu yakin menghapus barang ini?'))
    location.href = `./routes/barang.php?delete=true&id=${id}`;
}

function confirmDeletePelanggan(id) {
  if (confirm('Apakah kamu yakin menghapus pelanggan ini?'))
    location.href = `./routes/pelanggan.php?delete=true&id=${id}`;
}

function confirmDeletePenjualan(id) {
  if (confirm('Apakah kamu yakin menghapus penjualan ini?'))
    location.href = `./routes/penjualan.php?delete=true&id=${id}`;
}
