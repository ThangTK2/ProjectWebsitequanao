@extends('admin.main');

@section('content')
<div class="admin-content-main-content-product-add">
    <div class="admin-content-main-content-left">
      <div class="admin-content-main-content-input-two-input">
        <input type="text" placeholder="Tên sản phẩm...">
        <input type="text" placeholder="Chất liệu...">
      </div>
      <div class="admin-content-main-content-input-two-input">
        <input type="text" placeholder="Giá...">
        <input type="text" placeholder="Giá khuyến mãi...">
      </div>
      <textarea class="editor_desc" name="" id="" placeholder="Đặc điểm nổi bật..."></textarea>
      <textarea class="editor_content" name="" id="" placeholder="Mô tả sản phẩm..."></textarea>
      <br>
      <button class="main-btn">Thêm sản phẩm</button>
    </div>

    <div class="admin-content-main-content-right">
      <div class="admin-content-main-content-right-image">
        <label class="image-label" for="file">Ảnh đại diện</label>
        <input id="file" type="file" name="" id="">
        <div class="image-show">

        </div>
      </div>
      <div class="admin-content-main-content-right-images">
        <label for="files">Ảnh sản phẩm</label>
        <input id="files" type="file" name="" id="">
        <div class="images-show">

        </div>
      </div>
    </div>
</div>
@endsection
