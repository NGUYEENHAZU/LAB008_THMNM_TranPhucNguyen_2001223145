@extends('layouts.app')
@section('content')
    <h2>Chỉnh sửa sản phẩm</h2>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf @method('PUT')

        <label>Tên sản phẩm:</label><br>
        <x-input type="text" name="name" value="{{ old('name', $product->name) }}" /><br>

        <label>Giá:</label><br>
        <x-input type="number" name="price" value="{{ old('price', $product->price) }}" /><br>

        <label>Tồn kho:</label><br>
        <x-input type="number" name="stock" value="{{ old('stock', $product->stock) }}" /><br>

        <label>Danh mục:</label><br>
        <select name="category_id">
            @foreach($categories as $c)
                <option value="{{ $c->id }}" {{ $c->id == $product->category_id ? 'selected' : '' }}>
                    {{ $c->name }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Cập nhật</button>
    </form>
@endsection