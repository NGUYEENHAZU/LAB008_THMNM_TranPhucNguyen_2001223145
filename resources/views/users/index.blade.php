@extends('layouts.app')
@section('content')
<h2>Danh sách người dùng và thông tin profile</h2>
<table>
  <tr><th>STT</th><th>Tên</th><th>Email</th><th>Địa chỉ</th><th>Điện thoại</th></tr>
  @foreach($users as $u)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $u->name }}</td>
    <td>{{ $u->email }}</td>
    <td>{{ $u->profile->address ?? 'N/A' }}</td>
    <td>{{ $u->profile->phone ?? 'N/A' }}</td>
  </tr>
  @endforeach
</table>
@endsection
