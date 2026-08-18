<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root {
        --navy: #1b2a41;
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
        max-width: 700px;
        margin: 0 auto;
        padding: 64px 24px 96px;
    }

    .eyebrow {
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.18em;
        font-size: 12px;
        color: var(--gold);
        font-weight: 600;
        margin-bottom: 12px;
    }

    h1 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 32px;
        font-weight: 700;
        text-align: center;
        color: var(--navy);
        margin: 0 0 32px;
    }

    .record {
        background: #fff;
        border: 1px solid var(--rule);
        border-top: 3px solid var(--navy);
    }

    .record-head {
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 32px 40px;
        border-bottom: 1px dashed var(--rule);
    }

    .avatar {
        width: 68px;
        height: 68px;
        border-radius: 50%;
        background: var(--navy);
        color: var(--gold-light);
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 24px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .record-head .name {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 22px;
        color: var(--navy);
        margin: 0 0 4px;
    }

    .record-head .id-tag {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.04em;
        color: var(--navy);
        background: #f1ece0;
        border: 1px solid var(--gold-light);
        padding: 3px 10px;
        border-radius: 3px;
    }

    .record-body {
        padding: 8px 40px 12px;
    }

    .field {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        padding: 15px 0;
        border-bottom: 1px solid var(--rule);
        gap: 24px;
    }

    .field:last-child { border-bottom: none; }

    .field .label {
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--muted);
        white-space: nowrap;
    }

    .field .value {
        font-size: 15px;
        color: var(--ink);
        text-align: right;
    }

    .record-foot {
        padding: 18px 40px;
        background: #faf8f4;
        border-top: 1px solid var(--rule);
        text-align: center;
        font-size: 11.5px;
        color: var(--muted);
        letter-spacing: 0.03em;
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
    <p class="eyebrow">Official Record</p>
    <h1>Student Information</h1>

    <div class="record">
        <div class="record-head">
            <div class="avatar"><?= strtoupper(substr($name, 0, 1)); ?></div>
            <div>
                <p class="name"><?= $name; ?></p>
                <span class="id-tag">ID No. <?= $student_id; ?></span>
            </div>
        </div>

        <div class="record-body">
            <div class="field"><span class="label">Course</span><span class="value"><?= $course; ?></span></div>
            <div class="field"><span class="label">Year Level</span><span class="value"><?= $year; ?></span></div>
            <div class="field"><span class="label">Section</span><span class="value"><?= $section; ?></span></div>
            <div class="field"><span class="label">Email Address</span><span class="value"><?= $email; ?></span></div>
            <div class="field"><span class="label">Address</span><span class="value"><?= $address; ?></span></div>
            <div class="field"><span class="label">Contact Number</span><span class="value"><?= $contact; ?></span></div>
            <div class="field"><span class="label">Hobbies</span><span class="value"><?= $hobbies; ?></span></div>
            <div class="field"><span class="label">About</span><span class="value"><?= $about; ?></span></div>
        </div>

        <div class="record-foot">This record was generated by the Student Information System &middot; LavaLust Framework</div>
    </div>

    <footer>Web Systems and Technologies &nbsp;&bull;&nbsp; Laboratory Activity No. 3</footer>
</div>

</body>
</html>