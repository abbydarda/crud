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
          <th>Nama Kegiatan</th>
          <th>Tambah</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($list as $row): ?>
          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row->nama_kegiatan;?></td>
            <td>update|delete</td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
