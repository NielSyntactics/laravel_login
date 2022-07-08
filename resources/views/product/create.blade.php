@extends('layouts.app')

@section('content')

    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card">
            <div class="card-header">
                <x-cardheader title="Create Product" linkText="Go back" route="{{ route('product.index') }}"  />
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <x-forms.input label="Product Name" type="text" name="name" id="name" placeholder="Product name"/>
                    <x-forms.input label="Product Photo" type="text" name="photos" id="photos" placeholder="Product photos"/>
                    <button type="submit" class="btn btn-primary mt-3">Add Product</button>
                </form>
            </div>
        </div>
    </div>


@endsection
