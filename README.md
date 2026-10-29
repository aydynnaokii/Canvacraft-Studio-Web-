# CanvaCraft Studio - Digital Inventory & Order Management System

A responsive web application for managing digital Canva social media templates, customer records, staff directories, and sales orders. Built with PHP and Bootstrap 5 for Web Development Practical Task 1 (PT1).

## 🌟 Key Features

- **Dashboard (`home.php`)**: Real-time overview of key statistics (total templates, orders, active customers, staff team), quick links, and recent transactions.
- **Product Catalog (`products.php`)**: Full catalog of 20 customizable Canva social media templates with preview modals, stock tracking, and template category management.
- **Customer Management (`customers.php`)**: Form-based registration and data table for managing client contacts and profiles.
- **Staff Directory (`staffs.php`)**: Internal team management tracking staff IDs, roles, and contact channels.
- **Order Processing (`orders.php`)**: Centralized sales order creation and tracking with status indicators.
- **Order Details (`orderdetails.php`)**: Detailed breakdown of items per order with quantity adjustments and subtotals.
- **Printable Invoices (`invoice.php`)**: Clean, print-friendly invoice layout complete with itemized charges and studio details.
- **Unified Master Layout (`layout.php`)**: Modular architecture featuring responsive offcanvas sidebar navigation, consistent headers, and footers.

## 📁 Project Structure

```text
pt1/
├── images/             # Template preview images (template1.png - template20.png)
├── customers.php       # Customer management module
├── footer.php          # Global footer and Bootstrap scripts
├── header.php          # Global HTML head and CSS links
├── home.php            # Studio dashboard & analytics overview
├── invoice.php         # Printable order invoice template
├── layout.php          # Main wrapper incorporating header, sidebar, and footer
├── orderdetails.php    # Line-item order breakdown and item assignment
├── orders.php          # Customer purchase order management
├── products.php        # Canva template catalog and inventory
├── sidebar.php         # Offcanvas navigation sidebar
├── staffs.php          # Staff team directory
├── .gitignore          # Git ignore configuration
└── README.md           # Project documentation
```

## 🚀 Getting Started

1. Clone or place this repository in your local PHP server environment (e.g., XAMPP `htdocs`, WampServer `www`, or PHP built-in server):
   ```bash
   php -S localhost:8000
   ```
2. Open your web browser and navigate to:
   ```text
   http://localhost:8000/home.php
   ```

## 🛠️ Built With

- **PHP** - Server-side templating & structure
- **Bootstrap 5.3** - Responsive grid system and modern styling
- **Bootstrap Icons** - Iconography across all interface elements
