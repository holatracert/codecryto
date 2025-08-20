# User Registration Module

## Description
This project is a user registration module built using PHP, MySQL, Bootstrap 5, and AdminLTE. It provides a simple and efficient way to handle user registrations.

## Project Structure
```
user-registration-module
├── src
│   └── App
├── public
│   ├── index.php
│   ├── assets
│   │   ├── css
│   │   │   ├── bootstrap.min.css
│   │   │   └── adminlte.min.css
│   │   ├── js
│   │   │   ├── bootstrap.bundle.min.js
│   │   │   └── adminlte.min.js
│   │   └── plugins
├── vendor
├── composer.json
├── composer.lock
├── README.md
└── tests
    └── UserRegistrationTest.php
```

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd user-registration-module
   ```
3. Install the dependencies using Composer:
   ```
   composer install
   ```

## Usage
- Access the application by navigating to `public/index.php` in your web browser.
- The application will handle user registration and provide necessary feedback.

## Testing
To run the tests, use PHPUnit:
```
vendor/bin/phpunit tests/UserRegistrationTest.php
```

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.