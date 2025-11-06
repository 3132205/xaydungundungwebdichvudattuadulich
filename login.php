<?php
session_start();

// Nếu đã đăng nhập -> chuyển về trang chính
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

// Kiểm tra khi nhấn nút Đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Tài khoản mẫu
    if ($username === 'admin' && $password === '12345') {
        $_SESSION['user'] = $username;
        header('Location: index.php');
        exit();
    } else {
        $error = "❌ Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập | Tour Booking</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #e0e5ec;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            width: 360px;
            padding: 40px;
            border-radius: 20px;
            background: #e0e5ec;
            box-shadow:
                8px 8px 16px #b8b9be,
                -8px -8px 16px #ffffff;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 25px;
            font-weight: 600;
            color: #555;
        }

        .login-box .input-field {
            position: relative;
            margin-bottom: 20px;
        }

        .login-box input {
            width: 100%;
            padding: 12px 15px;
            border: none;
            outline: none;
            border-radius: 12px;
            font-size: 15px;
            color: #333;
            background: #e0e5ec;
            box-shadow:
                inset 4px 4px 8px #b8b9be,
                inset -4px -4px 8px #ffffff;
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
            color: #fff;
            background: linear-gradient(145deg, #6c63ff, #48c6ef);
            box-shadow: 4px 4px 8px #b8b9be, -4px -4px 8px #ffffff;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-box button:hover {
            transform: translateY(-3px);
            background: linear-gradient(145deg, #5848ff, #33bbee);
        }

        .login-box .options {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            color: #777;
            margin-top: 10px;
        }

        .login-box .social {
            margin-top: 25px;
        }

        .social p {
            font-size: 13px;
            color: #666;
            margin-bottom: 10px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #e0e5ec;
            box-shadow:
                4px 4px 8px #b8b9be,
                -4px -4px 8px #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #555;
            font-size: 16px;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-icons a:hover {
            background: #48c6ef;
            color: #fff;
        }

        .error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-box">
        <h2>Welcome back</h2>
        <form method="POST">
            <div class="input-field">
                <input type="text" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <button type="submit">Sign In</button>
            <?php if (!empty($error)): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>
            <div class="options">
                <label><input type="checkbox"> Ghi nhớ</label>
                <a href="#">Quên mật khẩu?</a>
            </div>
        </form>
        <div class="social">
            <p>Hoặc đăng nhập bằng</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="options" style="justify-content:center; margin-top: 15px;">
            <p>Chưa có tài khoản? <a href="#">Đăng ký</a></p>
        </div>
    </div>
</body>
</html>
