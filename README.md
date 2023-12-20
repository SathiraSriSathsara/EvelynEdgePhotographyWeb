# Photographer Portfolio Website | evelynedge.com

This is a dynamic website designed for photographers to showcase their portfolios. The website is built using PHP and Bootstrap, providing a responsive and visually appealing experience for visitors.

## Features

- **Portfolio Showcase:** Display your photography portfolio with categorized albums and individual images.
- **Contact Form:** Allow potential clients to get in touch with you through a contact form.
- **About Section:** Share your professional background and photography style.
- **Responsive Design:** The website is designed to be accessible and visually appealing on various devices, including desktops, tablets, and mobile phones.

## Requirements

- Web server with PHP support
- MySQL database
- Bootstrap CSS framework (included in the project)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/SathiraSriSathsara/EvelynEdgePhotographyWeb.git
    cd EvelynEdgePhotographyWeb
    ```

2. Set up your MySQL database. Import the provided `database.sql` file to create the necessary tables.

3. Configure the database connection in the `config.php` file:

    ```php
    // config.php
    define('DB_HOST', 'your_database_host');
    define('DB_USER', 'your_database_user');
    define('DB_PASSWORD', 'your_database_password');
    define('DB_NAME', 'your_database_name');
    ```

4. Upload your portfolio images to the `images` directory.

5. Start your web server and visit the website in your browser.

## Configuration

Customize the website by modifying the following files:

- `config.php`: Database configuration.
- `about.php`: Edit the about section content.
- `contact.php`: Configure the email address to receive contact form submissions.
- `images/`: Add, remove, or replace portfolio images.

## Usage

1. Visit the website in your browser:

    ```bash
    http://localhost/photographer-portfolio
    ```

2. Explore the portfolio, learn more about the photographer in the About section, and use the contact form to get in touch.

## Contributing

If you'd like to contribute to the development of this project, please fork the repository and submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
