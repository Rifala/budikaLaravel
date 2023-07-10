<!DOCTYPE html>
<body>
  <div class="card-body">
    <table id="ex" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Ikan</th>
        <th>Nilai Preferensi</th>
        <th>Persentase Kecocokan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($hasil as $i => $listHasil)
      <tr>
        <td>{{ $listHasil['id'] }}</td>
        <td>{{ $listHasil['nama'] }}</td>
        <td>{{ $listHasil['total'] }}</td>
        <td>{{ $listHasil['persentase'] }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</body>