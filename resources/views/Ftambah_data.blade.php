<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Tambah Data</title>
  </head>
  <body>
    <form action="/add" method="post">
      {{csrf_field()}}
      <table>
        <tr>
          <td>Jam</td>
          <td>:</td>
          <td><input type="text" name="jam"></td>
        </tr>
        <tr>
          <td>Nama Kegiatan</td>
          <td>:</td>
          <td><textarea name="kegiatan" rows="8" cols="20"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" name="submit" value="Tambah"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
