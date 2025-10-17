@extends('layouts.app')
@section('content')
    <h2>Thêm sản phẩm mới</h2>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Tên sản phẩm:</label><br>
        <x-input type="text" name="name" value="{{ old('name') }}" /><br>

        <label>Giá:</label><br>
        <x-input type="number" name="price" value="{{ old('price') }}" /><br>

        <label>Tồn kho:</label><br>
        <x-input type="number" name="stock" value="{{ old('stock') }}" /><br>

        <label>Danh mục:</label><br>
        <select name="category_id">
            @foreach($categories as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Lưu</button>
    </form>
@endsection