# phpauthentication
PHP multilevel authentication

Credit: https://github.com/Hanlak/Three-Factor-authentication

# PHP Authentication - Multilevel Three-Factor Authentication

![PHP Authentication](https://github.com/Hanlak/Three-Factor-authentication/raw/main/images/phpauthentication.png)

This repository provides a PHP-based multilevel three-factor authentication system for secure user access to web applications. It incorporates three layers of authentication to ensure robust security.

## Overview

With the increasing need for secure authentication systems, traditional username-password combinations may not suffice. Multilevel three-factor authentication adds an extra layer of security by combining three factors:

1. **Something You Know:** The traditional username and password.
2. **Something You Have:** A one-time code generated and sent to the user's registered email or mobile device.
3. **Something You Are:** Biometric authentication (optional) such as fingerprint or face recognition.

## Features

- Secure user login with multilevel authentication.
- OTP (One-Time Password) verification via email or SMS.
- Optional biometric authentication support for added security.
- Configurable settings for timeout and session handling.
- Easy integration with existing PHP projects.

## Getting Started

Follow these steps to integrate the multilevel three-factor authentication system into your PHP web application:

1. Clone or download this repository.
2. Configure your PHP environment and set up the necessary database tables.
3. Customize the configuration file to fit your application requirements.
4. Use the provided classes and functions in your application for user authentication.

## Requirements

- PHP 7.0 or higher
- MySQL database (or any other compatible database system) 

## Installation

1. Clone the repository:

```
git clone https://github.com/Hanlak/Three-Factor-authentication.git
```

2. Set up the necessary database tables using the provided SQL file `database.sql`.

3. Customize the configuration file `config.php` with your database credentials and application settings.

4. Include the required files and classes in your PHP files to enable three-factor authentication.

## Usage

Once you have completed the installation and configuration, you can use the following functions and classes for user authentication:

```php
// Include the required files
require_once 'config.php';
require_once 'includes/functions.php';
require_once 'includes/class.authentication.php';

// Initialize the authentication class
$auth = new Authentication();

// User login with username and password
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Authenticate user using the multilevel three-factor process
    if ($auth->login($username, $password)) {
        // User successfully authenticated. Redirect to the dashboard.
        header('Location: dashboard.php');
    } else {
        // Authentication failed. Show error message or redirect to login page.
        echo "Invalid credentials. Please try again.";
    }
}

// User logout
if (isset($_GET['logout'])) {
    $auth->logout();
    header('Location: login.php');
}

// Check if the user is logged in
if ($auth->isUserLoggedIn()) {
    // User is logged in. Display the dashboard or relevant content.
    // ...
} else {
    // User is not logged in. Redirect to the login page.
    header('Location: login.php');
}
```

## Customization

You can customize the configuration settings in `config.php` to adapt the authentication system to your specific needs.

## Contributing

Contributions to this project are welcome! If you find any issues or have suggestions for improvements, feel free to create a pull request or open an issue.

## License

This project is licensed under the [MIT License](LICENSE).

---

Please note that the above information is a summary of the original repository. For detailed usage instructions, database setup, and other resources, refer to the [original repository](https://github.com/Hanlak/Three-Factor-authentication).
