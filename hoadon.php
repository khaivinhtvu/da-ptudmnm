<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn - Shop Đồng Hồ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .invoice-container {
        margin-top: 50px;
        padding: 30px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .invoice-header,
    .invoice-footer {
        margin-bottom: 30px;
    }

    .invoice-header h3,
    .invoice-footer h5 {
        font-weight: bold;
    }

    .invoice-table th,
    .invoice-table td {
        text-align: center;
        padding: 10px;
    }

    .invoice-table th {
        background-color: #007bff;
        color: #fff;
    }

    .total-row td {
        font-weight: bold;
    }

    .total-price {
        color: #007bff;
        font-size: 1.5rem;
    }

    .btn-print {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .btn-print:hover {
        background-color: #218838;
    }
    </style>
</head>

<body>

    <!-- Hóa Đơn -->
    <div class="container invoice-container">
        <div class="invoice-header text-center">
            <h3>Hóa Đơn Mua Hàng</h3>
            <p>Shop Đồng Hồ - Cửa hàng trực tuyến</p>
            <p><strong>Ngày:</strong> <span id="invoice-date">15/12/2024</span></p>
        </div>

        <!-- Thông Tin Khách Hàng -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Thông Tin Khách Hàng</h5>
                <p><strong>Tên:</strong> Nguyễn Văn A</p>
                <p><strong>Email:</strong> nguyen@example.com</p>
                <p><strong>Số điện thoại:</strong> (+84) 123 456 789</p>
                <p><strong>Địa chỉ:</strong> 123 Đường ABC, Quận XYZ, TP.HCM</p>
            </div>
            <div class="col-md-6">
                <h5>Thông Tin Giao Hàng</h5>
                <p><strong>Địa chỉ giao hàng:</strong> 123 Đường ABC, Quận XYZ, TP.HCM</p>
                <p><strong>Phương thức giao hàng:</strong> Giao hàng tận nơi</p>
            </div>
        </div>

        <!-- Giỏ Hàng -->
        <div class="invoice-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Thành Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Đồng Hồ Thể Thao</td>
                        <td>1</td>
                        <td>1,200,000 VND</td>
                        <td>1,200,000 VND</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Đồng Hồ Chính Hãng</td>
                        <td>1</td>
                        <td>2,500,000 VND</td>
                        <td>2,500,000 VND</td>
                    </tr>
                    <tr class="total-row">
                        <td colspan="4" class="text-end">Tổng Cộng:</td>
                        <td class="total-price">3,700,000 VND</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Phương Thức Thanh Toán -->
        <div class="invoice-footer">
            <h5>Phương Thức Thanh Toán</h5>
            <p><strong>Thanh toán khi nhận hàng</strong></p>
            <!-- Nút In Hóa Đơn -->
            <div class="text-center">
                <button class="btn-print" onclick="window.print()">In Hóa Đơn</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>