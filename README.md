# Tranquillity

Tranquillity is a Laravel-based wellness and self-reflection web app with mood tracking, guided breathing sessions, a technique library, progress tracking, journaling, and an AI chat endpoint.

## Features

- Daily mood logging from the dashboard
- Guided breathing and relaxation sessions
- Technique library and detail pages
- Progress tracking view
- Daily journal page
- Profile management and authenticated routes
- Chat response endpoint with rate limiting

## Tech Stack

- Laravel 13
- PHP 8.3+
- Vite + Tailwind CSS
- SQLite for local development

## Local Setup

### Prerequisites

- PHP 8.3 or newer
- Composer
- Node.js 20+ and npm

### Installation

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

### Run the app locally

```bash
php artisan serve
npm run dev
```

Open the app at the local URL shown by Artisan, usually `http://127.0.0.1:8000`.

## Build and Test

```bash
php artisan test
npm run build
```

## Project Structure

- `routes/web.php` defines the authenticated app routes.
- `app/Http/Controllers` contains the application logic.
- `resources/views` contains the Blade pages for the app experience.
- `database/migrations` and `database/seeders` define the app data layer.

## Notes

- Sensitive environment files such as `.env` are intentionally ignored.
- Generated assets and dependencies are not committed; install them locally with Composer and npm.

## License

No license has been specified for this repository yet.
