<?php
/**
 * Database Seeder — Adds missing columns + seeds users table
 * Run with: php seed.php
 */

// ── Load .env ────────────────────────────────────────────────────────────────
$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#') continue;
        if (str_contains($line, '=')) {
            [$key, $val] = explode('=', $line, 2);
            putenv(trim($key) . '=' . trim($val));
        }
    }
}

$host     = getenv('DB_HOST')     ?: 'localhost';
$port     = getenv('DB_PORT')     ?: '3306';
$user     = getenv('DB_USER')     ?: getenv('DB_USERNAME') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$dbname   = getenv('DB_NAME')     ?: 'defaultdb';

// ── Connect ───────────────────────────────────────────────────────────────────
$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    echo "[OK] Connected to {$host}:{$port}/{$dbname}\n\n";
} catch (PDOException $e) {
    echo "[FAIL] Connection failed: " . $e->getMessage() . "\n";
    exit(1);
}

// ── Step 1: Add missing columns if they don't exist ──────────────────────────
echo "--- Checking schema ---\n";

$columns = $pdo->query("SHOW COLUMNS FROM `users`")->fetchAll(PDO::FETCH_COLUMN);

if (!in_array('firstname', $columns)) {
    $pdo->exec("ALTER TABLE `users` ADD COLUMN `firstname` VARCHAR(100) NOT NULL DEFAULT '' AFTER `id`");
    echo "[OK] Added column: firstname\n";
} else {
    echo "[SKIP] Column already exists: firstname\n";
}

if (!in_array('lastname', $columns)) {
    $pdo->exec("ALTER TABLE `users` ADD COLUMN `lastname` VARCHAR(100) NOT NULL DEFAULT '' AFTER `firstname`");
    echo "[OK] Added column: lastname\n";
} else {
    echo "[SKIP] Column already exists: lastname\n";
}

// ── Step 2: Seed users ────────────────────────────────────────────────────────
echo "\n--- Seeding users ---\n";

$users = [
    ['firstname' => 'Juan',  'lastname' => 'Dela Cruz', 'email' => 'juan@example.com',  'username' => 'juandelacruz'],
    ['firstname' => 'Maria', 'lastname' => 'Santos',    'email' => 'maria@example.com', 'username' => 'mariasantos'],
    ['firstname' => 'Pedro', 'lastname' => 'Garcia',    'email' => 'pedro@example.com', 'username' => 'pedrogarcia'],
    ['firstname' => 'Ana',   'lastname' => 'Reyes',     'email' => 'ana@example.com',   'username' => 'anareyes'],
    ['firstname' => 'Jose',  'lastname' => 'Mendoza',   'email' => 'jose@example.com',  'username' => 'josemendoza'],
];

$stmt = $pdo->prepare("
    INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`, `role`, `is_active`)
    VALUES (:firstname, :lastname, :username, :email, :password, 'user', 1)
    ON DUPLICATE KEY UPDATE
        `firstname` = VALUES(`firstname`),
        `lastname`  = VALUES(`lastname`)
");

foreach ($users as $u) {
    $stmt->execute([
        ':firstname' => $u['firstname'],
        ':lastname'  => $u['lastname'],
        ':username'  => $u['username'],
        ':email'     => $u['email'],
        ':password'  => password_hash('password123', PASSWORD_BCRYPT),
    ]);
    echo "[OK] Seeded: {$u['firstname']} {$u['lastname']} <{$u['email']}>\n";
}

// ── Done ──────────────────────────────────────────────────────────────────────
$count = $pdo->query("SELECT COUNT(*) FROM `users`")->fetchColumn();
echo "\n[DONE] Users table now has {$count} record(s).\n";
