<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@600&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
<style>
    :root {
        --navy: #1b2a41;
        --muted: #767676;
        --rule: #e6e6e6;
    }

    * { box-sizing: border-box; }

    body {
        font-family: 'Source Sans 3', 'Segoe UI', Arial, sans-serif;
        background: #fff;
        color: #2a2a2a;
        margin: 0;
    }

    nav {
        border-bottom: 1px solid var(--rule);
        padding: 18px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .nav-brand {
        color: var(--navy);
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.02em;
    }

    nav .links a {
        color: #444;
        text-decoration: none;
        margin-left: 28px;
        font-size: 14px;
    }

    nav .links a:hover {
        color: var(--navy);
    }

    .wrap {
        max-width: 620px;
        margin: 0 auto;
        padding: 64px 24px;
    }

    h1 {
        font-family: 'Source Serif 4', Georgia, serif;
        font-size: 26px;
        font-weight: 600;
        color: var(--navy);
        margin: 0 0 4px;
        text-align: center;
    }

    .subtitle {
        text-align: center;
        color: var(--muted);
        font-size: 14px;
        margin: 0 0 40px;
    }

    .field {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        padding: 14px 0;
        border-bottom: 1px solid var(--rule);
        gap: 24px;
    }

    .field:last-child { border-bottom: none; }

    .field .label {
        font-size: 13px;
        color: var(--muted);
        white-space: nowrap;
    }

    .field .value {
        font-size: 15px;
        color: #2a2a2a;
        text-align: right;
        font-weight: 500;
    }
</style>
</head>
<body>

<nav>
    <span class="nav-brand">Student Portal</span>
    <span class="links">
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </span>
</nav>

<div class="wrap">
    <h1><?= $name; ?></h1>
    <p class="subtitle">Student ID: <?= $student_id; ?></p>

    <div class="field"><span class="label">Course</span><span class="value"><?= $course; ?></span></div>
    <div class="field"><span class="label">Year Level</span><span class="value"><?= $year; ?></span></div>
    <div class="field"><span class="label">Section</span><span class="value"><?= $section; ?></span></div>
    <div class="field"><span class="label">Email Address</span><span class="value"><?= $email; ?></span></div>
    <div class="field"><span class="label">Address</span><span class="value"><?= $address; ?></span></div>
    <div class="field"><span class="label">Contact Number</span><span class="value"><?= $contact; ?></span></div>
    <div class="field"><span class="label">Hobbies</span><span class="value"><?= $hobbies; ?></span></div>
    <div class="field"><span class="label">About</span><span class="value"><?= $about; ?></span></div>
</div>

</body>
</html>