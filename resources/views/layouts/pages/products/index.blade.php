@extends('layouts.master')
@section('main-container')
    <div id="cart">
        <div class="main-content-wrapper pd-20 bg-white border-radius-4 box-shadow mb-30">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="user-cart">
                        <div class="card">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_brand }}</td>
                                        <td>{{ $product->product_price }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">Total:</div>
                        <div class="col text-right">$ 0.00</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-danger btn-block" disabled="">Cancel</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-block" disabled="">Checkout</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col">
                            <form>
                                <input type="text" class="form-control" value="" placeholder="Scan Barcode...">
                            </form>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Search Product...">
                        </div>
                    </div>
                    <div class="order-product">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
