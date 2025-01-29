# Subscription Management System: Comprehensive Overview

This project is a full-stack web application designed to help users track and manage their subscriptions (e.g., Netflix, Spotify) with features like adding, deleting, and viewing subscriptions. Below is a detailed breakdown of the project:

## 1. Project Overview

**Objective:**
A web-based system where users can:
- Register/login securely.
- Add/delete subscriptions with billing dates.
- View a dashboard of active subscriptions.

**Target Audience:**
Individuals or small businesses needing a centralized platform to monitor recurring payments.

## 2. Technologies Used

| Category   | Tools/Technologies |
|------------|--------------------|
| Backend    | PHP (for server-side logic), MySQL (database), Apache (XAMPP server) |
| Frontend   | HTML5, CSS3 (styling), JavaScript (dynamic interactions) |
| Security   | Password hashing (password_hash()), Prepared SQL statements (anti-SQL injection) |
| Tools      | XAMPP (local server), phpMyAdmin (database management) |

## 3. Scope

**Core Features:**
- User authentication (register/login).
- CRUD operations for subscriptions.
- Responsive dashboard with tabular data.

**Scalability:**
- Can be extended with features like email reminders, payment tracking, or graphs.
- Supports multi-user environments (e.g., teams or families).

## 4. Setup with XAMPP

**Step-by-Step Guide:**

1. **Install XAMPP:**
   - Download from Apache Friends.
   - Install and launch the XAMPP Control Panel.

2. **Start Services:**
   - Start Apache (web server) and MySQL (database).

3. **Database Setup:**
   - Open phpMyAdmin at http://localhost/phpmyadmin.
   - Create a database named `subscription_db`.
   - Run these SQL queries:
     ```sql
     -- Users table
     CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       email VARCHAR(255) UNIQUE NOT NULL,
       password VARCHAR(255) NOT NULL
     );

     -- Subscriptions table
     CREATE TABLE subscriptions (
       id INT AUTO_INCREMENT PRIMARY KEY,
       user_id INT,
       service_name VARCHAR(255),
       subscription_amount DECIMAL(10,2),
       billing_date DATE,
       status ENUM('Active', 'Expired'),
       FOREIGN KEY (user_id) REFERENCES users(id)
     );
     ```

4. **Project Setup:**
   - Clone/download the project files.
   - Place the project folder (`subscription-manager`) inside `C:\xampp\htdocs\`.
   - Access the app at http://localhost/subscription-manager/.

## 5. Key Features

| Feature             | Description |
|---------------------|-------------|
| User Authentication | Secure registration/login with password hashing and session management. |
| Dashboard           | Displays subscriptions in a responsive HTML table with delete buttons. |
| Add Subscription    | Form to input service name, amount, and billing date. Validates input client/server-side. |
| Delete Subscription | Uses JavaScript `fetch()` and PHP to delete entries without page reload. |
| Responsive Design   | Works on mobile/desktop (CSS media queries). |

## Screenshots
Here are some screenshots of the Subscription Manager application:

- Home Page
    ![Home Page](https://cdn.discordapp.com/attachments/889078845985128449/1333848690464391269/image.png?ex=679a62e5&is=67991165&hm=9830035df1cff58e0c5754c93d7402fa405fae582b1f212f3b9ca982a196d62c&)
- Login Page
    ![Add Subscription](https://cdn.discordapp.com/attachments/889078845985128449/1333848821360496730/image.png?ex=679a6304&is=67991184&hm=0022ee1b1a185f45e1c108c977646c821541ff1ff54fb6e4f37656cee133f984&)
- Register Page
    ![Edit Subscription](https://cdn.discordapp.com/attachments/889078845985128449/1333848879531032730/image.png?ex=679a6312&is=67991192&hm=12b201e0d8bff8ae7230680c636eafc97ebe55d2be7221e3a6c507afd014ebb7&)
- Subscription Page
  
    ![Subscription List](https://cdn.discordapp.com/attachments/889078845985128449/1334163290112397353/image.png?ex=679b87e3&is=679a3663&hm=9de7b7f598a01c07a7d57e7b562b962aa7a8a18a32f6951b992c50886e2d8875&)
