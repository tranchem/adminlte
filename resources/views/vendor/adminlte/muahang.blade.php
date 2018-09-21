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
					Product
				</div>
				<div class="panel-body" style="background-color: #E8E1E1;">
					<div class="row">
						
						<!-- <div class="col-md-3 col-xs-6 box">
							<img src="https://znews-photo-td.zadn.vn/w660/Uploaded/jaroin/2017_05_18/6.jpg" alt="error">
							<div>Mon trang mieng</div>
							<div>Gia: 50000</div>
						</div> -->

						<?php 

						// for ($i = 0; $i < count($dataList); $i++) {

						// 	echo '
						// 	<div class="col-md-3 col-xs-6 box">
						// 	<img src="'.$dataList[$i]['thumbnail'].'" alt="error">
						// 	<div>Ten: '.$dataList[$i]['ten'].'</div>
						// 	<div>Gia: '.$dataList[$i]['gia'].'</div>
						// 	</div>';
						// }
						?>
						@foreach($dataList as $item)
							<div class="col-md-3 col-xs-6 box">
								<img src="{{$item->thumbnail}}" alt="error">
								<div>Ten: {{$item->ten}}</div>
								<div>Gia: {{$item->gia}}</div>
								<a href="#" class="btn btn-info">Chi tiet</a>
								<a href="#" class="btn btn-warning">Mua hang</a>
							</div>
						@endforeach	
					</div>
				</div>
				
			</div>


		</div>
	</div>
</div>
@endsection
