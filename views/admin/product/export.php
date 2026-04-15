<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Product Report</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        /* ===== Global ===== */
        body {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #374151;
            background: #ffffff;
            margin: 0;
            padding: 30px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* ===== Header ===== */
        .logo {
            text-align: center;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #111827;
        }

        .logo span {
            color: #f59e0b;
        }

        .print-date {
            text-align: right;
            font-size: 11px;
            color: #6b7280;
            margin-bottom: 15px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #111827;
        }

        .header p {
            font-size: 14px;
            color: #6b7280;
            margin: 0;
        }

        /* ===== Report Info ===== */
        .report-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            padding: 20px 15px;
            background: #fffbeb;
            border-radius: 10px;
            border-left: 5px solid #f59e0b;
        }

        .info-item {
            flex: 1;
            text-align: center;
        }

        .info-label {
            display: block;
            font-size: 11px;
            font-weight: 500;
            color: #6b7280;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .info-value {
            font-size: 15px;
            font-weight: 600;
            color: #111827;
        }

        /* ===== Table ===== */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 1px 5px rgba(0,0,0,0.05);
        }

        thead {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        th {
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            padding: 14px 12px;
            position: relative;
            text-align: left;
        }

        th:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 20%;
            width: 1px;
            height: 60%;
            background: rgba(255,255,255,0.2);
        }

        tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: background-color 0.2s;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        tbody tr:hover {
            background: #fff7e6;
        }

        td {
            padding: 12px 12px;
            font-size: 12px;
            vertical-align: middle;
            color: #374151;
        }

        .index {
            text-align: center;
            width: 40px;
            color: #6b7280;
        }

        .product-name {
            font-weight: 500;
            color: #111827;
        }

        .price {
            font-weight: 600;
            color: #047857;
        }

        .stock {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stock-bar {
            width: 80px;
            height: 6px;
            background: #e5e7eb;
            border-radius: 3px;
            overflow: hidden;
        }

        .stock-fill {
            height: 100%;
            background: #10b981;
            border-radius: 3px;
        }

        .status {
            padding: 4px 10px;
            font-size: 11px;
            font-weight: 600;
            border-radius: 12px;
            text-transform: uppercase;
        }

        .status-active {
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }

        .status-inactive {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }

        .status-draft {
            background: #fefce8;
            color: #a16207;
            border: 1px solid #fef08a;
        }

        /* ===== Table Footer / Summary ===== */
        .table-footer {
            margin-top: 25px;
            padding: 18px;
            background: #f9fafb;
            border-radius: 10px;
            text-align: right;
        }

        .summary {
            display: flex;
            gap: 25px;
            justify-content: flex-end;
        }

        .summary-item {
            text-align: center;
        }

        .summary-label {
            font-size: 11px;
            color: #6b7280;
            margin-bottom: 4px;
        }

        .summary-value {
            font-size: 14px;
            font-weight: 700;
            color: #111827;
        }

        /* ===== Footer ===== */
        .footer {
            margin-top: 35px;
            padding-top: 15px;
            border-top: 1px solid #e5e7eb;
            text-align: center;
            font-size: 11px;
            color: #9ca3af;
        }

        .footer a {
            color: #f59e0b;
        }

        /* ===== Print ===== */
        @media print {
            body { padding: 15px; }
            .no-print { display: none; }
        }
    </style>
</head>
<body>

    <div class="print-date">
        Generated: <?= date('d M Y, H:i:s') ?>
    </div>

    <div class="logo">
        Admin<span>Pro</span> • Product Report
    </div>

    <div class="header">
        <h2>Product List Report</h2>
        <p>Comprehensive overview of all products in inventory</p>
    </div>

    <div class="report-info">
        <div class="info-item">
            <span class="info-label">Total Products</span>
            <span class="info-value"><?= count($products) ?></span>
        </div>
        <div class="info-item">
            <span class="info-label">Total Value</span>
            <span class="info-value">Rp <?= number_format(array_sum(array_column($products, 'price'))) ?></span>
        </div>
        <div class="info-item">
            <span class="info-label">Total Stock</span>
            <span class="info-value"><?= array_sum(array_column($products, 'stock')) ?></span>
        </div>
        <div class="info-item">
            <span class="info-label">Report Date</span>
            <span class="info-value"><?= date('d F Y') ?></span>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th class="index">#</th>
                <th>Product Name</th>
                <th>Price (Rp)</th>
                <th>Stock Level</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $i => $p): 
                $stockPercent = min(100, ($p['stock'] / 50) * 100);
                $statusClass = '';
                switch(strtolower($p['status'])) {
                    case 'active': $statusClass = 'status-active'; break;
                    case 'inactive': $statusClass = 'status-inactive'; break;
                    case 'draft': $statusClass = 'status-draft'; break;
                    default: $statusClass = 'status-active';
                }
            ?>
            <tr>
                <td class="index"><?= $i + 1 ?></td>
                <td class="product-name"><?= htmlspecialchars($p['name']) ?></td>
                <td class="price">Rp <?= number_format($p['price']) ?></td>
                <td>
                    <div class="stock">
                        <?= $p['stock'] ?>
                        <div class="stock-bar">
                            <div class="stock-fill" style="width: <?= $stockPercent ?>%"></div>
                        </div>
                    </div>
                </td>
                <td><span class="status <?= $statusClass ?>"><?= $p['status'] ?></span></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div class="table-footer">
        <div class="summary">
            <div class="summary-item">
                <span class="summary-label">Active Products</span>
                <span class="summary-value">
                    <?= count(array_filter($products, fn($p) => strtolower($p['status']) === 'active')) ?>
                </span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Avg. Price</span>
                <span class="summary-value">
                    Rp <?= number_format(array_sum(array_column($products, 'price')) / count($products)) ?>
                </span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Low Stock (< 10)</span>
                <span class="summary-value">
                    <?= count(array_filter($products, fn($p) => $p['stock'] < 10)) ?>
                </span>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>This report was generated automatically by AdminPro System</p>
        <p>© <?= date('Y') ?> AdminPro. All rights reserved.</p>
    </div>

</body>
</html>
