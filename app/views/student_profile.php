<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
        gap: 24px;
        background: #ffffff;
        border-bottom: 1px solid #dceaf5;
    }

    nav a {
        color: #4a90c4;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
    }

    nav a:hover {
        color: #2f6f9e;
        text-decoration: underline;
    }

    .wrap {
        max-width: 480px;
        margin: 48px auto;
        padding: 40px 32px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 24px -12px rgba(74, 144, 196, 0.25);
    }

    h1 {
        font-size: 22px;
        font-weight: 700;
        color: #2e3a46;
        margin: 0 0 4px;
        text-align: center;
    }

    .subtitle {
        color: #7c93a8;
        font-size: 14px;
        margin: 0 0 32px;
        text-align: center;
    }

    .field {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #eaf2f8;
        font-size: 14px;
    }

    .field:last-child { border-bottom: none; }

    .field .label {
        color: #7c93a8;
        font-weight: 600;
    }

    .field .value {
        color: #2e3a46;
        text-align: right;
    }
</style>
</head>
<body>

<nav>
    <a href="<?= site_url('student'); ?>">Home</a>
    <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
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