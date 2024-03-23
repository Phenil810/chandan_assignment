Event Management Platform

1. Event Management (Admin Role):
Create, Edit, Delete, and View Events: Admin users have full control over events, including the ability to create new events, edit existing ones, delete events, and view event details.

CRUD Operations with Eloquent ORM: Laravel's Eloquent ORM is utilized to implement the basic CRUD (Create, Read, Update, Delete) operations for events.

2. User Authentication and Role Management:
Secure User Authentication System: The application implements a secure user authentication system to ensure that only authorized users can access the system.

Role-Based Access Control (RBAC): Two user roles are defined: Admin and Buyer. Each role has different permissions and access levels within the application.

3. Weather API Integration:
Integration with Weather Forecasting API: The application integrates with a weather forecasting API (e.g., OpenWeatherMap) to provide weather forecasts for event dates.

Optimized Performance with Caching: API responses are cached to optimize performance and reduce the number of requests made to the weather API.

Getting Started
To set up the project locally, follow these steps:

Clone the repository to your local machine:

git clone <repository-url>

Install dependencies using Composer:
composer install

Set up the environment variables by copying the .env.example file to .env:
cp .env.example .env


Generate a new application key:
php artisan key:generate


Configure your database settings in the .env file.

Run database migrations to create the necessary tables:
php artisan migrate


Serve the application:

php artisan serve

Access the application in your web browser at http://localhost:8000.

Contributing
Contributions are welcome! If you find any bugs or have suggestions for improvements, please open an issue or submit a pull request.
