# Laravel Laragram App

## Laragram App 📸

A Laravel-based web application inspired by Instagram, built to explore social networking functionalities. This project demonstrates modern full-stack development with Laravel as the backend framework and a clean architecture for scalability and maintainability.

## Features✨

- **User Authenticationg**: Registration, Login, and Profile Management.
- **Post Sharing**: Upload and display posts with multimedia content.
- **Likes & Commentss**: Interact with posts via likes and comments.
- **Search & Explore**: Discover users and posts with search functionality.
- **Responsive Design**: Optimized for mobile and desktop views.

## 🚦 Getting Started

### Prerequisites⚙️

- PHP 7.4 or higher
- Composer
- MySQL
- Node.js and npm

### Installation🛠️

1. Clone the Repository
   ```bash
   git clone https://github.com/MmmarRTha/laravel_laragram_app.git  
   cd laravel_laragram_app  
   ```
2. Install dependencies
   ```bash
   composer install  
   npm install  
   ```
  
3. Setup Environment
* Copy .env.example to .env
   ```bash
   cp .env.example .env
   ``` 
* Update the .env file with your database and app configurations.
4. Generate Application Key
   ```bash
   php artisan key:generate 
   ``` 
5. Run Migrations and Seeders
   ```bash
   php artisan migrate --seed  
   ```
6. Build Frontend Assets
   ```bash
   npm run dev  
   ```
## Usage 🚀
Start the development server and visit the app:

   ```bash
   php artisan serve
   ```
[Visit](http://127.0.0.1:8000) in your browser.
