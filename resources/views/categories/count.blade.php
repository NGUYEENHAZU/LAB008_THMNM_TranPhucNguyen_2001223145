@extends('layouts.app')
@section('content')
    <h2>Số lượng sản phẩm theo danh mục</h2>
    <table border="1" cellpadding="6">
        <tr>
            <th>Danh mục</th>
            <th>Số sản phẩm</th>
        </tr>
        @foreach($categories as $c)
            <tr>
                <td>{{ $c->name }}</td>
                <td>{{ $c->products_count }}</td>
            </tr>
        @endforeach
    </table>
@endsection