@extends('admin.main');

@section('content')
<div class="admin-content-main-content-order-list">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Ảnh đơn hàng</th>
          <th>Tên đơn hàng</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>hình</td>
          <td>áo</td>
          <td>69.000d</td>
          <td>2</td>
          <td>69.000d</td>
          <td>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
        <tr>
          <td style="font-weight: 600;" colspan="5">Tổng cộng</td>
          <td style="font-weight: 600;" colspan="5">96.000d</td>
        </tr>
      </tbody>
    </table>
</div>
@endsection
