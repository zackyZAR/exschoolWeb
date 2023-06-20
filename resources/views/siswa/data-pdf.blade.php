<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

h1{
    text-align: center;
}
</style>
</head>
<body>

<h1>Data Siswa Exschool</h1>

<table id="customers">
  <tr>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Exschool</th>
    <th>Alamat</th>
  </tr>
  @foreach($pemilih as $user)
  <tr>
      <td>{{ $user->Nama }}</td>
      <td>{{ $user->Kelas }}</td>
      <td>{{ $user->Exschool }}</td>
      <td>{{ $user->Alamat }}</td>
  </tr> 
    @endforeach

</table>

</body>
</html>