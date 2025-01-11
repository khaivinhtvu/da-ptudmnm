# Đồ án môn học Phát triển ứng dụng mã nguồn mở
# Thành viên nhóm:
+ Nguyễn Thị Cẩm Tiên
+ Bùi Cát Vũ
+ Huỳnh Khải Vinh
# Lý Do Chọn Đề Tài

Trong bối cảnh công nghệ ngày càng phát triển, thương mại điện tử đã và đang trở thành xu hướng phổ biến trên toàn thế giới. Các website bán hàng không chỉ là kênh giao dịch trực tuyến mà còn là cầu nối giữa doanh nghiệp và khách hàng, giúp tăng cường khả năng tiếp cận và thúc đẩy doanh thu một cách hiệu quả.

Việc lựa chọn đề tài **Xây dựng website bán đồng hồ bằng ngôn ngữ PHP và MySQL** xuất phát từ các lý do chính sau:

### 1. Nhu cầu thực tế

Đồng hồ không chỉ là công cụ đo thời gian mà còn là phụ kiện thể hiện phong cách và đẳng cấp. Số lượng người dùng mua sắm đồng hồ trực tuyến ngày càng tăng, tạo ra nhu cầu cấp thiết về một nền tảng website tiện lợi, thân thiện với người dùng.

### 2. Học tập và thực hành

PHP và MySQL là hai công nghệ phổ biến trong phát triển web. Thông qua việc xây dựng website, nhóm chúng em có cơ hội áp dụng kiến thức đã học vào thực tế, từ đó củng cố và nâng cao kỹ năng lập trình cũng như quản trị cơ sở dữ liệu.

### 3. Khả năng mở rộng

Một website bán hàng chuyên nghiệp không chỉ hỗ trợ doanh nghiệp trong việc bán sản phẩm mà còn có thể mở rộng thêm các tính năng như quản lý khách hàng, quảng bá sản phẩm, và phân tích dữ liệu. Đây là nền tảng quan trọng để phát triển các hệ thống thương mại điện tử phức tạp hơn trong tương lai.

### 4. Thách thức và sáng tạo

Việc thực hiện đề tài này không chỉ đòi hỏi kiến thức về lập trình mà còn yêu cầu khả năng phân tích, thiết kế và giải quyết vấn đề. Đây là cơ hội để nhóm chúng em rèn luyện kỹ năng làm việc nhóm, tư duy logic, và khả năng sáng tạo trong thiết kế giao diện và xây dựng chức năng.

---

Chúng em tin rằng đề tài này không chỉ mang lại giá trị thực tiễn mà còn giúp chúng em phát triển bản thân và đóng góp một phần nhỏ vào sự phát triển của lĩnh vực thương mại điện tử.
# Phần 1: Cơ Sở Lý Thuyết

## 1.1. Ngôn ngữ PHP

### 1.1.1. Khái niệm
PHP (Hypertext Preprocessor) là một ngôn ngữ lập trình kịch bản (scripting language) phổ biến để phát triển các ứng dụng web động. Với khả năng chạy trên máy chủ (server-side scripting), PHP xử lý yêu cầu từ trình duyệt, tạo nội dung động và trả kết quả qua giao diện web.

### 1.1.2. Lịch sử hình thành và phát triển
PHP bắt đầu vào năm 1994 như một công cụ cá nhân của Rasmus Lerdorf. Qua nhiều giai đoạn phát triển:
- **1995:** Ra mắt PHP/FI (Personal Home Page/Forms Interpreter).
- **1998:** PHP 3 chính thức đặt tên là PHP: Hypertext Preprocessor.
- **2000:** PHP 4 sử dụng Zend Engine, cải thiện hiệu suất và tính năng.
- **2004:** PHP 5 hỗ trợ lập trình hướng đối tượng và bổ sung PDO.
- **2015:** PHP 7 tăng hiệu suất gấp đôi và quản lý bộ nhớ tốt hơn.
- **2020:** PHP 8 giới thiệu trình biên dịch JIT và các tính năng hiện đại như match expression.

### 1.1.3. Ưu điểm và nhược điểm của PHP

#### Ưu điểm
- Mã nguồn mở, dễ học và triển khai.
- Thư viện phong phú, cộng đồng hỗ trợ mạnh mẽ.
- Tương thích với nhiều nền tảng và dễ cài đặt môi trường phát triển như XAMPP.

#### Nhược điểm
- Hiệu suất không tối ưu cho ứng dụng lớn.
- Bảo mật kém nếu không được lập trình cẩn thận.
- Cú pháp không đồng nhất, gây khó khăn trong học tập và bảo trì.

---

## 1.2. Cơ sở dữ liệu MySQL trong phát triển ứng dụng web

### 1.2.1. Khái niệm
MySQL là một hệ quản trị cơ sở dữ liệu mã nguồn mở, phổ biến trong phát triển ứng dụng web. Được sáng lập năm 1995 bởi Michael Widenius, David Axmark, và Allan Larsson, MySQL hiện thuộc Oracle Corporation.

### 1.2.2. Lịch sử hình thành và phát triển
- **1995:** MySQL ra đời như một dự án mã nguồn mở.
- **2000:** MySQL trở thành mã nguồn mở hoàn toàn.
- **2005:** Bổ sung tính năng như khóa giao dịch và bộ lưu trữ InnoDB.
- **2010:** Oracle mua lại và phát triển MySQL.
- **2020 - Hiện tại:** Tiếp tục cải tiến hiệu suất và bảo mật.

### 1.2.3. Đặc điểm nổi bật
- **Mã nguồn mở:** Không yêu cầu phí bản quyền.
- **Hiệu suất cao:** Tối ưu hóa cho ứng dụng web.
- **Tính di động:** Hỗ trợ đa nền tảng (Windows, Linux, macOS).
- **Hỗ trợ đa ngôn ngữ lập trình:** PHP, Python, Java, và nhiều ngôn ngữ khác.
- **Khả năng mở rộng tốt:** Phù hợp với cả hệ thống nhỏ và lớn.

### 1.2.4. Ứng dụng thực tế
- Phát triển web động (CMS, framework).
- Thương mại điện tử (Magento, WooCommerce).
- Quản lý doanh nghiệp (CRM, ERP).
- Lưu trữ dữ liệu lớn.

### 1.2.5. Ưu điểm và nhược điểm

#### Ưu điểm
- Dễ học và sử dụng với cú pháp đơn giản.
- Hiệu quả chi phí và hỗ trợ cộng đồng mạnh mẽ.
- Khả năng mở rộng từ ứng dụng nhỏ đến hệ thống lớn.

#### Nhược điểm
- Hạn chế khi xử lý dữ liệu phức tạp.
- Tính năng giao dịch không mạnh bằng PostgreSQL hoặc Oracle.
- Không hỗ trợ đầy đủ các tính năng SQL chuẩn.

---

## 1.3. Công cụ hỗ trợ phát triển ứng dụng web XAMPP

### 1.3.1. Khái niệm
XAMPP là phần mềm mã nguồn mở giúp tạo môi trường máy chủ cục bộ trên máy tính cá nhân. Tên gọi XAMPP đại diện cho các thành phần chính:
- **X:** Đa nền tảng (Cross-platform).
- **A:** Apache, máy chủ web.
- **M:** MySQL hoặc MariaDB.
- **P:** PHP.
- **P:** Perl.

### 1.3.2. Đặc điểm nổi bật
- **Dễ dàng cài đặt:** Tối ưu hóa cho người mới bắt đầu.
- **Tích hợp đầy đủ công cụ:** Apache, MySQL, PHP, và Perl.
- **Hỗ trợ đa nền tảng:** Chạy trên Windows, macOS, và Linux.
- **Phát triển cục bộ:** Không cần kết nối internet.

### 1.3.3. Ứng dụng
- Phát triển và kiểm tra ứng dụng web cục bộ.
- Học lập trình web và quản lý cơ sở dữ liệu với phpMyAdmin.
- Tạo môi trường máy chủ cá nhân để thử nghiệm.

### 1.3.4. Nhược điểm
- Không phù hợp cho môi trường sản xuất do cấu hình bảo mật chưa tối ưu.
- Tiêu tốn tài nguyên hệ thống khi chạy trên máy cá nhân.
- Cấu hình mặc định khác môi trường thực tế, có thể gây lỗi khi triển khai.
# README

## Phần 2: Phân Tích Thiết Kế Hệ Thống

### 2.1. Mô Tả Đề Tài
Đề tài này tập trung xây dựng một hệ thống quản lý và bán đồng hồ trực tuyến với các chức năng chính sau:

- **Quản lý thành viên**: Người dùng có thể xem sản phẩm nhưng chỉ thành viên mới được phép mua hàng.
- **Quản lý loại đồng hồ**: Mỗi loại đồng hồ được quản lý bằng mã loại, tên, và mô tả.
- **Quản lý sản phẩm đồng hồ**: Mỗi đồng hồ có mã riêng, tên, thương hiệu, chất liệu, tính năng, màu sắc, kích thước, hình ảnh, giá và số lượng tồn kho.
- **Quản lý tài khoản thành viên**: Thông tin cá nhân bao gồm tên đăng nhập, mật khẩu, họ tên, giới tính, ngày sinh, quốc tịch, và hình đại diện.
- **Quy trình mua hàng**: Thành viên chọn sản phẩm, thêm vào giỏ hàng, và quản lý giỏ hàng trước khi được duyệt.
- **Duyệt giỏ hàng**: Quản trị viên duyệt hoặc từ chối giỏ hàng. Sau khi duyệt, đơn hàng không thể hủy.
- **Quản lý sản phẩm và loại sản phẩm**: Quản trị viên thêm mới loại và sản phẩm đồng hồ, cập nhật số lượng tồn kho.
- **Tính năng chat**: Khách hàng có thể chat với nhau hoặc với quản trị viên.
- **Thống kê doanh thu**: Quản trị viên xem doanh thu theo tuần, tháng, quý, và các sản phẩm bán chạy.

---

### 2.2. Phân Tích Thiết Kế Hệ Thống

#### 2.2.1. Mô Hình Dữ Liệu Mức Quan Niệm (UML)

**Sơ Đồ Lớp:**
- **Lớp Quản trị viên**:
  - ID (varchar)
  - User_name (varchar)
  - Pass_word (varchar)

- **Lớp Thành viên**:
  - MaTV (varchar)
  - Tendangnhap (varchar)
  - Matkhau (text)
  - Hoten (varchar)
  - Email (varchar)
  - Diachi (varchar)
  - SDT (varchar)

- **Lớp Giỏ hàng**:
  - MaSP (varchar)
  - ID (varchar)
  - Gia (int)
  - Gia_KM (int)

- **Lớp Hóa đơn**:
  - Mahoadon (varchar)
  - Ngaylap (Date)
  - Tongtien (int)
  - SoLuong (int)
  - HinhThucThanhToan (varchar)

- **Lớp Sản phẩm**:
  - MaSP (varchar)
  - TenSP (varchar)
  - Hinh (Text)
  - Gia (int)
  - Mota (varchar)
  - Gia_KM (varchar)

**Mối quan hệ giữa các lớp:**
- 1:N giữa Thành viên - Giỏ hàng, Thành viên - Hóa đơn.
- 1:N giữa Giỏ hàng - Chi tiết giỏ.
- N:1 giữa Chi tiết giỏ - Sản phẩm.
- N:M giữa Hóa đơn - Sản phẩm.

---

#### 2.2.2. Mô Hình Dữ Liệu Mức Logic (MLD)

##### **Bảng `quantrivien`**
| Thuộc tính       | Mô tả                          | Kiểu dữ liệu  | Ràng buộc              |
|------------------|--------------------------------|---------------|------------------------|
| id               | Mã quản trị viên              | VARCHAR(20)   | PRIMARY KEY, NOT NULL |
| tendnqtv         | Tên đăng nhập quản trị viên   | TEXT          | NOT NULL              |
| tenqtv           | Tên của quản trị viên         | VARCHAR(50)   | NOT NULL              |
| matkhauqtv       | Mật khẩu quản trị viên        | VARCHAR(50)   | NOT NULL              |
| diachiqtv        | Địa chỉ của quản trị viên     | VARCHAR(50)   | NOT NULL              |
| dtqtv            | Điện thoại của quản trị viên | VARCHAR(50)   | NOT NULL              |

##### **Bảng `thanhvien`**
| Thuộc tính       | Mô tả                          | Kiểu dữ liệu  | Ràng buộc              |
|------------------|--------------------------------|---------------|------------------------|
| MaTV             | Mã thành viên                 | VARCHAR(10)   | PRIMARY KEY, NOT NULL |
| Tendangnhap      | Tên đăng nhập                 | VARCHAR(10)   | NOT NULL              |
| Matkhau          | Mật khẩu                      | TEXT          | NOT NULL              |
| Hoten            | Họ và tên                     | VARCHAR(50)   | NOT NULL              |
| Email            | Email                         | VARCHAR(255)  | NOT NULL              |
| Diachi           | Địa chỉ                       | VARCHAR(255)  | NOT NULL              |
| Sdt              | Số điện thoại                 | VARCHAR(20)   | NOT NULL              |

##### **Bảng `sanpham`**
| Thuộc tính       | Mô tả                          | Kiểu dữ liệu  | Ràng buộc              |
|------------------|--------------------------------|---------------|------------------------|
| masp             | Mã sản phẩm                   | VARCHAR(10)   | PRIMARY KEY, NOT NULL |
| tensp            | Tên sản phẩm                  | VARCHAR(50)   | NOT NULL              |
| hinh             | Hình ảnh sản phẩm             | TEXT          | DEFAULT NULL          |
| gia              | Giá sản phẩm                  | INT(10)       | NOT NULL, DEFAULT 0   |
| mota             | Mô tả sản phẩm                | TEXT          | NOT NULL              |
| gia_km           | Giá khuyến mãi                | INT(10)       | NOT NULL, DEFAULT 0   |

##### **Bảng `giohang`**
| Thuộc tính       | Mô tả                          | Kiểu dữ liệu  | Ràng buộc              |
|------------------|--------------------------------|---------------|------------------------|
| id               | Mã giỏ hàng                   | VARCHAR(10)   | PRIMARY KEY, NOT NULL |
| admin            | Quản trị viên duyệt giỏ hàng  | VARCHAR(20)   | NOT NULL              |
| thoigian         | Thời gian tạo giỏ hàng        | DATE          | NOT NULL              |
| trangthai        | Trạng thái giỏ hàng           | INT(2)        | NOT NULL              |

##### **Bảng `chitietgio`**
| Thuộc tính       | Mô tả                          | Kiểu dữ liệu  | Ràng buộc              |
|------------------|--------------------------------|---------------|------------------------|
| masp             | Mã sản phẩm                   | VARCHAR(11)   | PRIMARY KEY, NOT NULL |
| idgiohang        | Mã giỏ hàng                   | VARCHAR(10)   | FOREIGN KEY, NOT NULL |
| idchitiet        | Mã chi tiết giỏ hàng          | INT(11)       | NOT NULL              |
| soluongmua       | Số lượng mua hàng             | INT(11)       | NOT NULL              |
| matv             | Mã thành viên                 | VARCHAR(20)   | NOT NULL              |

##### **Bảng `hoadon`**
| Thuộc tính       | Mô tả                          | Kiểu dữ liệu  | Ràng buộc              |
|------------------|--------------------------------|---------------|------------------------|
| mahoadon         | Mã hóa đơn                    | VARCHAR(10)   | PRIMARY KEY, NOT NULL |
| ngaylap          | Ngày lập hóa đơn              | DATE          | DEFAULT NULL          |
| tongtien         | Tổng tiền thanh toán          | INT(10)       | NOT NULL              |
| idgiohang        | Mã giỏ hàng                   | VARCHAR(11)   | NOT NULL              |
| hinhthucthanhtoan| Hình thức thanh toán          | VARCHAR(20)   | NOT NULL              |
# Phần 3: Chức Năng Của Website

## 3.2. Các Chức Năng Của Website

### 3.2.1. Chức năng đăng nhập và đăng ký tài khoản
- Người dùng và quản trị viên có thể đăng nhập vào hệ thống bằng tài khoản đã tạo trước đó. Hệ thống kiểm tra thông tin đăng nhập và cấp quyền truy cập nếu hợp lệ.
- Cho phép người dùng đăng ký tài khoản mới bằng cách cung cấp các thông tin như họ tên, email, số điện thoại, địa chỉ và mật khẩu.
- Người dùng và quản trị viên có thể đăng xuất tài khoản một cách an toàn sau khi sử dụng.

### 3.2.2. Chức năng quản lý tài khoản
- Người dùng có thể xem và cập nhật thông tin tài khoản cá nhân, bao gồm tên, địa chỉ, số điện thoại, và mật khẩu.
- Quản trị viên có quyền xem danh sách tài khoản người dùng trong hệ thống.
- Quản trị viên có thể tạo chỉnh sửa các tài khoản quản trị viên khác nếu cần, đảm bảo vai trò và trách nhiệm rõ ràng.

### 3.2.3. Chức năng tìm kiếm và xem sản phẩm
- Hỗ trợ tìm kiếm sản phẩm nhanh chóng bằng cách nhập từ khóa liên quan đến tên sản phẩm.
- Cho phép xem thông tin chi tiết của từng sản phẩm, bao gồm hình ảnh, giá, mô tả sản phẩm, số lượng còn, giá bán.

### 3.2.4. Chức năng thêm, sửa, xóa, và quản lý sản phẩm
- Quản trị viên có thể thêm sản phẩm mới vào hệ thống với các thông tin như tên, hình ảnh, giá cả, số lượng tồn kho, và mô tả chi tiết.
- Sửa đổi thông tin sản phẩm nếu có thay đổi về giá, số lượng, hoặc hình ảnh.
- Xóa các sản phẩm không còn kinh doanh hoặc không còn tồn kho.

### 3.2.5. Chức năng quản lý giỏ hàng
- Người dùng có thể thêm sản phẩm vào giỏ hàng và xem danh sách các sản phẩm đã chọn, bao gồm tên sản phẩm, số lượng, và giá tiền.
- Cho phép chỉnh sửa giỏ hàng: xóa sản phẩm khỏi giỏ hàng, hoặc hủy toàn bộ giỏ hàng nếu cần.
- Hiển thị tổng giá trị của giỏ hàng.

### 3.2.6. Chức năng thanh toán và hóa đơn
- Người dùng có thể tiến hành thanh toán giỏ hàng qua các phương thức như thẻ tín dụng hoặc thanh toán khi nhận hàng.
- Người dùng có thể xem lại các hóa đơn của mình.
- Quản trị viên có thể xem danh sách các hóa đơn của tất cả các khách hàng.
- Người dùng và quản trị viên có thể in hóa đơn nếu cần.

### 3.2.7. Chức năng quản lý thanh toán
- Quản trị viên có thể duyệt các giỏ hàng đang chờ thanh toán từ người dùng. Người dùng cần xác minh bằng mật khẩu trước khi tiến hành duyệt.
- Hệ thống hỗ trợ ghi nhận trạng thái của giỏ hàng: đã duyệt, còn đang mua hàng, hoặc đang chờ duyệt.

### 3.2.8. Chức năng thống kê doanh thu
- Quản trị viên có thể xem báo cáo doanh thu theo các khoảng thời gian như ngày, tháng.
- Thống kê doanh thu được hiển thị bằng giao diện biểu đồ.
# Phần 4: Kết Luận Và Hướng Phát TriểnTriển

## 4.1. KẾT QUẢ ĐẠT ĐƯỢC
Sau khi hoàn thành dự án, nhóm chúng em đã đạt được những kết quả quan trọng như sau:
- Hiểu rõ hơn về các bước triển khai một dự án thực tế trong lĩnh vực phát triển website.
- Tích lũy thêm nhiều kiến thức và kinh nghiệm về lập trình web, đặc biệt là sử dụng PHP và MySQL.
- Xây dựng thành công một website bán đồng hồ với giao diện thân thiện, dễ sử dụng, và các chức năng cơ bản như quản lý sản phẩm, giỏ hàng.

## 4.2. ƯU NHƯỢC ĐIỂM

### Ưu điểm
- Giao diện thân thiện, dễ sử dụng, hỗ trợ tìm kiếm và mua sắm hiệu quả.
- Các tính năng cơ bản như quản lý sản phẩm, giỏ hàng hoạt động ổn định.
- Hệ thống có khả năng nâng cấp và tích hợp thêm các chức năng mới.

### Nhược điểm
Bên cạnh những thành công đạt được, nhóm chúng em cũng đã có những hạn chế nhất định trong đồ án như:
- Mặt hiển thị chưa thật tốt, các nút công cụ chưa được bố trí hợp lý.
- Chức năng thống kê chỉ có thống kê theo ngày hoặc tháng và chỉ có thống kê doanh thu, chưa có các thống kê khác như số lượng hàng bán được.
- Chưa tích hợp tính năng thanh toán trực tuyến.

## 4.3. HƯỚNG PHÁT TRIỂN

- **Tìm hiểu về các phương pháp quản lý bán hàng khác:**
  - Mở rộng các tính năng tiện ích như gợi ý sản phẩm dựa trên sở thích của khách hàng.
  - Tích hợp thanh toán trực tuyến qua nhiều cổng thanh toán phổ biến.

- **Nâng cấp hệ thống quản lý và phân tích dữ liệu:**
  - Cung cấp báo cáo chi tiết hơn về doanh thu, hành vi mua sắm và thói quen khách hàng.

- **Xây dựng các chương trình chăm sóc khách hàng:**
  - Tích điểm, giảm giá hoặc ưu đãi đặc biệt cho khách hàng thường xuyên để tăng sự gắn bó và khuyến khích họ mua sắm nhiều hơn.

## TÀI LIỆU THAM KHẢO

### Sách/Giáo trình
1. Đoàn Phước Miền & Phạm Thị Trúc Mai, *Thiết kế và lập trình web*, Trường Đại học Trà Vinh, 2017. 
2. Thomas Powell, *HTML & CSS: The Complete Reference, Fifth Edition*, 5th Edition, McGraw-Hill, 2010.
3. Phạm Quang Dũng, *Lập trình Java*, BM KHMT - Khoa CNTT - Trường ĐHNNI, 2017.

### Website
4. w3schools, "PHP Tutorial," [Online]. Available: [https://www.w3schools.com/php/default.asp](https://www.w3schools.com/php/default.asp). [Accessed 01 01 2025].

