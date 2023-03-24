@extends('layout')
@section('content_brand')
<div class="features_items">
    <!--features_items-->

    @foreach($brand_name as $key => $name)

    <h2 class="title text-center">{{$name->brand_name}}</h2>

    @endforeach

    <div class="row">
        <div class="col-md-4">
            <label for="amount">Sắp xếp theo</label>
            <form>
                @csrf
                <select name="sort" id="sort" class="form-control">
                    <option value="{{Request::url()}}?sort_by=none">--Lọc--</option>
                    <option value="{{Request::url()}}?sort_by=tang_dan">--Giá tăng dần--</option>
                    <option value="{{Request::url()}}?sort_by=giam_dan">--Giá giảm dần--</option>
                    <option value="{{Request::url()}}?sort_by=kytu_az">--Theo tên từ A đến Z--</option>
                    <option value="{{Request::url()}}?sort_by=kytu_za">--Theo tên từ Z đến A--</option>
                </select>
            </form>
        </div>
    </div>
    @foreach($brand_by_id as $key => $product)
    @if(!Session::get('success_paypal')==true)
    <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
        @else
        <a href="{{URL::to('/checkout')}}">
            @endif
            <div class="col-sm-4">
                <div class="product-image-wrapper">

                    <div class="single-products">
                        <div class="productinfo text-center">
                            <form>
                                @csrf
                                <input type="hidden" value="{{$product->product_id}}"
                                    class="cart_product_id_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_name}}"
                                    class="cart_product_name_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_image}}"
                                    class="cart_product_image_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_price}}"
                                    class="cart_product_price_{{$product->product_id}}">
                                <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                    <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                    <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>
                                    <p>{{$product->product_name}}</p>


                                </a>
                                @if(!Session::get('success_paypal')==true)

                                <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart"
                                    data-id_product="{{$product->product_id}}" name="add-to-cart">
                                @endif
                            </form>

                        </div>

                    </div>

                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </a>
        @endforeach
</div>
<!--features_items-->
<ul class="pagination pagination-sm m-t-none m-b-none">
    {!!$brand_by_id->links()!!}
</ul>

<!--/recommended_items-->
@endsection