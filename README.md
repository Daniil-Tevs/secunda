# Secunda — Organizations Directory API

REST API for a directory of organizations, buildings, and activity categories.
Supports geo-search, tree-structured activity classification, and API key auth.

## Features

- Static API key authentication
- Organizations linked to buildings and activity categories
- Tree-structured activities (up to 3 levels deep)
- Geo-search: find organizations within a radius or bounding box
- Search by organization name and activity type (includes nested categories)
- Docker support for easy local setup
- Swagger UI / ReDoc documentation

## Tech Stack

PHP 8 · Laravel · PostgreSQL · Docker · Swagger

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /api/organizations | List by building or activity |
| GET | /api/organizations/{id} | Organization details |
| GET | /api/organizations/search | Search by name or activity |
| GET | /api/organizations/nearby | Geo-search by radius or bbox |

## Getting Started

```bash
git clone https://github.com/Daniil-Tevs/secunda.git
cd secunda
cp .env.example .env
docker-compose up -d
php artisan migrate --seed
```

API docs available at `/api/documentation` after startup.

## Testing

```bash
php artisan test
```
