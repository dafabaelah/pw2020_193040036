<?php
$elektronik = query("SELECT * FROM elektronik");
?>

<table id="data" class="table table-hover table-bordered" style="width: 100%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Opsi</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama Barang Elektronik</th>
      <th scope="col">Nama Penemu</th>
      <th scope="col">Tahun Ditemukan</th>
      <th scope="col">Asal</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (empty($elektronik)) : ?>
      <td>
        <h3 style="text-align: center;">Data Tidak Ditemukan!!!</h3>
      </td>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($elektronik as $elektro) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td>
            <a href="index.php?page=ubah&id=<?= $elektro['id']; ?>"><button class="btn btn-success"><i class="fas fa-edit"></i> Ubah</button></a>
            <a href="hapus.php?page=hps&id=<?= $elektro['id']; ?>" onclick="return confirm('apakah anda yakin?')"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button></a>
          </td>
          <td><img width="200px" src="../../assets/image/<?= $elektro["gambar"]; ?>" /> </td>
          <td> <?= $elektro["nama_barang"]; ?> </td>
          <td> <?= $elektro["nama_penemu"]; ?> </td>
          <td> <?= $elektro["tahun_ditemukan"]; ?> </td>
          <td> <?= $elektro["asal"]; ?> </td>
          <td> <?= $elektro["deskripsi"]; ?> </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>