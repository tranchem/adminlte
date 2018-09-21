@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<div class="panel panel-primary">
				<div class="panel-heading">
					Input product'detail information
				</div>
				<div class="panel-body">
					<form method="post" action="{{ route('postForm') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<b>Ten san pham :</b>
							<input type="text" name="productname" class="form-control">
						</div>
						<div class="form-group">
							<b>Gia :</b>
							<input type="text" name="price" class="form-control">
						</div>
						<div class="form-group">
							<b>Thumbnail :</b>
							<input type="text" name="thumbnail" class="form-control"> 
						</div>
						<input type="submit" class="btn btn-success">
					</form>
				</div>
				
			</div>

			<div class="panel panel-danger">
				<div class="panel panel-heading">
					Product'detail information
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Ten</th>
								<th>Gia</th>
								<th>Hinh anh</th>
							</tr>

						</thead>
						<tbody>
							<?php
							// for ($i = 0; $i < count($dataList); $i++) {
							// 	$count = $i + 1;
							// 	echo '<tr>
							// 	<td>'.$count.'</td>
							// 	<td>'.$dataList[$i]['ten'].'</td>
							// 	<td>'.$dataList[$i]['gia'].'</td>
							// 	<td><img style="width: 150px; heigth: 150px;" src="'.$dataList[$i]['thumbnail'].'" alt="error"></td>
							// 	<td>
							// 	<input type="button" value="Chinh sua" class="btn btn-primary">
							// 	<input type="button" value="Xoa" class="btn btn-danger">
							// 	</td>

							// 	</tr>';
							// }
							?>

							@foreach($dataList as $item)

							<tr>
								<td>{{ $item->id }}</td>
								<td>{{ $item->ten }}</td>
								<td>{{ $item->gia }}</td>
								<td><img style="width: 150px; heigth: 150px;" src="{{ $item->thumbnail }}" alt="error"></td>
								<td>
									<a href="{{ route('update').'?id='.$item->id }}" class="btn btn-primary">Chinh sua</a>
									<a href="{{ route('delete').'?id='.$item->id }}" class="btn btn-danger">Xoa</a>
								</td>
								
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>


		</div>
	</div>
</div>
@endsection
