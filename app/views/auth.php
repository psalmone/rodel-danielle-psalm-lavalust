<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login – Product Manager</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #1e3a5f 0%, #0f2440 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .card {
    background: #fff;
    border-radius: 16px;
    padding: 48px 40px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.3);
  }
  .logo {
    text-align: center;
    margin-bottom: 32px;
  }
  .logo h1 {
    font-size: 22px;
    font-weight: 700;
    color: #1e3a5f;
    letter-spacing: -0.5px;
  }
  .logo p {
    font-size: 13px;
    color: #94a3b8;
    margin-top: 4px;
  }
  .alert-error {
    background: #fef2f2;
    border: 1px solid #fecaca;
    color: #b91c1c;
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 13px;
    margin-bottom: 20px;
  }
  .field { margin-bottom: 18px; }
  label {
    display: block;
    font-size: 13px;
    font-weight: 500;
    color: #374151;
    margin-bottom: 6px;
  }
  input {
    width: 100%;
    padding: 11px 14px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 14px;
    font-family: inherit;
    outline: none;
    transition: border-color 0.2s;
  }
  input:focus { border-color: #1e3a5f; box-shadow: 0 0 0 3px rgba(30,58,95,0.08); }

  .password-wrap {
    position: relative;
  }
  .password-wrap input {
    padding-right: 44px;
  }
  .toggle-eye {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
    width: auto;
    margin: 0;
    color: #94a3b8;
    display: flex;
    align-items: center;
    transition: color 0.2s;
  }
  .toggle-eye:hover { color: #1e3a5f; background: none; }

  .btn-submit {
    width: 100%;
    padding: 12px;
    background: #1e3a5f;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    font-family: inherit;
    cursor: pointer;
    margin-top: 4px;
    transition: background 0.2s;
  }
  .btn-submit:hover { background: #16324f; }
</style>
</head>
<body>
<div class="card">
  <div class="logo">
    <h1>Product Manager</h1>
    <p>Sign in to manage your products</p>
  </div>

  <?php if (isset($_GET['error'])): ?>
  <div class="alert-error">Invalid username or password. Please try again.</div>
  <?php endif; ?>

  <form method="POST" action="<?= site_url('login/do_login'); ?>">
    <div class="field">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required autofocus>
    </div>
    <div class="field">
      <label for="password">Password</label>
      <div class="password-wrap">
        <input type="password" id="password" name="password" placeholder="Enter password" required>
        <button type="button" class="toggle-eye" id="togglePassword" aria-label="Toggle password visibility">
          <!-- Eye open icon -->
          <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
          </svg>
          <!-- Eye off icon -->
          <svg id="icon-eye-off" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="display:none;">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0 012.06-3.45M6.64 6.636A9.97 9.97 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.97 9.97 0 01-1.357 2.62M6.64 6.636L3 3m3.64 3.636l10.72 10.728M17.36 17.364L21 21"/>
          </svg>
        </button>
      </div>
    </div>
    <button type="submit" class="btn-submit">Sign In</button>
  </form>
</div>

<script>
  const toggleBtn = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');
  const iconEye = document.getElementById('icon-eye');
  const iconEyeOff = document.getElementById('icon-eye-off');

  toggleBtn.addEventListener('click', function () {
    const isHidden = passwordInput.type === 'password';
    passwordInput.type = isHidden ? 'text' : 'password';
    iconEye.style.display = isHidden ? 'none' : 'block';
    iconEyeOff.style.display = isHidden ? 'block' : 'none';
  });
</script>
</body>
</html>
