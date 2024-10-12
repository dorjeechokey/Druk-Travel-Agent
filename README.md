# Druk Travel Agent

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)

## Introduction
The **Travel Agent** feature allows users to browse, search, and book travel packages through a user-friendly interface. Users can contact the agency, book packages, and manage their travel watchlist for future reference.

## Features
- **Contact Us**: Allows users to send inquiries via a contact form.
- **Booking**: Users can book travel packages.
- **Booking List**: Users can view the list of booking.
- **Add to Watchlist**: Users can save travel packages to their personal watchlist.
- **Delete Watchlist**: Users can remove items from their watchlist.
- **View Watchlist**: Users can view saved packages in their watchlist.
  
## Prerequisites
Before you begin, ensure you have met the following requirements:
- **XAMPP**, **WAMP** (Windows), **MAMP** (Mac), or **LAMP** (Linux) for PHP and MySQL.
- Basic understanding of **PHP**, **HTML5**, **CSS3**, **JavaScript**, and **MySQL**.
  
## Installation
To install the project, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/your-repository.git
   cd your-repository
2. **Install XAMPP / WAMP / MAMP / LAMP**:
   - [Download XAMPP](https://www.apachefriends.org/index.html) for Windows/Mac/Linux, or use [WAMP](http://www.wampserver.com/en/) for Windows.

3. **Create a MySQL Database**:
   - Open phpMyAdmin (or your preferred database manager) and create a new database named `druk_travel`.

4. **Create the Necessary Tables**:
  - Execute the following SQL queries to set up the database tables:
     - contact_us
     - booknow
     - watchlist

## Technologies Used

- **PHP**: Handles server-side functionality, including processing form data and database operations.
- **HTML5**: Structures the website and web pages.
- **CSS3**: Adds styling and visual presentation to the pages.
- **JavaScript**: Manages dynamic front-end interactions, like adding to and removing from the watchlist.
- **MySQL**: Stores the application's data, such as user inquiries, bookings, and watchlists.

## Contributing

To contribute to this project, follow these steps:

1. **Fork the Repository**:
   - Fork the project on GitHub to create a copy in your own account.

2. **Create a New Branch**:
   - Create a new feature branch to isolate your changes:
     ```bash
     git checkout -b feature/your-feature-name
     ```

3. **Make Your Changes**:
   - Add the necessary features, bug fixes, or improvements to the codebase.

4. **Commit Your Changes**:
   - Use concise, descriptive commit message
