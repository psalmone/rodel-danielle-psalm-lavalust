<?php
/**
 * Standalone Migration Runner for LavaLust + Aiven MySQL
 * Run with: php migrate.php
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
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false, // Aiven uses self-signed
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    echo "[OK] Connected to {$host}:{$port}/{$dbname}\n\n";
} catch (PDOException $e) {
    echo "[FAIL] Connection failed: " . $e->getMessage() . "\n";
    exit(1);
}

// ── Migration SQL ─────────────────────────────────────────────────────────────
$migrations = [

    '000_migrations_table' => "
        CREATE TABLE IF NOT EXISTS `migrations` (
            `id`         INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `migration`  INT          NOT NULL,
            `applied_at` DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            UNIQUE KEY `migration_unique` (`migration`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ",

    '001_users_table' => "
        CREATE TABLE IF NOT EXISTS `users` (
            `id`         INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `username`   VARCHAR(100)     NOT NULL,
            `email`      VARCHAR(255)     NOT NULL,
            `password`   VARCHAR(255)     NOT NULL,
            `role`       ENUM('admin','moderator','user') NOT NULL DEFAULT 'user',
            `is_active`  TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
            `created_at` DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` DATETIME                  DEFAULT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `username_unique` (`username`),
            UNIQUE KEY `email` (`email`),
            KEY `email_idx` (`email`),
            KEY `role_idx` (`role`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ",

    '002_refresh_tokens_table' => "
        CREATE TABLE IF NOT EXISTS `refresh_tokens` (
            `id`         INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `user_id`    INT UNSIGNED NOT NULL,
            `token`      TEXT         NOT NULL,
            `expires_at` DATETIME     NOT NULL,
            `jti`        TEXT         NOT NULL,
            PRIMARY KEY (`id`),
            KEY `user_id_idx` (`user_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ",

];

// ── Run Migrations ────────────────────────────────────────────────────────────
foreach ($migrations as $name => $sql) {
    try {
        $pdo->exec($sql);
        echo "[OK] {$name}\n";
    } catch (PDOException $e) {
        echo "[FAIL] {$name}: " . $e->getMessage() . "\n";
    }
}

echo "\n[DONE] All migrations completed.\n";
