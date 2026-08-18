<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page_title ?? 'Student Home'; ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
    * { box-sizing: border-box; }

    body {
        font-family: 'Nunito', -apple-system, 'Segoe UI', Arial, sans-serif;
        background: #eaf4fb;
        color: #2e3a46;
        margin: 0;
        min-height: 100vh;
    }

    nav {
        padding: 24px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #ffffff;
        border-bottom: 1px solid #dceaf5;
    }

    .nav-brand {
        font-weight: 700;
        font-size: 16px;
        color: #4a90c4;
    }

    nav .links a {
        color: #4a90c4;
        text-decoration: none;
        margin-left: 22px;
        font-size: 14px;
        font-weight: 600;
    }

    nav .links a:hover {
        color: #2f6f9e;
        text-decoration: underline;
    }

    .wrap {
        max-width: 560px;
        margin: 0 auto;
        padding: 64px 24px 96px;
        text-align: center;
    }

    .badge {
        display: inline-block;
        background: #d6ecf9;
        color: #2f6f9e;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.03em;
        padding: 6px 16px;
        border-radius: 999px;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 30px;
        font-weight: 800;
        color: #2e3a46;
        margin: 0 0 10px;
    }

    .subtitle {
        color: #7c93a8;
        font-size: 14px;
        margin: 0 0 36px;
    }

    .card {
        background: #ffffff;
        border-radius: 16px;
        padding: 36px 32px;
        box-shadow: 0 8px 24px -12px rgba(74, 144, 196, 0.25);
    }

    .card p {
        color: #4a5b6b;
        line-height: 1.75;
        font-size: 15px;
        margin: 0 0 26px;
    }

    .btn {
        display: inline-block;
        padding: 12px 30px;
        background: #4a90c4;
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        border-radius: 999px;
        transition: background 0.2s, transform 0.2s;
    }

    .btn:hover {
        background: #2f6f9e;
        transform: translateY(-1px);
    }
</style>
</head>
<body>

<nav>
    <span class="nav-brand">Student Portal</span>
    <span class="links">
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Profile</a>
    </span>
</nav>

<div class="wrap">
    <span class="badge">Web Systems &amp; Technologies</span>
    <h1><?= $page_title ?? 'My Student Portal'; ?></h1>
    <p class="subtitle">LavaLust Laboratory Activity</p>

    <div class="card">
        <p>
            Welcome! This is my Student Information System, built with the
            LavaLust PHP Framework to practice routing, controllers, views,
            and middleware.
        </p>
        <a class="btn" href="<?= site_url('student/profile'); ?>">View My Profile</a>
    </div>
</div>

</body>
</html>