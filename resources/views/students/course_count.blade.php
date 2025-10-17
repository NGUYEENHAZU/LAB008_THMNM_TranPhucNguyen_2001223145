@extends('layouts.app')
@section('content')
    <h2>Danh sách sinh viên và số môn học đã đăng ký</h2>
    <table border="1" cellpadding="6">
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số môn</th>
        </tr>
        @foreach($students as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->email }}</td>
                <td>{{ $s->courses_count }}</td>
            </tr>
        @endforeach
    </table>
@endsection