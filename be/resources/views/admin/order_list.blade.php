@extends('admin.main');

@section('content')
<div class="admin-content-main-content-order-list">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Tên</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Ghi chú</th>
          <th>Chi tiết</th>
          <th>Ngày</th>
          <th>Trạng thái</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>thắng</td>
          <td>087685764</td>
          <td>nht1-@gmail.com</td>
          <td>Đà nẵng</td>
          <td>ok</td>
          <td>
            <a class="edit-class" href="/admin/order_detail">Xem</a>
          </td>
          <td>1/1/2024</td>
          <td>
            <a class="confirm-order" href="">Đã xác nhận</a>
          </td>
          <td>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>thắng</td>
          <td>087685764</td>
          <td>nht1-@gmail.com</td>
          <td>Đà nẵng</td>
          <td>ok</td>
          <td>
            <a class="edit-class" href="">Xem</a>
          </td>
          <td>1/1/2024</td>
          <td>
            <a class="no_confirm-order" href="">Chưa xác nhận</a>
          </td>
          <td>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
      </tbody>
    </table>
</div>
@endsection
