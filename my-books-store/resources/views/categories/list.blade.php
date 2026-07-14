@extends('layouts.main')

@section('title','Categories')

@section('content')

<table border="1">
    <caption>Categories List</caption>

<tr>

<th>No.</th>

<th>Code</th>

<th>Name</th>

</tr>

@foreach($categories as $category)

<tr>

<td>{{ $loop->iteration }}</td>

<td>
    <a href="{{ route('categories.view', [
        'category' => $category['code']
    ]) }}">
        <em>{{ $category['code'] }}</em>
    </a>
</td>

<td>



{{ $category['name'] }}



</td>

</tr>

@endforeach

</table>

@endsection