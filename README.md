# Ocean Dolphin - Student Visa Consultancy

Welcome to the **Ocean Dolphin** project! This repository contains the source code for the student visa consultancy website.

## Overview

This platform provides immigration and visa services easily in Surat. It specializes in student visas for countries such as the UK, USA, Canada, Australia, New Zealand, Singapore, and Europe. It also offers dedicated IELTS and PTE coaching.

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript, jQuery, Bootstrap, Owl Carousel, FontAwesome.
- **Backend / Form Processing**: PHP, MySQL.

## Structure

- `public/`: Contains all static assets like images, CSS stylesheets, and JavaScript libraries.
- `index.html`: The main landing page.
- `form.php`, `formc.php`: PHP scripts backend for processing user queries from the "Contact Us" form and saving them into a database.
- Other HTML files represent various site pages (Study Abroad regions, Student Services, Coaching, etc.).

## Setup Instructions

1. Clone the repository.

   ```bash
   git clone <repository_url>
   ```

2. Serve the HTML files using any static file server (for frontend testing).
3. For the PHP form processing to work:
   - Ensure you have a local server environment like XAMPP, WAMP, or MAMP installed.
   - Place this project folder in the `htdocs` or equivalent web root directory.
   - Import the database schema required for `form.php` (table `form` inside database `Enquir` with columns: `name`, `message`, `number` or `phone`, `email`).
   - Run the server and access the platform via `http://localhost/webproject-01`.
