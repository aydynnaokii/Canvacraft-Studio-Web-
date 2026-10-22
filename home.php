<?php
ob_start();
?>

<!-- Welcome Banner -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-primary mb-2">Canva Social Media Templates</span>
                <h2 class="display-6 fw-bold mb-2">Welcome to CanvaCraft Studio</h2>
                <p class="lead text-muted mb-3">
                    Your all-in-one digital inventory platform for customizable Canva social media templates, carousels, stories, and visual branding assets.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="products.php" class="btn btn-primary">
                        <i class="bi bi-box-seam me-1"></i>Explore Templates
                    </a>
                    <a href="orders.php" class="btn btn-outline-secondary">
                        <i class="bi bi-cart me-1"></i>View Orders
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center d-none d-lg-block">
                <div class="p-3 bg-light rounded-circle d-inline-block border">
                    <i class="bi bi-palette2 text-primary" style="font-size: 5rem;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Stats Row -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3 text-primary">
                    <i class="bi bi-images fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0">Templates</h6>
                    <h3 class="fw-bold mb-0">20+</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3 text-success">
                    <i class="bi bi-people fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0">Customers</h6>
                    <h3 class="fw-bold mb-0">2</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3 text-warning">
                    <i class="bi bi-person-badge fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0">Staff Members</h6>
                    <h3 class="fw-bold mb-0">2</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-info bg-opacity-10 p-3 me-3 text-info">
                    <i class="bi bi-cart-check fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0">Total Orders</h6>
                    <h3 class="fw-bold mb-0">2</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features & Module Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center p-4">
                <i class="bi bi-box-seam-fill text-primary fs-1 mb-3 d-block"></i>
                <h5 class="card-title">Templates Catalog</h5>
                <p class="card-text text-muted small">Manage Canva templates, formats, niche categories, and prices.</p>
                <a href="products.php" class="btn btn-sm btn-outline-primary stretched-link">Manage Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center p-4">
                <i class="bi bi-people-fill text-success fs-1 mb-3 d-block"></i>
                <h5 class="card-title">Customer Base</h5>
                <p class="card-text text-muted small">Track registered customers and their contact details.</p>
                <a href="customers.php" class="btn btn-sm btn-outline-success stretched-link">Manage Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center p-4">
                <i class="bi bi-person-badge-fill text-warning fs-1 mb-3 d-block"></i>
                <h5 class="card-title">Staff Management</h5>
                <p class="card-text text-muted small">Manage staff members and support representatives.</p>
                <a href="staffs.php" class="btn btn-sm btn-outline-warning stretched-link">Manage Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center p-4">
                <i class="bi bi-receipt-cutoff text-info fs-1 mb-3 d-block"></i>
                <h5 class="card-title">Orders & Invoices</h5>
                <p class="card-text text-muted small">Process orders, add items, and generate printable invoices.</p>
                <a href="orders.php" class="btn btn-sm btn-outline-info stretched-link">Manage Orders</a>
            </div>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>
