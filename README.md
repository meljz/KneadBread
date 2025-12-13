# KneadBread - Filipino Panaderia Website

## 👨‍💻 Developer
**Meljohn Jay A. Reyes - 2025**  
A Personal Project

---

## 🍞 About
KneadBread is a personal project born from my love for breadmaking and my aspiration to become a pastry chef. This website celebrates Filipino bread culture with the objective to uplift Filipino breads not just in the local market but internationally. It showcases traditional panaderia products and connects people with authentic Pinoy baked goods.

---

## 🛠️ Technologies Used
- **PHP** - Session-based authentication and server-side processing
- **HTML5** - Semantic markup
- **CSS3** - Styling and animations
- **JavaScript** - Interactive features
- **MySQL** - Database management

---

## 📁 File Structure
```
KneadBread/
│
├── index.php                 # Main homepage
├── shop.php                  # Shop/Products page
├── Login.php                 # User login page
├── Register.php              # User registration page
├── style.css                 # Main stylesheet
├── script.js                 # JavaScript functionality
│
├── handlers/
│   ├── Contact_process.php   # Contact form handler
│   ├── Logout.php            # Logout handler
│   └── [other handlers]
│
├── image/
│   └── [product images]
│
└── database/
    └── kneadbread.sql        # Database schema
```

---

## 🚀 How to Run

### Prerequisites
- XAMPP (or any PHP/MySQL environment)
- Web browser

### Installation Steps

1. **Install XAMPP**
   - Download and install XAMPP 

2. **Clone/Copy Project**
   ```bash
   # Copy the project folder to XAMPP's htdocs directory
   C:\xampp\htdocs\KneadBread\
   ```

3. **Setup Database**
   - Start XAMPP Control Panel
   - Start **Apache** and **MySQL** modules
   - Open phpMyAdmin: `http://localhost/phpmyadmin`
   - Create a new database named `kneadbread`
   - Import the SQL file: `database/kneadbread.sql`

4. **Configure Database Connection**
   - Update database credentials in your PHP files if needed:
   ```php
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = "kneadbread";
   ```

5. **Run the Website**

 *In XAMPP (start apache and mysql)
 
 *# Navigate to project directory
   cd C:\xampp\htdocs\KneadBread

   # Start PHP server
   php -S localhost:8000

   # Access in browser
   http://localhost:8000

---

## 🎯 Features
- **Session-based PHP Authentication** - User registration, login, and logout
- **Product Showcase** - Interactive carousel with Filipino breads
- **Contact Form** - Customer inquiry system
- **Responsive Design** - Mobile-friendly interface
- **SEO Optimized** - Meta tags and semantic HTML


