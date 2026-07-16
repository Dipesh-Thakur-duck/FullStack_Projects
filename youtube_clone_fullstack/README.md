# YouTube Clone (Full Stack)

A full-stack YouTube-style video platform built to practice end-to-end web development — from a static frontend to a database-backed admin system for managing video content.

## Overview

This project replicates the core browsing experience of YouTube: a video feed displaying thumbnails, titles, and links, all served from a custom backend admin panel where videos can be added, edited, and managed.

## Features

- Responsive video feed layout displaying thumbnail, title, and video link
- Admin dashboard (built with Filament) to add, edit, and delete video entries
- Video details managed through the admin panel: thumbnail image, title, video link, and other metadata
- Clean separation between the public-facing frontend and the admin backend

## Tech Stack

**Frontend**
- HTML5
- CSS3

**Backend**
- Laravel (PHP framework)
- Filament (admin panel / resource management)
- Eloquent ORM (database interaction)
- MySQL (database)

## How It Works

1. An admin logs into the Filament dashboard and adds a new video entry — uploading a thumbnail image and entering the video title, link, and other details.
2. Laravel stores this data in the database via Eloquent ORM.
3. The public frontend fetches and displays all video entries in a YouTube-style grid, pulling thumbnail, title, and link data dynamically from the backend.
4. Visitors can browse the video feed and click through to watch videos via the linked URLs.

## Screenshots

*(Add screenshots of the video feed and the Filament admin panel here)*

## Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL
- Node.js & npm (if compiling frontend assets)

### Installation

```bash
# Clone the repository
git clone https://github.com/Dipesh-Thakur-duck/FullStack_Projects.git
cd FullStack_Projects/youtube_clone_fullstack

# Install PHP dependencies
composer install

# Copy environment file and configure database
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Serve the application
php artisan serve
```

Then visit `http://localhost:8000` to view the app, and `http://localhost:8000/admin` to access the Filament admin panel.

## What I Learned

- Structuring a Laravel backend to serve dynamic content to a static-style frontend
- Using Filament to rapidly build an admin CRUD interface without writing custom forms/controllers from scratch
- Managing relationships and data through Eloquent ORM
- Handling image/thumbnail uploads and storage in a Laravel app

## Future Improvements

- Add user authentication and comments
- Add video categories/search functionality
- Improve responsive design for mobile devices

## Author

**Dipesh Thakur**
[GitHub](https://github.com/Dipesh-Thakur-duck) · BIT Student, Texas College of Management and IT