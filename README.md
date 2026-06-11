# FindSport — Sports Venue Booking API

REST API for booking time slots at a sports venue.
Supports multi-slot bookings, conflict detection, and token-based auth.

## Features

- Token-based authentication (api_token, no Passport/Sanctum)
- Create bookings with multiple time slots
- Add or update slots on existing bookings
- Time conflict detection (system-wide, not per user)
- PHPUnit tests covering core booking logic

## Tech Stack

PHP 8 · Laravel · PostgreSQL · PHPUnit

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /api/bookings | List user's bookings |
| POST | /api/bookings | Create booking with slots |
| POST | /api/bookings/{booking}/slots | Add slot to booking |
| PATCH | /api/bookings/{booking}/slots/{slot} | Update a slot |
| DELETE | /api/bookings/{booking} | Delete booking |

## Getting Started

```bash
git clone https://github.com/Daniil-Tevs/find_sport.git
cd find_sport
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Testing

```bash
php artisan test
```
