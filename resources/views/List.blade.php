<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Kegiatan</title>
  </head>
  <body>
    <table border="1 px solid">
      <thead>
        <tr>
          <th>No</th>
          <th>Jam Kegiatan</th>
          <th>Nama Kegiatan</th>
          <th><a href="/ftambah">Tambah</a></th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($list as $row): ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $row->jam;?></td>
            <td><?php echo $row->nama_kegiatan;?></td>
            <td><a href="/fedit/<?php echo $row->id;?>">Edit</a> | <a href="/delete/<?php echo $row->id;?>">Hapus</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
