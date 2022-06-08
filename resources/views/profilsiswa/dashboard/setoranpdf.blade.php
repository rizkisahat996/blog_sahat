<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laporan Tabungan</title>
	<style>
		table.static {
			position: relative;
			border: 1px solid #543535;
		}
	</style>
</head>
<body>
	<div class="form-group">
		<p align="center"><b>LAPORAN TABUNGAN</b></p>
		<table class="static" align="center" rules="all" border="1px" style="width:95%;">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Setoran</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($setoran as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->tanggal_setor}}</td>
					<td>{{$s->jumlah_setor}}</td>
					<td>{{$s->total_uang}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>	
	</div>
	<script type="text/javascript">
	window.print();
	</script>
</body>
</html>