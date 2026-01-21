# 💬 Realtime Chat Application (Laravel)

A simple **real-time 1-to-1 chat web application** built with **Laravel**, **MySQL**, and **Laravel Reverb**.
Users can add friends and chat with them in real time.

---

## 📋 Requirements

Make sure you have the following installed:

* PHP **8.2+**
* Composer
* Node.js & npm
* XAMPP (Apache + MySQL)
* Git

---

## Setup Instructions

### Clone the Repository

```bash
git clone <repo URL>
cd <project dir>
```

---

### Install PHP Dependencies

```bash
composer install
```

---

### Environment Configuration

Copy the example environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Edit `.env` and configure **MySQL (XAMPP)**:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=realtime_chat
DB_USERNAME=root
DB_PASSWORD=
```

---

### Create the Database

Using **phpMyAdmin** or MySQL CLI, create the database:

```sql
CREATE DATABASE realtime_chat;
```

---

### Run Database Migrations

```bash
php artisan migrate
```

---

### Install Frontend Dependencies

```bash
npm install
```

Build frontend assets:

```bash
npm run dev
```

---

### Start the Servers

Start Laravel backend:

```bash
php artisan serve
```

Start the WebSocket server (Laravel Reverb):

```bash
php artisan reverb:start
```

---

## Access the Application

Open your browser and go to:

```
http://127.0.0.1:8000
```

Register two users, add them as friends, and start chatting in real time 

---

## Tech Stack

* **Backend:** Laravel
* **Database:** MySQL
* **Realtime:** Laravel Reverb + Laravel Echo
* **Frontend:** Blade, Tailwind CSS, Alpine.js
* **Auth:** Laravel Breeze

---

## Notes

* This project focuses on **1-to-1 real-time messaging**
* Online/offline status is handled via WebSockets

---

## Authors

* Internship Project – 2-person team
* Built as part of a 1-month web development internship
