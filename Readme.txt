npm i; npm u; composer i; composer u;

1. Cấu hình và kết nối database
    Sử dụng Database remote thông số vào https://trello.com/ tham chiếu.
2. Cài đặt gói Breeze
    Kiểm tra tính năng các trang:
        Đăng ký
        Xác thực email khi đăng ký
        Đăng nhập
        Quên mật khẩu -> Gửi đến email -> Thay đổi mật khẩu
        Ghi nhớ đăng nhập bằng remember_token
        Trang Profile -> Thay đổi mật khẩu, thông tin
        Đăng xuất
3. Migration
    Dựa vào database đã phân tích và được lưu trữ trên https://vertabelo.com/ -> Tạo migration tất cả các bảng