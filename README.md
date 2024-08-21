# Student Profile Management System using Laravel

Welcome to the Student Profile Management System built with Laravel! This repository provides a practical guide for beginners to learn CRUD (Create, Read, Update, Delete) operations in Laravel, focusing on student profile management.

## Features

- **Create**: Add new student profiles to the database.
- **Read**: View detailed information about each student.
- **Update**: Modify existing student details as needed.
- **Delete**: Remove student records from the database.
- **List**: Display a list of all students currently stored.

## Getting Started

### Prerequisites
- Basic understanding of PHP and web development concepts.
- Composer installed globally on your machine.
- A local development environment such as Laravel Valet, Homestead, XAMPP, or WAMP.

### Installation
1. Clone this repository: `git clone https://github.com/surulirajan-mca/student-profile-management-system-using-laravel.git`
2. Navigate into the project directory: `cd your-repo`
3. Install PHP dependencies: `composer install`
4. Copy `.env.example` to `.env` and configure your database.
5. Generate application key: `php artisan key:generate`
6. Migrate the database: `php artisan migrate`
7. Serve the application: `php artisan serve`

## Usage
1. **Create a Student**: Navigate to the create page and fill out the student details.
2. **Update Student Details**: Visit the edit page to modify existing student information.
3. **Delete a Student**: Remove unwanted student profiles using the delete functionality.
4. **List of Students**: View all students currently stored in the database.

## Database
A complete database has been added in the database/schema folder. Both Database schema and table datas also added.

## .gitignore file
In this project, some files haven't been uploaded. pls check below files which was not uploaded. If you need below files, pls send a message.

/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.phpunit.result.cache
docker-compose.override.yml
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
/.idea
/.vscode

## Contributing
Contributions are welcome! Please feel free to submit a pull request or open an issue for any bugs or feature requests.

