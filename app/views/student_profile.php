<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile</title>
<style>
    * { box-sizing: border-box; }

    body {
        font-family: -apple-system, 'Segoe UI', Arial, sans-serif;
        background: #ffffff;
        color: #1a1a1a;
        margin: 0;
    }

    nav {
        padding: 24px 32px;
        display: flex;
        gap: 24px;
    }

    nav a {
        color: #1a1a1a;
        text-decoration: none;
        font-size: 14px;
    }

    nav a:hover {
        text-decoration: underline;
    }

    .wrap {
        max-width: 480px;
        margin: 0 auto;
        padding: 80px 24px;
    }

    h1 {
        font-size: 22px;
        font-weight: 600;
        margin: 0 0 4px;
    }

    .subtitle {
        color: #767676;
        font-size: 14px;
        margin: 0 0 36px;
    }

    .field {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #eee;
        font-size: 14px;
    }

    .field:last-child { border-bottom: none; }

    .field .label {
        color: #767676;
    }

    .field .value {
        color: #1a1a1a;
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