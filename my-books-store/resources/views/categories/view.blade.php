@extends('layouts.main')

@section('title', $category['name'])

@section('content')

<h2>{{ $category['name'] }}</h2>
<style>
table{
    border-collapse: collapse;
}

table,th,td{
    border:1px solid black;
}

.app-cl-product-image{
    width:64px;
}
</style>

<table>
    <caption>Products List for {{ $category['name'] }}</caption>
    <thead>
    <tr>
        <th>No.</th>
        <th>Image</th>
        <th>Code</th>
        <th>Name</th>
    </tr>
    </thead>

    <tbody>

    @foreach($products as $product)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>
                <img
                    src="{{ asset("image/products/{$product['code']}.jpg") }}"
                    alt="{{ $product['name'] }}"
                    class="app-cl-product-image"
                >
            </td>

            <td>
                <a href="{{ route('products.view',[
                    'product'=>$product['code']
                ]) }}">
                    <em>{{ $product['code'] }}</em>
                </a>
            </td>

            <td>{{ $product['name'] }}</td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection