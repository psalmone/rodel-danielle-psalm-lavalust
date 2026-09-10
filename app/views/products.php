<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products – Product Manager</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Inter', sans-serif; background: #f1f5f9; color: #334155; min-height: 100vh; }

  nav {
    background: #1e3a5f;
    padding: 0 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 60px;
  }
  .nav-brand { color: #fff; font-weight: 700; font-size: 16px; }
  .nav-logout {
    color: #94a3b8;
    font-size: 13px;
    text-decoration: none;
    transition: color 0.2s;
  }
  .nav-logout:hover { color: #fff; }

  .container { max-width: 1000px; margin: 40px auto; padding: 0 20px; }

  .page-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 24px;
  }
  .page-header h2 { font-size: 22px; font-weight: 700; color: #1e293b; }

  .btn-add {
    background: #1e3a5f;
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: background 0.2s;
  }
  .btn-add:hover { background: #16324f; }

  .card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.06);
    overflow: hidden;
  }

  table { width: 100%; border-collapse: collapse; font-size: 14px; }
  thead tr { background: #f8fafc; border-bottom: 1px solid #e2e8f0; }
  th { padding: 14px 20px; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: #64748b; text-align: left; }
  td { padding: 15px 20px; border-bottom: 1px solid #f1f5f9; vertical-align: middle; }
  tbody tr:last-child td { border-bottom: none; }
  tbody tr:hover { background: #f8fafc; }

  .product-name { font-weight: 600; color: #0f172a; }
  .badge-qty {
    display: inline-block;
    background: #e0f2fe;
    color: #0369a1;
    padding: 2px 10px;
    border-radius: 9999px;
    font-size: 12px;
    font-weight: 600;
  }
  .price { font-weight: 600; color: #16a34a; }

  .actions { display: flex; gap: 8px; }
  .btn-edit {
    padding: 6px 14px;
    background: #f1f5f9;
    color: #334155;
    border-radius: 6px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    transition: background 0.2s;
  }
  .btn-edit:hover { background: #e2e8f0; }
  .btn-delete {
    padding: 6px 14px;
    background: #fef2f2;
    color: #b91c1c;
    border-radius: 6px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    border: none;
    cursor: pointer;
    font-family: inherit;
    transition: background 0.2s;
  }
  .btn-delete:hover { background: #fee2e2; }

  .empty-row td { text-align: center; color: #94a3b8; padding: 48px; }
</style>
</head>
<body>

<nav>
  <span class="nav-brand">Product Manager</span>
  <a class="nav-logout" href="<?= site_url('logout'); ?>">Sign out</a>
</nav>

<div class="container">
  <div class="page-header">
    <h2>Products <span style="font-size:14px;color:#94a3b8;font-weight:500;">(<?= count($products); ?>)</span></h2>
    <a class="btn-add" href="<?= site_url('products/create'); ?>">+ Add Product</a>
  </div>

  <div class="card">
    <table>
      <thead>
        <tr>
          <th style="width:60px;">ID</th>
          <th>Product Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Qty</th>
          <th style="width:140px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($products)): ?>
          <?php foreach ($products as $p): ?>
          <tr>
            <td style="color:#94a3b8;font-weight:500;">#<?= html_escape($p['id']); ?></td>
            <td class="product-name"><?= html_escape($p['product_name']); ?></td>
            <td style="color:#64748b;max-width:220px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?= html_escape($p['description']); ?></td>
            <td class="price">₱<?= number_format($p['price'], 2); ?></td>
            <td><span class="badge-qty"><?= html_escape($p['quantity']); ?></span></td>
            <td>
              <div class="actions">
                <a class="btn-edit" href="<?= site_url('products/edit/' . $p['id']); ?>">Edit</a>
                <form method="POST" action="<?= site_url('products/destroy/' . $p['id']); ?>" id="del-<?= $p['id']; ?>">
                  <button type="button" class="btn-delete" onclick="if(confirm('Delete this product?')) document.getElementById('del-<?= $p['id']; ?>').submit();">Delete</button>
                </form>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr class="empty-row"><td colspan="6">No products yet. Add one!</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
