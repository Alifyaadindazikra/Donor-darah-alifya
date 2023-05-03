<!DOCTYPE html>
<html>
<head>
	<title>Data Pendonor {{ date('d-m-Y') }}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Pendonor {{ date('d-m-Y') }}</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nomor Pendonor</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Umur</th>
                    <th>Berat Badan</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Handphone</th>
                    <th>Gol. Darah</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($donors as $d)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$d->id}}</td>
				<td>{{$d->nama}}</td>
				<td>{{$d->email}}</td>
				<td>{{$d->umur}}</td>
				<td>{{$d->bb}}</td>
				<td>{{$d->jk}}</td>
				<td>{{$d->no_hp}}</td>
				<td>{{$d->darah}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>










