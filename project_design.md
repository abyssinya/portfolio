# Portfolio Project Design (Laravel + React)

This document provides the full **project design**, including:
- Sitemap & Page Flow
- UI/UX Page Layouts
- Database Schema (ERD description)
- API Endpoints
- Component Structure
- Admin Dashboard Design
- Folder Structure (Laravel + React)
- User Roles & Permissions

---

# 1. Sitemap & Page Flow

```
Home
├── Projects
│    └── Project Details
├── Team
└── Contact

Admin
├── Dashboard Home
├── Manage Projects
│    ├── List
│    ├── Create
│    └── Edit
├── Manage Team Members
│    ├── List
│    ├── Create
│    └── Edit
└── Messages
     └── View Message
```

---

# 2. UI/UX Page Designs

## **2.1 Home Page**
**Sections:**
- Hero (name, tagline, CTA "View Projects")
- Featured Projects
- Team highlight
- Contact CTA
- Footer (social links)

## **2.2 Projects Page**
**Sections:**
- Grid of all projects
- Filters (Tech stack)
- Project card (image, title, short description)

## **2.3 Project Details Page**
**Sections:**
- Title, big banner image
- Description
- Full tech stack
- Live link / GitHub link
- Related projects

## **2.4 Team Page**
**Sections:**
- Profile photo
- Name
- Role
- Bio
- GitHub/LinkedIn buttons

## **2.5 Contact Page**
**Fields:**
- Name
- Email
- Subject
- Message textarea
- Submit button

---

# 3. Database Schema

## **Tables:**
### **users**
- id
- name
- email
- password
- role ("admin", "editor", "viewer")

### **projects**
- id
- user_id (FK)
- title
- slug
- description
- tech_stack (JSON)
- image
- url

### **team_members**
- id
- name
- role
- bio
- photo
- github
- linkedin

### **messages**
- id
- name
- email
- subject
- message
- created_at


# 4. API Endpoints

## **Authentication (Sanctum + Breeze)**
```
POST /login
POST /register
POST /logout
GET  /user
```

---

## **Projects API**
```
GET    /api/projects
GET    /api/projects/{id}
POST   /api/projects          (Admin)
PUT    /api/projects/{id}     (Admin)
DELETE /api/projects/{id}     (Admin)
```

---

## **Team Members API**
```
GET    /api/team
GET    /api/team/{id}
POST   /api/team              (Admin)
PUT    /api/team/{id}         (Admin)
DELETE /api/team/{id}         (Admin)
```

---

## **Messages API**
```
POST  /api/contact
GET   /api/messages           (Admin)
GET   /api/messages/{id}      (Admin)
DELETE /api/messages/{id}     (Admin)
```

---

# 5. React Component Structure

```
src/
├── Pages/
│    ├── Home.jsx
│    ├── Projects.jsx
│    ├── ProjectDetails.jsx
│    ├── Team.jsx
│    ├── Contact.jsx
│    └── Admin/
│         ├── Dashboard.jsx
│         ├── Projects/
│         │      ├── List.jsx
│         │      ├── Create.jsx
│         │      └── Edit.jsx
│         └── Team/
│                ├── List.jsx
│                ├── Create.jsx
│                └── Edit.jsx
├── Components/
│    ├── Navbar.jsx
│    ├── Footer.jsx
│    ├── ProjectCard.jsx
│    ├── TeamCard.jsx
│    ├── ContactForm.jsx
│    └── AdminSidebar.jsx
└── utils/
```

---

# 6. Admin Dashboard Structure

## **Dashboard Home:**
- Summary cards
  - Total projects
  - Messages
  - Team members

## **CRUD Pages:**
### **Projects**
- List (with pagination)
- Add Project
- Edit Project
- Delete Project

### **Team Members**
- List
- Add
- Edit

### **Messages**
- List messages
- View details

---

# 7. Folder Structure (Laravel + React)

```
laravel-root/
├── app/
├── resources/
│    ├── js/ (React)
│    ├── css/
│    ├── views/
├── routes/
│    ├── api.php
│    └── web.php
├── database/
│    ├── migrations/
│    └── seeders/
└── public/
```

---

# 8. User Roles & Permissions

### **Admin**
- Full CRUD for projects
- Full CRUD for team members
- Can view messages

### **Viewer (public)**
- Can view all pages
- Can send contact form

---

# 9. Tech Stack Summary

### **Backend**
- Laravel 11
- Sanctum Authentication
- RESTful API

### **Frontend**
- React 19
- TailwindCSS 4
- Vite
- Inertia

### **Deployment**
- Laravel Cloud
- MySQL database

---




