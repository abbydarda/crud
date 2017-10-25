<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Edit Data</title>
  </head>
  <body>
    <form action="/update/{{$data->id}}" method="post">
      {{csrf_field()}}
      <table>
          <tr>
            <td>Jam</td>
            <td>:</td>
            <td><input type="text" name="jam" value="{{$data->jam}}"></td>
          </tr>
          <tr>
            <td>Nama Kegiatan</td>
            <td>:</td>
            <td><textarea name="kegiatan" rows="8" cols="20">{{$data->nama_kegiatan}}</textarea></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Ubah"></td>
          </tr>
      </table>
    </form>
  </body>
</html>
