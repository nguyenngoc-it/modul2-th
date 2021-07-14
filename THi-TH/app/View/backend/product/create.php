<div class="container">
    <form method="post" enctype="multipart/form-data">
        <h3>CREATE PRODUCT</h3>
        <div class="mb-3">
            <label for="name-product" class="form-label">Tên sản phẩm</label>
            <input type="text" required class="form-control" id="name-product" name="name">
        </div>
        <div class="mb-3">
            <label for="id-product" class="form-label">ID Hàng hóa</label>
            <input type="number" required class="form-control" id="id-product" name="id">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" required class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="soluong" class="form-label">Số lượng</label>
            <input type="number" class="form-control" id="soluong" name="soluong">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Ngày tạo</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="mota" class="form-label">Mô Tả</label>
            <input type="text" class="form-control" id="mota" name="mota">
        </div>
        <button name="createproduct" type="submit" class="btn btn-primary">Create product</button>
    </form>
</div>