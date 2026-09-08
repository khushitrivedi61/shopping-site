# Shopping Site 🛍️

A clean and responsive e-commerce shopping web application built with PHP and MySQL.

## Features

- **User Authentication**: User registration and login system with secure password hashing (`password_hash` / `password_verify`).
- **Product Categories**:
  - 👗 Clothes (`cloth.php`)
  - 👶 Baby Clothes (`babycloth.php`)
  - 👟 Shoes (`shoes.php`)
  - 💍 Jewelry (`Jewelry.php`)
  - 🧸 Toys (`toy.php`)
  - 🎁 Other Accessories (`other.php`)
- **Shopping Cart**: Session-based cart functionality supporting item addition, price calculation, and cart reset (`cart.php`).
- **Responsive UI**: Mobile-friendly, modern card layouts built using HTML5, CSS3, and Font Awesome icons.

## Tech Stack

- **Backend**: PHP (PDO for database connectivity)
- **Database**: MySQL / MariaDB
- **Frontend**: HTML5, CSS3, Font Awesome

## Getting Started

### Prerequisites
- PHP 7.4+ or 8.x
- MySQL Server / XAMPP / WampServer

### Database Setup

1. Open phpMyAdmin or your MySQL client.
2. Create a new database named `shooping_site`:
   ```sql
   CREATE DATABASE shooping_site;
   USE shooping_site;
   ```
3. Create the `users` table:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(100) NOT NULL,
       email VARCHAR(150) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
4. Verify database connection credentials in `connect.php`:
   ```php
   $host = 'localhost';
   $db   = 'shooping_site';
   $user = 'root';
   $pass = '';
   ```

### Running Locally

1. Place the project folder inside your web server root directory (e.g., `C:/xampp/htdocs/shopping-site`).
2. Start Apache and MySQL in the XAMPP Control Panel.
3. Open your browser and navigate to:
   ```
   http://localhost/shopping-site/index.php
   ```
