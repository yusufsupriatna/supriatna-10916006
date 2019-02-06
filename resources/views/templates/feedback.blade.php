@if(session('succes'))
	<div class="alert alert-succes fade in">
		<button type="button" class="close pull-right" data-dismis="alert" arial-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{!! session('succes') !!}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger fede in">
		<button type="button" class="close pull-right" data-dismis="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{!! session('succes') !!}
	</div>
@endif

@if (count($errors) > 0)
	<div class="alert alert-danger fade in">
		<button type="button" class="close pull-right" data-dismis="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<p>Perhatian.</p>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error}}</li>
			@endforeach
		</ul>
	</div>
@endif