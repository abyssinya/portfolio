# Portfolio Website – Project Plan  

**Tech Stack:** Laravel 11 + React (Vite) + MySQL + Tailwind CSS  
**Team Members:**  
- Mundino   
- Abdo  
- Ekram

---

## Project Overview  

We are building a **personal/team portfolio website** to showcase our projects, skills, and experiences.  
The website will have both a **public-facing UI (React)** and an **admin panel (Laravel)** for managing content such as Projects, Team Members, and Contact Messages.

---


---

## Tasks Breakdown  

Each section below can be created as a **GitHub Issue**.  
Use branch naming like `feature/<task-name>` and link PRs using “Fixes #<issue_number>”.

---

### Issue #1 – Laravel + React Starter Setup  
**Assigned to:** Mundino  
**Tasks:**  
- [ ] Install Laravel 11  
- [ ] Install React with Vite (`php artisan breeze:install react`)  
- [ ] Configure `.env` with database details  
- [ ] Run migrations  
- [ ] Test with `php artisan serve` and `npm run dev`  
- [ ] Push initial repo to GitHub  


---

### Issue #2 – Project Model & API (Backend)  
**Assigned to:** Abdo  
**Tasks:**  
- [ ] Create model & migration: `Project` (title, description, tech_stack, image, url)  
- [ ] Create controller: `ProjectController`  
- [ ] Add routes in `routes/api.php`  
- [ ] Return JSON response for `/api/projects`  
- [ ] Test API in Postman  


---

### Issue #3 – React Home Page (Frontend)  
**Assigned to:** Ekram 
**Tasks:**  
- [ ] Create `Home.jsx` component  
- [ ] Add welcome section + short team intro  
- [ ] Add navigation links (Home, Projects, About, Contact)  
- [ ] Style using TailwindCSS  


---

### Issue #4 – React Projects Page  
**Assigned to:** Ekram  
**Depends on:** Issue #2  
**Tasks:**  
- [ ] Fetch `/api/projects` data 
- [ ] Display project cards  
- [ ] Add filter or grid layout for responsiveness  


---

### Issue #5 – Team Members Section (Backend + Frontend)  
**Assigned to:** Mundino  
**Tasks:**  
- [ ] Create model `TeamMember` (name, role, photo, bio, social links)  
- [ ] Create API `/api/team`  
- [ ] Build frontend `About.jsx` to show all members  


---

### Issue #6 – Contact Form Integration  
**Assigned to:** Abdo  
**Tasks:**  
- [ ] Backend: Create Contact model & store messages in DB  
- [ ] API endpoint: `POST /api/contact`  
- [ ] Frontend: React form for sending name/email/message  
- [ ] Add validation and success message  


---

### Issue #7 – Authentication (Sanctum)  
**Assigned to:** Mundino  
**Tasks:**  
- [ ] Install & configure Laravel Sanctum  
- [ ] Setup login/register endpoints  
- [ ] Protect admin routes  
- [ ] Create React Admin login page /Laravel Breeze 


---

### Issue #8 – Admin Dashboard (CRUD)  
**Assigned to:** Ekram 
**Tasks:**  
- [ ] Create protected React routes for admin pages  
- [ ] CRUD forms for managing Projects and Team Members   

---

### Issue #9 – Deployment Setup  
**Assigned to:** Mundino  
**Tasks:**  
- [ ] Set up production environment on Render, Heroku, or Laravel Forge  
- [ ] Configure `.env` for production database  
- [ ] Deploy React build (`npm run build`)  
- [ ] Test endpoints on live server  


---

### Issue #10 – Documentation & README  
**Assigned to:** All  
**Tasks:**  
- [ ] Document setup steps  
- [ ] Add team roles, tech stack, screenshots, and deployment link  
- [ ] Include contribution guidelines  
- [ ] Add license and project summary  


---

## Workflow Rules

- **Branch per task:** `feature/<task-name>`  
- **Pull Request naming:** “Fixes #<issue_number> – <short_description>”  
- **Code review:** At least one teammate must approve before merging.  
- **Commit messages:** Be descriptive and small (1 feature = 1 commit).  
- **Testing:** Test locally before every PR merge.

---

## 🧠 Suggested Tools
| Purpose | Tool |
|----------|------|
| Repo Hosting | GitHub |
| Project Management | GitHub Projects (Kanban Board) |
| Communication | WhatsApp / Discord / Slack |
| API Testing | Postman |
| Code Editor | VS Code |
| UI Design (optional) | Figma |

---

