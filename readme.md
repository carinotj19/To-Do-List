**Project: Simple To-Do List Application in PHP**

### Overview
A simple To-Do List application where users can add, edit, mark as done, and delete tasks.

### Prerequisites
- Basic knowledge of HTML/CSS.
- Familiarity with PHP syntax.
- A local development server (e.g., XAMPP, MAMP, or WAMP).
- MySQL setup (can be part of XAMPP or similar).

### Step 1: Setup the Environment
1. Install XAMPP/MAMP/WAMP and start **Apache** and **MySQL**.
2. Create a folder for your project in the **htdocs** directory (e.g., `todo_app`).

### Step 2: Create the Database
1. Open **phpMyAdmin** by navigating to `http://localhost/phpmyadmin/`.
2. Create a new database named `todo_db`.
3. Create a table named `tasks` with the following fields:
   - `id` (INT, auto-increment, primary key)
   - `task` (VARCHAR(255))
   - `status` (TINYINT(1), default `0` to indicate incomplete)

SQL to create the table:
```sql
CREATE TABLE tasks (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status TINYINT(1) DEFAULT 0
);
```

