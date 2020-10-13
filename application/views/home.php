<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Website CRUD</title>
</head>

<body>
  <div class="container">

    <h1>Data Produk</h1>
    <table class="table table-striped table-borderless">
      <thead class="thead-dark">
        <tr>
          <th>nama_produk</th>
          <th>keterangan</th>
          <th>harga</th>
          <th>jumlah</th>
          <th colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 0;
        foreach ($data_produk as $row) {
          $count = $count + 1;
        

        // cara 1
        
        // echo "<tr>";
        // echo "<td>" . $row->nama_produk . "</td>";
        // echo "<td>" . $row->keterangan . "</td>";
        // echo "<td>" . $row->harga . "</td>";
        // echo "<td>" . $row->jumlah . "</td>";
        // echo "<td><a class='btn btn-outline-secondary' href='form_ubah.php?id=" . $row->id . "'><i class='fa fa-edit'></i></a> <a class='btn btn-outline-danger' href='proses_hapus.php?id=" . $row->id . "'><i class='fa fa-trash danger'></i></a></td>";
        // echo "</tr>";
        // }
        ?>

        <!-- caradua -->
        <tr>
          <td><?php echo $row->nama_produk ?> </td>
          <td><?php echo $row->keterangan ?> </td>
          <td><?php echo $row->harga ?> </td>
          <td><?php echo $row->jumlah ?> </td>
          <td>
            <a class='btn btn-outline-secondary' href="<?php echo base_url('Welcome/formEdit') ?>"><i class='fa fa-edit'></i></a>
            <a class='btn btn-outline-danger' href=""><i class='fa fa-trash danger'></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <br><br>
    <div class=" mr-3">
      <button onclick="document.location.href='<?php echo base_url('Welcome/formInput') ?>'" class="btn btn-dark pull-right">Tambah Data</button>
    </div>
  </div>
</body>

</html>