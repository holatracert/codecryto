# User Registration Module

This project is a user registration module built with PHP, MySQL, Bootstrap 5, and AdminLTE. It provides a simple and efficient way for users to register and manage their accounts.

## Project Structure

```
user-registration-module
├── public
│   ├── index.php              # Main entry point of the application
│   ├── register.php           # User registration form and handling
│   ├── assets
│   │   ├── css
│   │   │   └── custom.css     # Custom CSS styles
│   │   └── js
│   │       └── custom.js      # Custom JavaScript for interactivity
│   └── templates
│       ├── header.php         # Header template for consistent layout
│       └── footer.php         # Footer template for consistent layout
├── src
│   ├── config
│   │   └── database.php       # Database connection settings
│   ├── controllers
│   │   └── UserController.php  # Handles user registration logic
│   ├── models
│   │   └── User.php           # User entity and database interactions
│   └── views
│       └── register_view.php   # Registration view with Bootstrap components
├── vendor                      # Third-party libraries (AdminLTE, Bootstrap 5)
├── composer.json               # Composer configuration file
└── README.md                   # Project documentation
```

## Installation

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install the required dependencies.
4. Configure the database settings in `src/config/database.php`.
5. Access the application via your web server (e.g., `http://localhost/user-registration-module/public/index.php`).

## Usage

- Navigate to the registration page to create a new user account.
- Fill in the required fields and submit the form.
- Upon successful registration, you will receive a confirmation message.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any enhancements or bug fixes.

## License

This project is open-source and available under the [MIT License](LICENSE).