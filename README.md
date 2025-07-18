# 🧾 PHP SQL Form with Toggle Action

This project is a simple PHP web application that lets users:
- Submit a **name** and **age** through a form.
- Store the data in a **MySQL** database table.
- Display the table with an extra **status** column.
- Toggle each row's **status** (0 or 1) using a button.

## 📷 Demo
https://github.com/user-attachments/assets/c28d7ba2-022e-42ea-bcb4-7578464235e4


## 🛠️ Tech Stack

- **Frontend:** HTML
- **Backend:** PHP
- **Database:** MySQL

## 🧪 SQL Table Schema

```sql
CREATE TABLE users (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  age INT,
  status INT DEFAULT 0
);
```

## 🚀 How to Run Locally

1. Make sure you have a local development environment like **XAMPP** installed.
2. Press `Import` from phpMyAdmin page.
3. In file to import choose `name.sql` from this repo, then click import.
4. Place the `index.php` file inside your server's root directory:
   - For XAMPP: `htdocs`
   - For WAMP: `www`
5. Open `index.php` in a code editor and update the database connection credentials to match your local MySQL setup.
6. Start your Apache and MySQL servers using your control panel.
7. Open your browser and visit: http://localhost/index.php
