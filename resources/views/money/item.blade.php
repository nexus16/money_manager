<div class="col-sm-12 card" id="card-{{$money['id']}}">
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