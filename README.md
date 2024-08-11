Laravel Authentication Portal
Overview
This project is a simple authentication portal built with Laravel. The portal allows users to register, log in, and log out, with public and member-only pages protected by multi-guard authentication. The authentication is handled using Laravel’s session-based authentication system, configured to work with a custom accounts table in MySQL.

Features
Account Registration: Users can register with their email and password.
Login & Logout: Users can log in with their registered credentials and log out securely.
Public & Member-Only Pages: Public pages are accessible to all, while member-only pages are restricted to authenticated users.
Prerequisites
PHP 8.3
Composer
MySQL or another database supported by Laravel
Installation
Clone the Repository:

bash
Copy code
git clone https://github.com/NorhanFoda/interview.git
cd laravel-auth-portal
Install Dependencies:

bash
Copy code
composer install
Configure Environment Variables:
Copy the .env.example file to .env and update the necessary database credentials:

bash
Copy code
cp .env.example .env
Edit the .env file:

env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=interview
DB_USERNAME=root
DB_PASSWORD=
Run Migrations:
Create the accounts table by running the migrations:

bash
Copy code
php artisan migrate
Start the Application:
Serve the application locally:

bash
Copy code
php artisan serve
The application will be available at http://127.0.0.1:8000.

Usage
Registration: Navigate to http://127.0.0.1:8000/register to create a new account.
Login: Navigate to http://127.0.0.1:8000/login to log in with your registered account.
Member Page: After logging in, access the member-only page at http://127.0.0.1:8000/member.
Logout: Log out by clicking the logout button on the member page. 

Testing the Application
To test the functionality:

Register a New Account: Visit /register, enter an email and password, and submit the form.
Log In: Visit /login, enter your registered credentials, and log in.
Access Member-Only Page: After logging in, visit /member to see a page accessible only to authenticated users.
Log Out: Click the logout button to end the session.
Git Commit Guidelines
The codebase follows strict Git commit guidelines to maintain clean and understandable version history:

Semantic Prefixes: Commits use prefixes like feat, fix, chore, etc.
Imperative and Lowercase: Commit messages are written in imperative and lowercase form.
Atomic Commits: Each commit is atomic, addressing a single piece of functionality or fix.
Example commit messages:

feat: add form to user login page
fix: validate email before form submission
chore: update .gitignore