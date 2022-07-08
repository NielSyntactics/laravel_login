@extends('layouts.app')

@section('content')

    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card">
            <div class="card-header">
                <x-cardheader title="Product List" linkText="Add Product" route="{{ route('product.create') }}"  />
            </div>
            <div class="card-body">
                @if (count($products) == 0)
                    <div class="text-center">
                        <p>No Product in the List</p>
                    </div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Photos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>
                                        @foreach ($product->photos as $photo)
                                            <a href="#">{{$photo->filename}}</a>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
