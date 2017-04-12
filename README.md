# simpleBlog
Simple Blog with Laravel 5.3 - Version 1.0

Features:
- Đăng Ký / Đăng Nhập Sử dụng Cartalyst Sentinel
- Phân quyền sử dụng Cartalyst Sentinel (Trong Project sử dụng quyền 1 - admin và 2 - client). Mặc địh khi đăng ký sẽ là Client
- Kích hoạt tài khoản qua Email dùng Cartalyst Sentinel
- Quản Lý Danh Mục
- Quản Lý Bài Đăng
- Quảng Lý Người Dùng 
- Quản Lý Bình Luận | Đăng Nhập mới có thể bình luận và xem bình luận. Chưa đăng nhập chỉ có thể xem bình luận
- Chức năng tìm kiếm
- Trang home đổ dữ liệu từ DB
- Giao diện đơn giản, sử dụng Bootraps

Cách cài đặt:
- Clone project về.
- Cài đặt Sentinel bằng 2 dòng lệnh
    + composer require cartalyst/sentinel "2.0.*"
    + php artisan vendor:publish --provider="Cartalyst\Sentinel\Laravel\SentinelServiceProvider"
- Thêm bảng Role với 2 thông số: 1 - admin, 2 - client
- Tạo một nick mới và kích hoạt.
- Vào phpmyadmin set quyền lên bằng 2. 

Điểm Yếu:
- Chưa phân trang cho Comment
- Search chưa tối ưu
- Chưa làm trang thống kê

Website: http://htknguyen.com/
