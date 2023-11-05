Library Management System

The Library Management System is a web-based application designed for schools and colleges to manage their library resources efficiently. This system consists of two main modules:
Admin Panel
Admin Features

    Admin Dashboard: The admin can access a dashboard for managing the library's resources.
    Category Management: The admin can add, update, or delete book categories.
    Author Management: Authors' information can be added, updated, or deleted.
    Book Management: The admin can add, update, or delete books in the library's collection.
    Book Issuance: The admin can issue a new book to a student and update the details when a student returns a book.
    Student Search: The admin can search for students by their student ID and view their details.
    Password Change: Admins can change their passwords for security.

Student Portal
Student Features

    Registration: Students can register and receive a unique student ID.
    Dashboard: After logging in, students have access to their personal dashboard.
    Profile Update: Students can update their profile information.
    Issued Books: Students can view the books they have borrowed and their return date and time.
    Password Change: Students have the option to change their passwords.
    Password Recovery: A password recovery feature is available for students.

How to Run the Project

    Download and Unzip the Project: Download the project files and unzip them to your local system.

    Copy the "library" Folder to the Root Directory: Place the "library" folder from the unzipped project into the root directory of your web server.

    Database Configuration:
        Open phpMyAdmin.
        Create a new database named library.
        Import the database schema from the library.sql file provided in the project's zip package.

    Access the Application:
        Open your web browser and enter the following URL: http://localhost/library to access the user interface.

Login Details for Users:

    Username: guest@gmail.com
    Password: Guest@123

To access the admin panel:

    Admin Panel URL: http://localhost:8080/Libary/index.php

Login Details for Admins:

    Username: admin
    Password: admin@123
