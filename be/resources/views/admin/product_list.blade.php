@extends('admin.main');

@section('content')
<div class="admin-content-main-content-product-list">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Ảnh</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Giá khuyến mãi</th>
          <th>Ngày đăng</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><img style="width: 70px;" src="{{ asset('be/asset/images/logo.png') }}" alt="Ảnh"></td>
          <td>gg</td>
          <td>gg</td>
          <td>gg</td>
          <td>gg</td>
          <td>
            <a class="edit-class" href="">Sửa</a>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
      </tbody>
    </table>
</div>
@endsection
