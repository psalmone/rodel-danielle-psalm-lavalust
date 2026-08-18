<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page_title ?? 'Student Home'; ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
<style>
    :root {
        --navy: #1b2a41;
        --navy-deep: #121d2e;
        --gold: #b08d57;
        --gold-light: #d9c39a;
        --paper: #f6f4ef;
        --ink: #2a2a2a;
        --muted: #6b6b6b;
        --rule: #e2ddd1;
    }

    * { box-sizing: border-box; }

    body {
        font-family: 'Source Sans 3', 'Segoe UI', Arial, sans-serif;
        background: var(--paper);
        color: var(--ink);
        margin: 0;
    }

    nav {
        background: var(--navy);
        border-bottom: 3px solid var(--gold);
        padding: 16px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .nav-brand {
        color: var(--gold-light);
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 15px;
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }

    nav .links a {
        color: #eef0f4;
        text-decoration: none;
        margin-left: 28px;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.02em;
        padding-bottom: 4px;
        border-bottom: 1px solid transparent;
        transition: border-color 0.2s, color 0.2s;
    }

    nav .links a:hover {
        color: var(--gold-light);
        border-bottom-color: var(--gold);
    }

    .wrap {
        max-width: 720px;
        margin: 0 auto;
        padding: 72px 24px 96px;
    }

    .eyebrow {
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.18em;
        font-size: 12px;
        color: var(--gold);
        font-weight: 600;
        margin-bottom: 14px;
    }

    .seal {
        width: 64px;
        height: 64px;
        margin: 0 auto 24px;
        border: 2px solid var(--gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 20px;
        font-weight: 700;
        color: var(--navy);
        background: #fff;
    }

    h1 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 36px;
        font-weight: 700;
        text-align: center;
        color: var(--navy);
        margin: 0 0 10px;
    }

    .subtitle {
        text-align: center;
        color: var(--muted);
        font-size: 15px;
        margin: 0 0 40px;
    }

    .divider {
        width: 72px;
        height: 2px;
        background: var(--gold);
        margin: 0 auto 40px;
    }

    .panel {
        background: #fff;
        border: 1px solid var(--rule);
        border-top: 3px solid var(--navy);
        padding: 40px 44px;
        text-align: center;
    }

    .panel p {
        color: #444;
        line-height: 1.75;
        font-size: 15.5px;
        margin: 0 0 28px;
    }

    .btn {
        display: inline-block;
        padding: 13px 34px;
        background: var(--navy);
        color: #f6f4ef;
        text-decoration: none;
        font-size: 13.5px;
        font-weight: 600;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        border: 1px solid var(--navy);
        transition: background 0.2s, color 0.2s;
    }

    .btn:hover {
        background: transparent;
        color: var(--navy);
    }

    footer {
        text-align: center;
        color: var(--muted);
        font-size: 12px;
        letter-spacing: 0.04em;
        margin-top: 40px;
    }
</style>
</head>
<body>

<nav>
    <span class="nav-brand">Student Records Office</span>
    <span class="links">
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </span>
</nav>

<div class="wrap">
    <div class="seal">SP</div>
    <p class="eyebrow">Official Student Portal</p>
    <h1><?= $page_title ?? 'My Student Portal'; ?></h1>
    <p class="subtitle">Web Systems and Technologies &middot; LavaLust Laboratory Activity</p>
    <div class="divider"></div>

    <div class="panel">
        <p>
            Welcome to the Student Information System. This portal was developed
            as a laboratory exercise demonstrating routing, controllers, views,
            and middleware within the LavaLust PHP Framework.
        </p>
        <a class="btn" href="<?= site_url('student/profile'); ?>">View Student Profile</a>
    </div>

    <footer>LavaLust MVC Framework &nbsp;&bull;&nbsp; Laboratory Activity No. 3</footer>
</div>

</body>
</html>