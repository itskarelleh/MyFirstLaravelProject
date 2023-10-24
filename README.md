# Tripit: Travel Planner

This is a dashboard developed with Laravel where users are able to get insight into the destinations they are traveling to.

## Features
Users have the ability to:
- See their trips
- Add todos to better organize for their trips

## Stack
- Laravel
- Livewire
- Tailwind.css
- SQLite

## Ongoing Changes and Features Being Added
- Authentication
- Event tracker and timeline
- Dark Mode

## How to Run Locally
To run this travel planner locally on your machine, follow these steps:

### Prerequisites
Before you begin, ensure you have the following tools installed on your machine:

PHP (version 7.4 or higher)
Composer
Node.js and npm (for compiling assets)
SQLite (or any other compatible database)
Git

### Installation
Clone the Repository:

Open your terminal and run the following command to clone the repository to your local machine:

```bash
git clone https://github.com/itskarelleh/travel-planner-dashboard.git
```
Navigate to the Project Directory:

Change your current directory to the project's root folder:

```bash
cd travel-planner-dashboard
```

Install PHP Dependencies:

Run the following command to install the PHP dependencies using Composer:

```bash
composer install
```
Install JavaScript Dependencies:

Next, you need to install JavaScript dependencies using npm. Run the following commands:

```bash
npm install
```
Compile Assets:

Compile the application's assets (JavaScript and CSS) using the following command:
```bash
npm run dev
```
If you are planning to make changes to assets, you can use npm run watch for automatic recompilation during development.

Set Up the Environment File:

Duplicate the .env.example file and save it as .env. Then, generate a unique application key:

```bash
cp .env.example .env
php artisan key:generate
```
Configure the Database:

Open the .env file and set the database connection details. By default, this application is configured to use SQLite. You can use the SQLite database for quick setup or configure other databases like MySQL or PostgreSQL.

For SQLite, you don't need to create a database; Laravel will create a SQLite database file for you.

Run Migrations:

Run the database migrations to create the necessary tables:

```bash
php artisan migrate
```

Start the Development Server:

You can start the Laravel development server using the following command:

```bash
php artisan serve
```
This will start the development server at http://localhost:8000. You can access the application by opening this URL in your web browser.

Access the Application:

Open your web browser and navigate to http://localhost:8000. You should see the Tripit Travel Planner up and running locally.

You can now explore and interact with the application locally. Make sure to check the ongoing changes and features being added, and feel free to contribute to the project or customize it to your needs. Enjoy using Tripit!




