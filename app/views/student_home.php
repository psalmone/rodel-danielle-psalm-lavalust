<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page_title ?? 'Student Home'; ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
<style>
    :root {
        --lavender: #cdb4f0;
        --lavender-deep: #a888e0;
        --mint: #bdeed4;
        --peach: #ffd7c2;
        --sky: #c3e4f7;
        --ink: #4a4458;
        --muted: #8a8398;
    }

    * { box-sizing: border-box; }

    body {
        font-family: 'Nunito', 'Segoe UI', Arial, sans-serif;
        background: linear-gradient(180deg, #faf6ff 0%, #f2f8fb 100%);
        color: var(--ink);
        margin: 0;
        min-height: 100vh;
    }

    nav {
        padding: 20px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .nav-brand {
        font-family: 'Quicksand', sans-serif;
        font-weight: 700;
        font-size: 16px;
        color: var(--lavender-deep);
    }

    nav .links a {
        color: var(--ink);
        text-decoration: none;
        margin-left: 22px;
        font-size: 14px;
        font-weight: 600;
        padding: 8px 16px;
        border-radius: 999px;
        transition: background 0.2s;
    }

    nav .links a:hover {
        background: #fff;
    }

    .wrap {
        max-width: 560px;
        margin: 0 auto;
        padding: 64px 24px 96px;
        text-align: center;
    }

    .badge {
        display: inline-block;
        background: var(--peach);
        color: #a3592f;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.03em;
        padding: 6px 16px;
        border-radius: 999px;
        margin-bottom: 20px;
    }

    h1 {
        font-family: 'Quicksand', sans-serif;
        font-size: 32px;
        font-weight: 700;
        color: var(--ink);
        margin: 0 0 10px;
    }

    .subtitle {
        color: var(--muted);
        font-size: 14px;
        margin: 0 0 36px;
    }

    .card {
        background: #fff;
        border-radius: 24px;
        padding: 36px 32px;
        box-shadow: 0 12px 30px -12px rgba(168, 136, 224, 0.35);
    }

    .card p {
        color: #5c5568;
        line-height: 1.75;
        font-size: 15px;
        margin: 0 0 26px;
    }

    .btn {
        display: inline-block;
        padding: 12px 30px;
        background: var(--lavender);
        color: #453a63;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        border-radius: 999px;
        transition: background 0.2s, transform 0.2s;
    }

    .btn:hover {
        background: var(--lavender-deep);
        color: #fff;
        transform: translateY(-1px);
    }

    .dots {
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .dots span {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        display: inline-block;
    }

    .dots span:nth-child(1) { background: var(--mint); }
    .dots span:nth-child(2) { background: var(--peach); }
    .dots span:nth-child(3) { background: var(--sky); }
</style>
</head>
<body>

<nav>
    <span class="nav-brand">🌸 Student Portal</span>
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

    <div class="dots"><span></span><span></span><span></span></div>
</div>

</body>
</html>