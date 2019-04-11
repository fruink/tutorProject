@if(count($errors) > 0)
@foreach($errors->all() as $error)
	<div class="alertMsg">
		{{$error}}
	</div>
@endforeach
@endif




@if(session('success'))

<div class="alertMsgSuccess">
	{{session('success')}}
</div>

@endif


@if(session('error'))

<div class="alertMsgError">
	{{session('error')}}
</div>

@endif