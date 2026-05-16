ĐỀ TÀI: WEBSITE QUẢN LÝ SHOP BÁN GẤU BÔNG (TEDDY SHOP)
1. Giới thiệu dự án
Dự án Teddy Shop là một hệ thống website thương mại điện tử chuyên kinh doanh các mặt hàng gấu bông, thú nhồi bông. Website được xây dựng trên nền tảng WordPress kết hợp với các công nghệ mã nguồn mở hiện đại nhằm tối ưu hóa quy trình bán hàng cho các cửa hàng vừa và nhỏ. Hệ thống tập trung vào tính tiện lợi cho khách vãng lai, tích hợp các công cụ Marketing và thanh toán tự động giúp tăng trải nghiệm mua sắm.
2. Danh sách thành viên và MSSV
- Hoàng Nam Khánh: MSV 23810310055
- Nguyễn Thị Thùy Nhâm: MSV 23810310071
- Phạm Ngọc Nhi: MSV 23810310008
3. Phân công nhiệm vụ cụ thể: 
* Nguyễn Thị Thùy Nhâm:
- Tùy biến layout (Trang chủ, Danh mục) và Dashboard riêng biệt cho Admin/User.
- Tích hợp Chatbot hỗ trợ khách hàng theo thời gian thực.
- Cài đặt CSDL, cấu hình Localhost (XAMPP) và Deploy website lên môi trường thực tế.
* Hoàng Nam Khánh:
- Tích hợp cổng thanh toán tự động tạo mã QR theo số tiền.
- Xử lý luồng Giỏ hàng, Checkout và hệ thống Email thông báo tự động.
- Quản lý đơn hàng trên hệ thống Admin.
* Phạm Ngọc Nhi:
- Lập trình logic Vòng quay may mắn (chỉ áp dụng mã giảm giá cho đơn từ 500.000 VNĐ).
- Xây dựng cây danh mục và thiết lập các thuộc tính sản phẩm.
- Quản trị nội dung (đăng sản phẩm, bài viết) và theo dõi số lượng tồn kho.
4. Công nghệ sử dụng
Hệ thống vận hành dựa trên các công nghệ mã nguồn mở (Open-source):
- Ngôn ngữ xử lý: PHP 8.x.
- Hệ quản trị CSDL: MySQL.
- Máy chủ Web: Apache (trong bộ XAMPP).
- Nền tảng quản trị nội dung: WordPress CMS.
- Thương mại điện tử: Plugin WooCommerce.
- Tiện ích mở rộng: 
+ WooCommerce: Nền tảng lõi quản lý cửa hàng và sản phẩm.
+ Elementor: Trình kiến tạo và thiết kế giao diện Frontend.
+ WP Mail SMTP: Hỗ trợ cấu hình gửi email thông báo đơn hàng tự động.
+ Tawk.to: Hỗ trợ trực tuyến thời gian thực.
+ WP Lucky Wheel: Vòng quay trúng thưởng .
+ VietQR Payment: Cổng thanh toán QR tự động.
+ WPForms: Tạo biểu mẫu liên hệ.
5. Hướng dẫn cài đặt
Để cài đặt hệ thống trên môi trường cục bộ (Localhost), thực hiện các bước sau:
- Chuẩn bị môi trường: Cài đặt và khởi động phần mềm XAMPP. Mở XAMPP, nhấn Start dịch vụ Apache và MySQL.

- Tải mã nguồn:
+ Mở Terminal/Git Bash tại thư mục C:/xampp/htdocs/.
+ Chạy lệnh: git clone https://github.com/nhamne/teddy-shop.git.
- Thiết lập Cơ sở dữ liệu:
+ Truy cập http://localhost/phpmyadmin/.
+ Tạo database mới tên là teddy_db với định dạng utf8mb4_unicode_ci.
+ Chọn database vừa tạo, nhấn Import, chọn file teddy_db.sql trong thư mục code và nhấn Import.
- Cấu hình kết nối: 
+ Mở file wp-config.php trong thư mục dự án.
+ Kiểm tra các dòng DB_NAME, DB_USER, DB_PASSWORD để đảm bảo khớp với cấu hình máy chủ cục bộ của bạn.
6. Hướng dẫn chạy Project
- Mở XAMPP, nhấn Start dịch vụ Apache và MySQL.
- Truy cập website (Frontend): http://localhost/teddy-shop/.
- Truy cập trang quản trị (Admin): http://localhost/teddy-shop/wp-admin/.
7. Tài khoản quản trị (Demo)
- Tên đăng nhập: admin
- Mật khẩu: 123456
  
8.Hình ảnh minh họa hệ thống

<img width="1901" height="907" alt="trang chu" src="https://github.com/user-attachments/assets/6b54ad3e-af1b-4366-88e2-2969e68e5caa" />


Hình 1: Giao diện trang chủ và danh mục sản phẩm.

<img width="1918" height="870" alt="vong quay" src="https://github.com/user-attachments/assets/355d58e4-d579-47bf-87e4-397044b61ee3" />

Hình 2: Chức năng Vòng quay may mắn kích hoạt khi đơn hàng trên 500k.

<img width="1901" height="867" alt="thanh toan QR" src="https://github.com/user-attachments/assets/9190a0d0-5647-44f2-90cd-062a9ffc6241" />

Hình 3: Mã QR thanh toán tự động tạo theo giá trị đơn hàng thực tế.

<img width="455" height="667" alt="chatbot" src="https://github.com/user-attachments/assets/2cb4bfd4-ca87-4c29-bbb7-b2d77105edd8" />

Hình 4: Giao diện Chatbox tư vấn

9. Đường dẫn Video Demo và Deploy Online
Video Demo  hệ thống: https://drive.google.com/drive/folders/1bKGh2zAGfV2O9fPRBECLeF2iVWZrh5TE?usp=drive_link

Link Deploy Online: https://dev-teddy-shop.pantheonsite.io/
