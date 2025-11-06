

##  Ứng dụng Web Quản Lý Dịch Vụ Đặt Tour Du Lịch

###  Giới thiệu

Đây là bài tập lớn môn **Phần mềm mã nguồn mở**, xây dựng một **ứng dụng web quản lý dịch vụ đặt tour du lịch**.
Hệ thống cho phép người dùng xem thông tin tour, đăng nhập quản trị viên, và quản lý nội dung cơ bản trên website.

---

###  Công nghệ sử dụng

* **Ngôn ngữ lập trình:** PHP (thuần)
* **Cơ sở dữ liệu:** MySQL
* **Máy chủ cục bộ:** XAMPP
* **Công cụ phát triển:** Visual Studio Code
* **Frontend:** HTML, CSS, JavaScript (template tĩnh chuyển sang PHP)

---

###  Cấu trúc thư mục

```
tour-booking/
│
├── assets/              # Chứa CSS, JS, hình ảnh
│   ├── css/
│   ├── js/
│   └── img/
│
├── includes/            # Các file include chung
│   ├── db.php           # Kết nối cơ sở dữ liệu
│   ├── header.php       # Thanh điều hướng
│   └── footer.php       # Chân trang
│
├── index.php            # Trang chủ
├── about.php            # Trang giới thiệu
├── login.php            # Đăng nhập
└── README.md            # Mô tả dự án
```

---

###  Tài khoản mẫu (tạm thời)

| Tên đăng nhập | Mật khẩu |
| ------------- | -------- |
| `admin`       | `12345`  |

---

###  Cách chạy dự án

1. Cài **XAMPP** → chạy **Apache** và **MySQL**
2. Giải nén dự án vào thư mục:

   ```
   C:\xampp\htdocs\tour-booking
   ```
3. Mở **phpMyAdmin** tại [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
4. Tạo cơ sở dữ liệu:

   ```sql
   CREATE DATABASE tour_db;
   ```
5. Import file `tour_db.sql` (nếu có) vào database vừa tạo
6. Truy cập web:
    [http://localhost/tour-booking](http://localhost/tour-booking)

---

### Chức năng hiện tại

* [x] Trang chủ hiển thị giao diện cơ bản
* [x] Trang đăng nhập quản trị (`login.php`)
* [x] Kiểm tra tài khoản admin mẫu
* [x] Chuyển hướng sau khi đăng nhập
* [x] Trang “About” hiển thị thông tin giới thiệu
* [ ] <img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/aeea7779-326e-4c4d-803a-5fdc5482f1b8" />
<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/7578ddda-ae9f-47b7-8e18-9f9e15b67f48" />
<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/461ee42b-ed81-4c99-bb0a-cde53c6d594b" />




---

###  Dự kiến phát triển tiếp

* [ ] Quản lý danh sách tour du lịch
* [ ] Chức năng đặt tour cho khách hàng
* [ ] Trang quản trị quản lý tour, người dùng, đặt chỗ
* [ ] Thêm giao diện responsive hoàn chỉnh
* [ ] Tích hợp thanh toán và xác nhận tour

---

###  Nhóm thực hiện

** ( nhóm10)**
* Lớp: **(cntt17-11)**
* Môn học: **Phần mềm mã nguồn mở**


---

###  Ghi chú

> Dự án hiện đang trong quá trình hoàn thiện.
> Một số chức năng quản lý và đặt tour sẽ được cập nhật trong phiên bản tiếp theo.

---


