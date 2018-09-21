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
							Test adminlte
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>NO</th>
										<th>Fullname</th>
										<th>Age</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Tran Van Tu</td>
										<td>19</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
				
			</div>
		</div>
	</div>
@endsection
