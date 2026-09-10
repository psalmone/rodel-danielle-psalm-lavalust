<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Product – Product Manager</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Inter', sans-serif; background: #f1f5f9; min-height: 100vh; }
  nav {
    background: #1e3a5f; padding: 0 32px;
    display: flex; align-items: center; justify-content: space-between; height: 60px;
  }
  .nav-brand { color: #fff; font-weight: 700; font-size: 16px; }
  .nav-logout { color: #94a3b8; font-size: 13px; text-decoration: none; }
  .nav-logout:hover { color: #fff; }

  .container { max-width: 560px; margin: 40px auto; padding: 0 20px; }
  .back { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; margin-bottom: 20px; }
  .back:hover { color: #1e3a5f; }
  h2 { font-size: 22px; font-weight: 700; color: #1e293b; margin-bottom: 24px; }

  .card { background: #fff; border-radius: 12px; padding: 32px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); }
  .field { margin-bottom: 20px; }
  label { display: block; font-size: 13px; font-weight: 500; color: #374151; margin-bottom: 6px; }
  input, textarea {
    width: 100%; padding: 10px 14px; border: 1px solid #d1d5db;
    border-radius: 8px; font-size: 14px; font-family: inherit; outline: none; transition: border-color 0.2s;
  }
  input:focus, textarea:focus { border-color: #1e3a5f; box-shadow: 0 0 0 3px rgba(30,58,95,0.08); }
  textarea { resize: vertical; min-height: 90px; }
  .row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .btn-submit {
    width: 100%; padding: 12px; background: #1e3a5f; color: #fff;
    border: none; border-radius: 8px; font-size: 15px; font-weight: 600;
    font-family: inherit; cursor: pointer; transition: background 0.2s;
  }
  .btn-submit:hover { background: #16324f; }
</style>
</head>
<body>

<nav>
  <span class="nav-brand">Product Manager</span>
  <a class="nav-logout" href="<?= site_url('logout'); ?>">Sign out</a>
</nav>

<div class="container">
  <a class="back" href="<?= site_url('products'); ?>">&#8592; Back to Products</a>
  <h2>Edit Product</h2>
  <div class="card">
    <form method="POST" action="<?= site_url('products/update/' . $product['id']); ?>">
      <div class="field">
        <label for="product_name">Product Name</label>
        <input type="text" id="product_name" name="product_name" value="<?= html_escape($product['product_name']); ?>" required>
      </div>
      <div class="field">
        <label for="description">Description</label>
        <textarea id="description" name="description"><?= html_escape($product['description']); ?></textarea>
      </div>
      <div class="row-2">
        <div class="field">
          <label for="price">Price (₱)</label>
          <input type="number" id="price" name="price" step="0.01" min="0" value="<?= html_escape($product['price']); ?>" required>
        </div>
        <div class="field">
          <label for="quantity">Quantity</label>
          <input type="number" id="quantity" name="quantity" min="0" value="<?= html_escape($product['quantity']); ?>" required>
        </div>
      </div>
      <button type="submit" class="btn-submit">Update Product</button>
    </form>
  </div>
</div>

</body>
</html>
