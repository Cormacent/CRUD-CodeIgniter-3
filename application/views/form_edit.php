<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Website CRUD</title>
</head>

<body>
  <div class="container">
    <h1>Ubah Produk</h1>
    <form method="post" action="<?php echo base_url('Welcome/editAction/') . $data_product->id ?>">
      <table class="table table-striped table-borderless">
        <tr>
          <td>nama_produk</td>
          <td><input type="text" name="nama_produk" value="<?php echo $data_product->nama_produk ?>" required></td>
        </tr>
        <tr>
          <td>keterangan</td>
          <td><textarea name="keterangan" required> <?php echo $data_product->keterangan ?></textarea></td>
        </tr>
        <tr>
          <td>harga</td>
          <td><input type="number" name="harga" value="<?php echo $data_product->harga ?>" required></td>
        </tr>
        <tr>
          <td>jumlah</td>
          <td><input type="number" name="jumlah" value="<?php echo $data_product->jumlah ?>" required></td>
        </tr>
      </table>
      <hr>
      <input type="submit" class="btn btn-success" value="Simpan">
      <a href="<?php echo base_url('Welcome/') ?>" class="btn btn-secondary pull-right" role="button">Batal</a>
    </form>
  </div>
</body>

</html>