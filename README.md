# AgriConnect - Bridging Farmers, Buyers, and Resources

## Project Overview
AgriConnect is an integrated web platform designed to support farmers, buyers, and agricultural stakeholders. It provides a centralized hub for commerce, education, financial assistance, and farming tools. By bridging the gap between rural agricultural producers and urban consumers, AgriConnect enhances efficient trade, access to knowledge, financial security, and disease awareness.

This platform enables farmers to sell products, rent or share equipment, access learning resources, and stay informed about crop diseases. Through its modern web-based approach, AgriConnect fosters economic sustainability, better farming practices, and community-driven solutions for the agricultural sector.

## Features

### Marketplace & Finance Module (Group 1)
1. Farmer-to-Buyer Marketplace  
   - Farmers can post and sell crops/products  
   - Buyers can browse listings, place orders, and contact sellers  

2. Seed and Fertilizer Marketplace  
   - A dedicated section for certified seeds, fertilizers, and agricultural tools from vendors  

3. Agri Finance Helper  
   - Farmers can apply for micro-loans and financial support  
   - A simple budget planner helps them calculate needs  
   - Admin approval system for loan requests  

4. Admin Dashboard (Commerce)  
   - Admin can manage product listings, user accounts, and finance requests  

### Learning, Tools & Alert Module (Group 2)
1. Farm Equipment Sharing Portal  
   - Farmers can rent or share tools such as tractors and sprayers  
   - Booking system with date availability and contact options  

2. Agri Learning Hub  
   - Categorized educational content including tutorials, tips, and videos on smart farming  
   - Searchable interface for ease of use  

3. Disease Alert System  
   - Farmers can report crop diseases with photos and locations  
   - Admin verifies and publishes region-based alerts for all users  

4. Admin Dashboard (Learning & Alerts)  
   - Admins manage learning content, approve tool listings, and verify disease reports  

## Project Requirements

### Functional Requirements  
- User registration and login for farmers, buyers, and admins  
- Product listing, browsing, and ordering system  
- Financial request submission and admin approval process  
- Equipment sharing system with rental options  
- Tutorial upload, search, and viewing functionality  
- Disease reporting with photo attachments and location-based alerts  
- Admin panels for managing users, marketplace, loans, educational content, and disease alerts  

### Non-Functional Requirements  
- Responsive design for mobile and tablet compatibility  
- Secure authentication with role-based access control  
- User-friendly interface with intuitive navigation  
- Proper error handling and validation for seamless user experience  
- Performance optimization for efficient image loading and form handling

## Tech Stack  

- Frontend: React.js, Axios, React Router, Tailwind CSS, Bootstrap  
- Backend: Laravel (PHP Framework), REST APIs, WebSockets (for real-time updates)  
- Database: MySQL / PostgreSQL, Firebase (optional for real-time sync)  
- Authentication: Laravel Sanctum or Passport, OAuth2 (for third-party login)  
- File Storage: Local server, AWS S3 / Cloudinary (for scalable image/video storage)  
- Version Control: Git & GitHub, GitHub Actions (for CI/CD automation)

## Installation & Setup

To run AgriConnect locally, you need Node.js, npm or yarn, PHP, Composer, MySQL/PostgreSQL, and Git installed on your system.

1. Clone the repository  
   ```sh
   git clone https://github.com/yourrepo/agriconnect.git
2. Navigate into the project directory
       cd WEBENGII
   
3. Backend Setup (Laravel API)
    - Navigate to the backend folder
       cd backend
    - Install dependencies
       composer install
    - Run migrations to set up the database
       php artisan migrate
    - Start the Laravel development server
       php artisan serve

4. Frontend Setup (React UI)
    -Navigate to the frontend folder
      cd frontend
    -Install dependencies
      npm install
    - Start the React development server
      npm start

5. Access the Application
     http://localhost:3000











 
