# DonorBridge

DonorBridge is a donation management system built with **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**.  
The platform connects donors with beneficiaries and allows managing donations of **money**, **goods**, and **services**.

---

## 🚀 Features

- User authentication (Registration/Login)
- Role-based access (Admin & Donor)
- Donation management (money, goods, services)
- Beneficiary management
- Dashboard with donation statistics
- View donation history and status
- Requests management (beneficiaries can request, admins assign)

---

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (raw PHP, no framework)
- **Database**: MySQL
- **Server**: Apache (XAMPP)

---

## 📂 Project Structure

Donation-system/
│── config/
│ └── db.php # Database connection
│
│── controllers/
│ └── authController.php # Handles login & registration
│ └── donationController.php# Handles donations
│
│── models/ # (Optional) For DB logic
│
│── public/
│ ├── css/
│ │ └── style.css # Global styles
│ ├── js/
│ │ └── main.js # JS scripts
│ └── images/ # Project assets
│
│── views/
│ └── pages/
│ ├── register.php
│ ├── login.php
│ ├── dashboard.php
│ ├── donate.php
│ ├── requests.php
│ └── beneficiaries.php
│
│── index.php # Entry point
│── .gitignore
│── README.md

---

## ⚙️ Installation & Setup

1. Clone the repo:

   ```bash
   git clone https://github.com/karim-kodes/DonorBridge.git

   ```

2. Move the project into the XAMPP htdocs folder:
   /Applications/XAMPP/htdocs/Donation-system

3. Import the database:

   Open phpMyAdmin at http://localhost/phpmyadmin

   Create a database called donation_system.

   Import donation_system.sql (you will generate this from your tables).

4. Configure database connection in config/db.php:

   $host = "localhost";
    $user = "root";
   $pass = "";
    $db = "donation_system";

5. Start Apache & MySQL in XAMPP.

6. Open in browser:
