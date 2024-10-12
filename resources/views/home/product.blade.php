<section class="product_section layout_padding" style="background-color: rgba(211,211,211,0.32)">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Products
            </h2>
        </div>
        <div class="row">
            @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details',$products->id)}}" class="option1">
                                    Product Details
                                </a>
                                <br>
                                <br>
                                <form action="{{url('add_cart',$products->id)}}" method="POST">
                                    @csrf
                                    <div class="row" style="display: flex; flex-direction: column; align-items: center; gap: 30px;">
                                        <div class="" style="width: 80px">
                                            <input type="number" name="quantity" id="" value="1" min="1">
                                        </div>
                                        <div class="addcart">
                                            <input type="submit" name="" id="" value="Add to Cart" class="addcart">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/productimage/{{ $products->image }}" alt="{{ $products->title }}" style="border:2px solid black;">
                        </div>
                        <hr style="width: 250px; border: 1px solid rgba(0, 0, 0, 0.46)">
                        <div class="detail-box coloumview">
                            <h5 style="font-size: 20px; color: black">
                                {{ $products->title }}
                            </h5>
                            @if($products->discount_price !=null)
                                <h6 style="font-size: 17px; color:red;">
                                    Discount Price Rs.{{ $products->discount_price }}
                                </h6>
                                <h6 style="text-decoration: line-through; color: black">
                                    Price Rs.{{ $products->price }}
                                </h6>
                            @else
                                <h6 style="color: black">
                                    Price Rs.{{ $products->price }}
                                </h6>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>
        <span style="padding-top:20px">
                {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
        </span>
    </div>
</section>
