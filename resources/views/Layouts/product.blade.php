@include('Components.flash')

<form method="POST" action="{{ route('basket.add', $product) }}" class="form-inline d-inline-block" >
	{{ csrf_field() }}
	<input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2" >
	<button type="submit" class="btn btn-warning" >+ Ajouter au panier</button>
</form>
