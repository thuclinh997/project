# website
php laravel
# thiết kế và xây dựng bởi: Thục Linh - Phước Long
----------------------------------------------------------
PHP LARAVEL CRUD
<li>Truy cập vào C:/xampp/htdocs, bật git bash và clone repository bằng câu lệnh : git clone https://github.com/thuclinh997/project.git</li>
Khởi động XAMPP.
Truy cập vào repository project và sử dụng câu lệnh : composer install --ignore-platform-reqs để cài đặt.
Tạo file .env và copy dữ liệu file .env.example sang, chỉnh sửa kết nối đến database.
Tạo key cho ứng dụng bằng câu lệnh : php artisan key:generate
Chạy php artisan migrate để tự động tạo bảng trong database đã thiết lập.
Chạy php artisan db:seed --class=UsersTableSeeder để seed dữ liệu vào bảng.
Chạy php artisan serve để khởi tạo server ảo.
Truy cập vào đường link đã tạo ở câu lệnh trên và tận hưởng thành q
