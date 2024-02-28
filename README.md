# Quantum Leap

A simple file transfer website, currently in production. Quantum only has basic neccessary functions to make the website work, with time it will become a full fledged file transfer web application. Please see [a relative link](TODO.md) for current progress and [a link](https://gitnjole.github.io/projects/quantum-leap/) for a more in depth explanation of the production process.

## Features
- **File management:** Users can upload and manage their files

## Installation

These are current instructions, upon completeion I would like to make the application deployable through Docker.

1. Clone the repository to your local machine:
```bash
git clone https://github.com/gitnjole/quantum-leap
```

2. Install dependencies:
```bash
composer install
```

3. Create a copy of '.env.example' file and rename it to '.env'.

4. Edit the following entries in the .env, located at the bottom:
```bash
SEED_USERNAME="yourusername"
SEED_EMAIL="your@email.com"
SEED_PASSWORD="admin"
```

5.  Migrate the database:
```bash
php artisan migrate
```

6.  Seed the database with your user credentials:
```bash
php artisan db:seed --class=UserSeeder
```

5. Serve the application:
```bash
php artisan serve
```

## Usage

- You can now login with your account and start uploading files

## Further ideas

Please see [a relative link](TODO.md)