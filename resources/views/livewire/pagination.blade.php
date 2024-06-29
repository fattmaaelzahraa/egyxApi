<style>
    .pagination {

position:absolute ;
left: 50%;
transform: translatex(-50%);
display: flex;
flex-direction: row;
gap: 5px;
margin-top: 30px;
margin-bottom: 50px;
}
</style>


<div>
    @if ($products->isEmpty())
    <h3>No results found.</h3>
@else
    <h2>Products</h2>
    <div class="container">
        <div class="product-container">
            @foreach ($products as $product)
                <div class="product-item">
                    <img src="{{asset('storage/'.$product->path)}}"
                        alt="{{ $product->Product_name }}" class="product-image">
                    <div class="product-details">
                        <h3>{{ $product->Product_name }}</h3>
                        <p>Average price: {{ $product->Avg_price }}</p>
                        <a href="{{ route('post.review', $product->id) }}" class="review-link">Check/Add
                            Review</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pagination">
        {{ $products->links('vendor.pagination.semantic-ui') }}
    </div>
@endif
</div>


</div>
