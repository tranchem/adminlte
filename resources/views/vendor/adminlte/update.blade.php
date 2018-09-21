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
					Update product
				</div>
				<div class="panel-body">
					<form method="post" action="{{ route('update_access') }}">
						{{ csrf_field() }}
						<input type="text" name="index" style="display: none;" value="{{ $dataList[0]->id }}">
						<div class="form-group">
							<b>Ten san pham :</b>
							<input type="text" name="productname" class="form-control" value="{{ $dataList[0]->ten }}">
						</div>
						<div class="form-group">
							<b>Gia :</b>
							<input type="text" name="price" class="form-control" value="{{ $dataList[0]->gia }}">
						</div>
						<div class="form-group">
							<b>Thumbnail :</b>
							<input type="text" name="thumbnail" class="form-control" value="{{ $dataList[0]->thumbnail }}"> 
						</div>
						<input type="submit" class="btn btn-success" value="Update">
					</form>
				</div>
				
			</div>

			


		</div>
	</div>
</div>
@endsection

