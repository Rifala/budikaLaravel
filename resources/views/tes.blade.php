<!DOCTYPE html>
<body>
    <table>

    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Ikan</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listHasil as $list)
      <tr>
        <td>{{ $list['id'] }}</td>
        <td>{{ $list['nama'] }}</td>
        <td>{{ $list['c1'] }}</td>
        <td>{{ $list['c2'] }}</td>
        <td>{{ $list['c3'] }}</td>
        <td>{{ $list['c4'] }}</td>
        <td>{{ $list['c5'] }}</td>
        <td>{{ $list['deskripsi'] }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
</body>