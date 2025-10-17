@extends('layouts.app')
@section('content')
<h2>Sản phẩm có giá > 100,000</h2>
<table border="1" cellpadding="6">
    <tr>
        <th>Tên</th>
        <th>Giá</th>
        <th>Danh mục</th>
    </tr>
    @foreach($products as $p)
    <tr>
        <td>{{ $p->name }}</td>
        <td>{{ number_format($p->price) }} đ</td>
        <td>{{ $p->category->name }}</td>
    </tr>
    @endforeach
</table>
@endsection