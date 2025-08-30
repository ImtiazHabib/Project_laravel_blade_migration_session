# Laravel Contact Information Store App  

A simple **Laravel-based web application** where users can submit their contact information (name, email, mobile, OTP, and password) along with an optional profile image upload.  
The data is stored in the database, saved in session, and displayed on a confirmation page.  

## 🚀 Features
- Contact form with validation (Name, Email, Password required).  
- File upload support (Profile image).  
- Store data in **MySQL database** using Eloquent Model.  
- Store user info in **Laravel Session**.  
- Confirmation page with stored details.  
- Cookie support to check if a file was uploaded.  

## 🛠️ Technologies Used
- Laravel 10+  
- PHP 8+  
- MySQL / MariaDB  
- Blade Templates  
- Bootstrap (for frontend, optional)  

## 📂 Project Structure
app/Http/Controllers/PageController.php # Handles routes & logic
resources/views/index.blade.php # Home page
resources/views/contact.blade.php # Contact form
resources/views/projects.blade.php # Projects page
resources/views/resume.blade.php # Resume page
resources/views/confirmation.blade.php # Confirmation page

## 📺 Project Demonstration
🎥 Watch the full demonstration on YouTube:  
👉 [Click Here to Watch](https://www.youtube.com/watch?v=i9MHju8dWDo)

## ⚡ Installation Guide

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/your-repo-name.git
   cd your-repo-name
## Install dependencies:
composer install
npm install && npm run dev
## Copy .env.example to .env and update database credentials:
cp .env.example .env
🧑 Author

Developed by [Imtiaz habib]
