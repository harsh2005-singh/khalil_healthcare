# Khalil Healthcare

> A custom WordPress website for Khalil Healthcare, built using PHP templates and frontend assets, with separate pages for services, service areas, projects and other website sections.

![WordPress](https://img.shields.io/badge/WordPress-Custom_Theme-21759B?logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-Theme_Development-777BB4?logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-Markup-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Styling-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Frontend-F7DF1E?logo=javascript&logoColor=black)
![Status](https://img.shields.io/badge/Status-Live-success)

**Project:** Khalil Healthcare · **CMS:** WordPress

---

## 🌐 Live Website

| Environment | URL |
| --- | --- |
| **Production** | [kalilhealthcare.com.au](https://kalilhealthcare.com.au/) |
| **Demo / Staging** | [proclivitydemo.co.in/demosp/wordpress/khalil-healthcare](https://proclivitydemo.co.in/demosp/wordpress/khalil-healthcare/) |

---

## 📑 Table of Contents

- [Overview](#-overview)
- [My Contribution](#-my-contribution)
- [Key Features and Pages](#-key-features-and-pages)
- [Tech Stack](#️-tech-stack)
- [Theme Structure](#-theme-structure)
- [WordPress Theme Architecture](#-wordpress-theme-architecture)
- [Responsive Design](#-responsive-design)
- [Getting Started](#-getting-started)
- [Development Workflow](#-development-workflow)
- [Learning Outcomes](#-learning-outcomes)
- [Project Note](#️-project-note)
- [Developer](#-developer)

---

## 📌 Overview

**Khalil Healthcare** is a WordPress website project organized around custom PHP page templates, shared theme components and frontend assets.

The theme directory includes templates for the homepage, About, Approach, Blog, Contact, Projects, Services and Service Areas. It also contains dedicated templates for individual services, individual service areas, blog categories, single posts and error pages.

The project structure separates page-specific templates from shared layout components, theme functionality and frontend resources, making the codebase easier to maintain and extend.

🔗 **Live Website:** [https://kalilhealthcare.com.au/](https://kalilhealthcare.com.au/)

🔗 **Demo Website:** [https://proclivitydemo.co.in/demosp/wordpress/khalil-healthcare/](https://proclivitydemo.co.in/demosp/wordpress/khalil-healthcare/)

---

## 👨‍💻 My Contribution

The repository is structured around a custom WordPress theme.

### 1. WordPress Theme Development

- Organized the website into dedicated PHP page templates.
- Used WordPress theme files to structure different website sections.
- Maintained shared components through reusable header and footer templates.
- Kept theme-related functionality in `functions.php`.

### 2. Page Template Organization

Created separate template files for the homepage, services, service areas, projects, blog and other website sections.

### 3. Frontend Structure

Organized frontend resources in the `assets/` directory and maintained the theme stylesheet in `style.css`.

---

## ✨ Key Features and Pages

The repository contains templates for the following sections:

- **Homepage** — `front-page.php`
- **About** — `about.php`
- **Approach** — `approacg.php`
- **Blog** — `blog.php`
- **Blog Categories** — `category.php`
- **Contact** — `contact.php`
- **Projects** — `project.php`
- **Services** — `service.php`
- **Service Areas** — `service-area.php`
- **Individual Service Pages** — `single-service.php`
- **Individual Service Area Pages** — `single-service-area.php`
- **Single Posts** — `single.php`
- **404 Error Page** — `404.php`

The website also includes shared header and footer files, theme configuration and frontend assets.

---

## 🛠️ Tech Stack

| Layer | Technologies |
| --- | --- |
| **CMS** | WordPress |
| **Backend / Templates** | PHP, WordPress theme templates |
| **Frontend** | HTML5, CSS3, JavaScript |
| **Theme Configuration** | `functions.php`, `style.css` |
| **Assets** | Files organized in the `assets/` directory |
| **Additional Includes** | `inc/` directory |

> The technology list reflects the visible project structure and intended WordPress stack. Specific JavaScript libraries, plugins and integrations should be documented after confirming them in the source code.

---

## 📂 Theme Structure

```text
khalil/
├── assets/                  # Frontend assets
├── inc/                     # Additional theme includes
├── 404.php                  # Not-found page template
├── about.php                # About page
├── approacg.php             # Approach page
├── blog.php                 # Blog page
├── category.php             # Blog category template
├── contact.php              # Contact page
├── footer.php               # Shared footer
├── front-page.php           # Homepage
├── functions.php            # Theme setup and functionality
├── header.php               # Shared header
├── index.php                # Default theme template
├── project.php              # Projects page
├── README.md                # Project documentation
├── service-area.php         # Service areas page
├── service.php              # Services page
├── single-service-area.php  # Individual service area template
├── single-service.php       # Individual service template
├── single.php               # Single post template
└── style.css                # Theme stylesheet and metadata
