<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Pesantren Thayyiba</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f1f5f9;
            height: 100vh;
            display: flex; align-items: center; justify-content: center;
            margin: 0;
        }
        .login-box {
            background: white;
            width: 100%; max-width: 400px;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .logo-area { text-align: center; margin-bottom: 30px; }
        .logo-area .icon {
            width: 60px; height: 60px;
            background: #B71C1C; color: white;
            font-size: 30px; font-weight: bold;
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 16px; margin-bottom: 16px;
        }
        .logo-area h2 { font-size: 24px; color: #1e293b; margin-bottom: 5px; }
        .logo-area p { color: #64748b; font-size: 14px; }
        
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-size: 14px; font-weight: 500; color: #334155; }
        .form-control {
            width: 100%; padding: 12px 16px;
            border: 1px solid #cbd5e1; border-radius: 8px;
            font-size: 15px; box-sizing: border-box; outline: none;
        }
        .form-control:focus { border-color: #B71C1C; }
        
        .btn-login {
            width: 100%; padding: 14px;
            background: #B71C1C; color: white;
            border: none; border-radius: 8px;
            font-size: 16px; font-weight: 600; cursor: pointer;
            margin-top: 10px; transition: 0.2s;
        }
        .btn-login:hover { background: #7F0000; }
        
        .alert { background: #fee2e2; color: #991b1b; padding: 12px; border-radius: 8px; font-size: 14px; margin-bottom: 20px; border: 1px solid #fecaca; }
    </style>
</head>
<body>

    <div class="login-box">
        <div class="logo-area">
            <div class="icon">ط</div>
            <h2>Admin Panel</h2>
            <p>Pesantren Thayyiba IIBS</p>
        </div>

        @if($errors->any())
        <div class="alert">
            {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email / Username</label>
                <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="thayyibaiibs" required autofocus>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            
            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 20px; font-size: 14px; color: #64748b;">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" style="margin:0; font-weight:400;">Ingat Saya</label>
            </div>

            <button type="submit" class="btn-login">Login ke Dashboard</button>
        </form>
    </div>

</body>
</html>
