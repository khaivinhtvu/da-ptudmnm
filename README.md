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
# Phần 1: Cơ SSở Lý Thuyết

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

