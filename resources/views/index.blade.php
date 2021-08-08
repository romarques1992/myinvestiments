<div>
@foreach($investiments as $investiment)
	<form action="{{ route('investiment.show', $investiment->id) }}" method="get">
		@csrf
		
			{{ $investiment->investment_value }}
			{{ $investiment->created_at }}
			<button type="submit">Ver</button>	
	</form>	
@endforeach
</div>

{{ $investiments->links() }}