<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Pesantren Thayyiba</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --primary: #B71C1C;
            --primary-light: #E53935;
            --primary-dark: #7F0000;
            --bg-body: #f8fafc;
            --bg-sidebar: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            display: flex;
            min-height: 100vh;
        }

        a { text-decoration: none; color: inherit; }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background-color: var(--bg-sidebar);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            z-index: 100;
        }

        .sidebar-header {
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-header .logo {
            width: 40px; height: 40px;
            background: var(--primary);
            color: white;
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; font-weight: bold;
        }
        .sidebar-header h2 { font-size: 16px; font-weight: 700; color: var(--primary); }
        .sidebar-header p { font-size: 12px; color: var(--text-muted); }

        .sidebar-menu { padding: 20px 0; overflow-y: auto; flex: 1; }
        .sidebar-menu ul { list-style: none; }
        .sidebar-menu li a {
            display: flex; align-items: center; gap: 12px;
            padding: 12px 24px;
            color: var(--text-muted);
            font-size: 14px; font-weight: 500;
            transition: all 0.2s;
        }
        .sidebar-menu li a:hover, .sidebar-menu li a.active {
            background-color: #f1f5f9;
            color: var(--primary);
            border-right: 3px solid var(--primary);
        }
        .sidebar-menu li a i { font-size: 18px; width: 24px; text-align: center; }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 260px;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .topbar {
            height: 70px;
            background-color: white;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            position: sticky; top: 0; z-index: 90;
        }

        .user-profile {
            display: flex; align-items: center; gap: 10px;
        }
        .user-profile .avatar {
            width: 36px; height: 36px;
            background: var(--primary-light); color: white;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
        }

        .content-area {
            padding: 30px;
            flex: 1;
        }

        .page-header {
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 24px;
        }
        .page-title { font-size: 24px; font-weight: 700; }

        /* Card & Table */
        .card {
            background: white;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            padding: 24px;
            margin-bottom: 24px;
        }

        .table-responsive { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 16px; text-align: left; border-bottom: 1px solid var(--border); font-size: 14px; }
        th { font-weight: 600; color: var(--text-muted); background: #f8fafc; }
        
        /* Buttons */
        .btn {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px; font-weight: 500;
            cursor: pointer; border: none; transition: 0.2s;
        }
        .btn-primary { background: var(--primary); color: white; }
        .btn-primary:hover { background: var(--primary-dark); }
        .btn-danger { background: #ef4444; color: white; }
        .btn-sm { padding: 6px 12px; font-size: 12px; }
        
        .action-btns { display: flex; gap: 6px; }

        /* Forms */
        .form-group { margin-bottom: 20px; }
        .form-label { display: block; margin-bottom: 8px; font-size: 14px; font-weight: 500; }
        .form-control {
            width: 100%; padding: 10px 14px;
            border: 1px solid var(--border); border-radius: 8px;
            font-family: inherit; font-size: 14px;
        }
        .form-control:focus { outline: none; border-color: var(--primary); }

        .alert { padding: 16px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; }
        .alert-success { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
        .alert-danger { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }

        .badge { padding: 4px 10px; border-radius: 50px; font-size: 12px; font-weight: 600; }
        .badge-success { background: #dcfce7; color: #166534; }
        .badge-warning { background: #fef9c3; color: #854d0e; }
        .badge-danger { background: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">ط</div>
            <div>
                <h2>Pesantren Thayyiba</h2>
                <p>Admin Panel</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="{{ route('admin.berita.index') }}" class="{{ request()->routeIs('admin.berita.*') ? 'active' : '' }}"><i class="fas fa-newspaper"></i> Berita</a></li>
                <li><a href="{{ route('admin.galeri.index') }}" class="{{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}"><i class="fas fa-images"></i> Galeri</a></li>
                <li><a href="{{ route('admin.program.index') }}" class="{{ request()->routeIs('admin.program.*') ? 'active' : '' }}"><i class="fas fa-graduation-cap"></i> Program</a></li>
                <li><a href="{{ route('admin.fasilitas.index') }}" class="{{ request()->routeIs('admin.fasilitas.*') ? 'active' : '' }}"><i class="fas fa-building"></i> Fasilitas</a></li>
                <li><a href="{{ route('admin.psb.index') }}" class="{{ request()->routeIs('admin.psb.*') ? 'active' : '' }}"><i class="fas fa-user-plus"></i> PSB & Pendaftar</a></li>
            </ul>
        </div>
        <div style="padding: 20px; border-top: 1px solid var(--border);">
            <a href="{{ route('home') }}" target="_blank" style="display: flex; align-items: center; gap: 10px; color: var(--text-muted); font-size: 14px;">
                <i class="fas fa-external-link-alt"></i> Lihat Website
            </a>
        </div>
    </aside>

    <main class="main-content">
        <header class="topbar">
            <div>
                <h3 style="font-size: 16px; font-weight: 600; color: var(--text-muted);">
                    @yield('header_title', 'Admin Dashboard')
                </h3>
            </div>
            <div class="user-profile">
                <div class="avatar"><i class="fas fa-user"></i></div>
                <div style="margin-right: 15px;">
                    <div style="font-size: 14px; font-weight: 600;">{{ Auth::user()->name ?? 'Admin' }}</div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-sign-out-alt"></i> Keluar</button>
                </form>
            </div>
        </header>

        <div class="content-area">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            
            @yield('content')
        </div>
    </main>

    @yield('scripts')
</body>
</html>
