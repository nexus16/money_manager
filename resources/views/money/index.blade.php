@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-6 text-center">
				<h3>{{$listUser[0]['name']}}</h3>
				<p class="row"><button class="btn btn-default open-form"><span class="glyphicon glyphicon-plus"></span>Thêm mới</button></p>
				<div class="row form-create-new">
					<form role="form" method="POST" data-url={{route('money.store')}}>
						{{csrf_field()}}
					  <div class="form-group">
					    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Số tiền" name="money" required>
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sản phẩm" name="content" required>
					  </div>
					  <div class="form-group">
					  	<button class="btn btn-danger close-form" type="button">Hủy</button>
					  	<button class="btn btn-primary btn-form-create-new" type="button">Thêm</button>
					  </div>
					</form>
				</div>
				<div class="row list-account">
					@foreach($listUser[0]['money'] as $money)
						<div class="col-xs-12 card" id="card-{{$money['id']}}">
							<div class="row">
								<div class="col-xs-5">
									<label>{{$money['content']}}</label>
								</div>
								<div class="col-xs-5">
									<span class="email">{{$money['money']}}</span>
								</div>
								<div class="col-xs-2">
									<span class="glyphicon glyphicon-pencil edit" 
										></span>
									<span class="glyphicon glyphicon-remove delete"
										data-url="{{route('money.destroy', $money['id'])}}"
										data-id = "{{$money['id']}}"
										></span>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="col-sm-6 text-center">
				<h3>{{$listUser[1]['name']}}</h3>
				<div class="row list-account">
					@foreach($listUser[1]['money'] as $money)
						<div class="col-sm-12 card">
							<div class="row">
								<div class="col-xs-5">
									<label>{{$money['content']}}</label>
								</div>
								<div class="col-xs-5">
									<span class="email">{{$money['money']}}</span>
								</div>
								<div class="col-xs-2">
									<span class="glyphicon glyphicon-pencil edit" 
										></span>
									<span class="glyphicon glyphicon-remove delete"
										></span>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop