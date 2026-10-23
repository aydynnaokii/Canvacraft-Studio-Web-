<?php
ob_start();

$templates = [
    ['id' => 'T001', 'name' => 'Minimalist Real Estate Carousel', 'price' => '18.00', 'brand' => 'Studio Luxe', 'format' => 'Instagram Carousel', 'niche' => 'Real Estate', 'image' => 'template1.png'],
    ['id' => 'T002', 'name' => 'Aesthetic Pastel Skincare Stories', 'price' => '15.00', 'brand' => 'Minimalist Lab', 'format' => 'Instagram Story / Reels', 'niche' => 'Fashion & Beauty', 'image' => 'template2.png'],
    ['id' => 'T003', 'name' => 'Dark Mode Tech LinkedIn Carousel', 'price' => '25.00', 'brand' => 'PixelVibe', 'format' => 'LinkedIn Carousel', 'niche' => 'Business & Marketing', 'image' => 'template3.png'],
    ['id' => 'T004', 'name' => 'Fitness & Gym Motivation Quotes', 'price' => '12.00', 'brand' => 'CanvaCraft', 'format' => 'Instagram Carousel', 'niche' => 'Fitness & Wellness', 'image' => 'template4.png'],
    ['id' => 'T005', 'name' => 'Coffee Shop Promotional Banner', 'price' => '14.00', 'brand' => 'Studio Luxe', 'format' => 'Facebook Banner', 'niche' => 'E-Commerce', 'image' => 'template5.png'],
    ['id' => 'T006', 'name' => 'Business Coaching Webinar Deck', 'price' => '28.00', 'brand' => 'PixelVibe', 'format' => 'LinkedIn Carousel', 'niche' => 'Coaching & Education', 'image' => 'template6.png'],
    ['id' => 'T007', 'name' => 'Boho Fashion Summer Sale Post', 'price' => '16.00', 'brand' => 'Minimalist Lab', 'format' => 'Instagram Carousel', 'niche' => 'Fashion & Beauty', 'image' => 'template7.png'],
    ['id' => 'T008', 'name' => 'Finance & Wealth Infographic Pack', 'price' => '20.00', 'brand' => 'CanvaCraft', 'format' => 'Instagram Carousel', 'niche' => 'Business & Marketing', 'image' => 'template8.png'],
    ['id' => 'T009', 'name' => 'Podcast Episode Announcement Story', 'price' => '10.00', 'brand' => 'PixelVibe', 'format' => 'Instagram Story / Reels', 'niche' => 'Coaching & Education', 'image' => 'template9.png'],
    ['id' => 'T010', 'name' => 'Luxury Hotel & Travel Reels Cover', 'price' => '19.00', 'brand' => 'Studio Luxe', 'format' => 'Instagram Story / Reels', 'niche' => 'Real Estate', 'image' => 'template10.png'],
    ['id' => 'T011', 'name' => 'Restaurant & Bistro Food Menu', 'price' => '15.00', 'brand' => 'CanvaCraft', 'format' => 'Instagram Carousel', 'niche' => 'E-Commerce', 'image' => 'template11.png'],
    ['id' => 'T012', 'name' => 'Digital Marketing Tips Carousel', 'price' => '22.00', 'brand' => 'PixelVibe', 'format' => 'LinkedIn Carousel', 'niche' => 'Business & Marketing', 'image' => 'template12.png'],
    ['id' => 'T013', 'name' => 'Creative Agency Portfolio Deck', 'price' => '26.00', 'brand' => 'Studio Luxe', 'format' => 'LinkedIn Carousel', 'niche' => 'Business & Marketing', 'image' => 'template13.png'],
    ['id' => 'T014', 'name' => 'Wellness & Mental Health Reminders', 'price' => '12.00', 'brand' => 'Minimalist Lab', 'format' => 'Instagram Carousel', 'niche' => 'Fitness & Wellness', 'image' => 'template14.png'],
    ['id' => 'T015', 'name' => 'Cyber Sale Mega Promotion Grid', 'price' => '18.00', 'brand' => 'CanvaCraft', 'format' => 'Instagram Carousel', 'niche' => 'E-Commerce', 'image' => 'template15.png'],
    ['id' => 'T016', 'name' => 'Corporate Brand Identity Guidelines', 'price' => '30.00', 'brand' => 'PixelVibe', 'format' => 'LinkedIn Carousel', 'niche' => 'Coaching & Education', 'image' => 'template16.png'],
    ['id' => 'T017', 'name' => 'Mindfulness Affirmations Pack', 'price' => '11.00', 'brand' => 'Minimalist Lab', 'format' => 'Instagram Story / Reels', 'niche' => 'Fitness & Wellness', 'image' => 'template17.png'],
    ['id' => 'T018', 'name' => 'E-Commerce Product Launch Banners', 'price' => '17.00', 'brand' => 'Studio Luxe', 'format' => 'Facebook Banner', 'niche' => 'E-Commerce', 'image' => 'template18.png'],
    ['id' => 'T019', 'name' => 'Photography Portfolio Showcase', 'price' => '21.00', 'brand' => 'PixelVibe', 'format' => 'Instagram Carousel', 'niche' => 'Fashion & Beauty', 'image' => 'template19.png'],
    ['id' => 'T020', 'name' => 'Online Masterclass YouTube Banner', 'price' => '14.00', 'brand' => 'CanvaCraft', 'format' => 'TikTok Graphic', 'niche' => 'Coaching & Education', 'image' => 'template20.png'],
];
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track your Canva social media template catalog</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of a template</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Template Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price (RM) <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" required min="0" step="0.01">
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand / Creator <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="CanvaCraft">CanvaCraft</option>
                        <option value="Studio Luxe">Studio Luxe</option>
                        <option value="PixelVibe">PixelVibe</option>
                        <option value="Minimalist Lab">Minimalist Lab</option>
                    </select>
                </div>

                <!-- Custom categorical field 1: Format/Platform (replaces Condition) -->
                <div class="col-md-3">
                    <label for="product_format" class="form-label">Format / Platform <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_format" id="product_format" class="form-select" required>
                        <option value="">Select Format</option>
                        <option value="Instagram Carousel">Instagram Carousel</option>
                        <option value="Instagram Story / Reels">Instagram Story / Reels</option>
                        <option value="LinkedIn Carousel">LinkedIn Carousel</option>
                        <option value="TikTok Graphic">TikTok Graphic</option>
                        <option value="Facebook Banner">Facebook Banner</option>
                    </select>
                </div>

                <!-- Custom categorical field 2: Niche/Theme (replaces Manufacturing Year) -->
                <div class="col-md-3">
                    <label for="product_niche" class="form-label">Niche / Theme <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_niche" id="product_niche" class="form-select" required>
                        <option value="">Select Niche</option>
                        <option value="Business & Marketing">Business & Marketing</option>
                        <option value="Fashion & Beauty">Fashion & Beauty</option>
                        <option value="Coaching & Education">Coaching & Education</option>
                        <option value="Real Estate">Real Estate</option>
                        <option value="Fitness & Wellness">Fitness & Wellness</option>
                        <option value="E-Commerce">E-Commerce</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="quantity" class="form-label">License Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image Filename</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="e.g. template1.png" value="">
                </div>
            </div>
            
            <hr class="mt-4 mb-3">
            
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
 
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>
                <small class="text-muted">View all 20 social media templates in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: <?= count($templates) ?> items</span>
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($templates as $item): ?>
                    <tr>
                        <td><strong><?= $item['id'] ?></strong></td>
                        <td><?= $item['name'] ?></td>
                        <td>RM <?= $item['price'] ?></td>
                        <td><?= $item['brand'] ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit Template">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" 
                                    title="View Template Image"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modal-<?= $item['id'] ?>">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete Template">
                                <i class="bi bi-trash"></i>
                            </a>

                            <!-- Bootstrap Modal for Viewing Template Image -->
                            <div class="modal fade" id="modal-<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?= $item['id'] ?> - <?= $item['name'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center p-4">
                                            <img src="images/<?= $item['image'] ?>" class="img-fluid rounded shadow-sm border mb-3" alt="<?= $item['name'] ?>">
                                            <div class="text-muted small">
                                                <span class="badge bg-primary me-1"><?= $item['format'] ?></span>
                                                <span class="badge bg-secondary"><?= $item['niche'] ?></span>
                                            </div>
                                            <p class="mt-2 mb-0 fw-bold text-primary">Price: RM <?= $item['price'] ?> | Creator: <?= $item['brand'] ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>
