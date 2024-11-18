<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your app CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 400px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container form button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container form button:hover {
            background-color: #218838;
        }
        .login-container .forgot-password {
            text-align: right;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        .error-messages {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>BRAVO</h1>
        <h4 style="text-align: center;">Công ty Cổ phần Phần mềm BRAVO</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="MaNV">Tên đăng nhập:</label>
            <input 
                type="text" 
                name="MaNV" 
                id="MaNV" 
                placeholder="Nhập mã nhân viên" 
                value="{{ old('MaNV') }}" 
                required
            >
            
            @if ($errors->has('MaNV'))
                <div class="error-messages">{{ $errors->first('MaNV') }}</div>
            @endif
            
            <label for="password">Mật khẩu:</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                placeholder="Nhập mật khẩu" 
                required
            >
            
            @if ($errors->has('password'))
                <div class="error-messages">{{ $errors->first('password') }}</div>
            @endif
            
            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Ghi nhớ mật khẩu</label>
            </div>
            <div class="forgot-password">
                <a href="#">Quên mật khẩu?</a>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>

        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
