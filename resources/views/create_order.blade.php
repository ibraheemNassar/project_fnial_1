@extends('layouts.app')

@section('container')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Order</h1>
       
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">

            <div class="card-body">
                <form method="post" action="{{url('storeOrd')}}">
                @csrf
                    <div class="form-group">
                        <label for="price">Product Category :</label>
                        <select class="form-control" id="exampleFormControlSelect1" name ="a">
                            @foreach ($cartegory as $cartegor)
                            <option value="{{$cartegor->id}}">
                                {{$cartegor->categoryName}}
                            </option>
                            @endforeach
                        </select>                    </div>
                    <div class="form-group">
                      <label for="name">Product Name:</label>
                      <select class="form-control" id="exampleFormControlSelect2" name="b">
                        @foreach ($products as $product)
                        <option value="{{$product->id}}">
                            {{$product->proName}}
                        </option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="number" class="form-control" name="order_qty" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </main>

