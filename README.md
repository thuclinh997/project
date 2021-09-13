# website
php laravel
# thiết kế và xây dựng bởi: Thục Linh - Phước Long
<hr>
<ol>
<li>Truy cập vào C:/xampp/htdocs, bật git bash và clone repository bằng câu lệnh : git clone https://github.com/thuclinh997/project.git</li>
<li>Khởi động XAMPP.</li>
    <li>Truy cập vào repository project và sử dụng câu lệnh : composer install --ignore-platform-reqs để cài đặt.</li>
    <li>Tạo file .env và copy dữ liệu file .env.example sang, chỉnh sửa kết nối đến database.</li>
    <li>Tạo key cho ứng dụng bằng câu lệnh : php artisan key:generate</li>
    <li>Chạy php artisan migrate để tự động tạo bảng trong database đã thiết lập.</li>
    <li>Chạy php artisan db:seed --class=UsersTableSeeder để seed dữ liệu vào bảng.</li>
    <li>Chạy php artisan serve để khởi tạo server ảo.</li>
    <li>Truy cập vào đường link đã tạo ở câu lệnh trên và tận hưởng thành q</li>
</ol>
