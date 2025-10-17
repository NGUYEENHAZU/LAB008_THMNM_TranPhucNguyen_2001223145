@extends('layouts.app')
@section('content')
    <h2>Danh sách sản phẩm</h2>
    <a href="{{ route('products.create') }}">+ Thêm sản phẩm</a>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="6">
        <tr>
            <th>Tên</th>
            <th>Giá</th>
            <th>Tồn kho</th>
            <th>Danh mục</th>
            <th>Hành động</th>
        </tr>
        @foreach($products as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ number_format($p->price) }} đ</td>
                <td>{{ $p->stock }}</td>
                <td>{{ $p->category->name }}</td>
                <td>
                    <a href="{{ route('products.edit', $p) }}">Sửa</a> |
                    <form action="{{ route('products.destroy', $p) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Xóa sản phẩm này?')">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

   <div style="margin-top: 10px;">
    @if ($page > 1)
        <a href="{{ url()->current() }}?page={{ $page - 1 }}">« Trước</a>
    @endif

    @for ($i = 1; $i <= $totalPages; $i++)
        @if ($i == $page)
            <strong>[{{ $i }}]</strong>
        @else
            <a href="{{ url()->current() }}?page={{ $i }}">{{ $i }}</a>
        @endif
    @endfor

    @if ($page < $totalPages)
        <a href="{{ url()->current() }}?page={{ $page + 1 }}">Sau »</a>
    @endif
</div>

@endsection