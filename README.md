# 🍽️ SiPa Recipes - Recipe Sharing Website

## 📌 Project Overview

**SiPa Recipes** is a full-stack recipe sharing web application built 
with PHP and MySQL. It allows users to browse recipes by category, 
submit their own recipes, leave reviews with star ratings, and contact 
the platform. The application features a dynamic rating system powered 
by MySQL triggers and a fully functional admin-ready database structure.

## 🌐 Live Demo

👉 [View Live Project](#) <!-- Add your hosting link here -->
 
## ✨ Features

### 👤 User Features
- 🏠 **Dynamic Homepage** — Displays quick recipes under 30 minutes 
  and top rated recipes automatically
- 🔍 **Category Filter** — Filter recipes by Breakfast, Lunch, 
  and Dinner
- 📖 **Recipe Detail Page** — Full recipe with ingredients, 
  instructions, prep time, cook time, and servings
- ⭐ **Review and Rating System** — Users can submit star ratings 
  and written reviews for any recipe
- 📝 **Submit Your Recipe** — Users can submit their own recipes 
  with image upload
- 📞 **Contact Form** — Users can send messages to the platform
- 🎨 **Smooth Animations** — WOW.js scroll animations throughout

### 🔧 Technical Features
- 🗄️ **MySQL Database Trigger** — Automatically recalculates 
  average rating after every new review submission
- 📸 **Image Upload System** — Recipe images uploaded and stored 
  on server
- 🔒 **SQL Injection Prevention** — Prepared statements used 
  throughout
- 📱 **Responsive Design** — Bootstrap grid system for all 
  screen sizes
- 🍪 **Session Management** — PHP sessions for form success 
  and error messages

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| PHP 8 | Server-side logic and templating |
| MySQL | Database with triggers |
| Bootstrap 4 | Responsive UI framework |
| JavaScript | Client-side interactions |
| HTML5 | Page structure |
| CSS3 | Custom styling |
| WOW.js | Scroll animations |
| Animate.css | Animation library |
| Font Awesome | Icons |
| Google Fonts | Typography |
| XAMPP | Local development server |

## 🗄️ Database Structure

### Tables

#### `recipes`
| Column | Type | Description |
|--------|------|-------------|
| recipe_id | INT | Primary key |
| Recipe_title | VARCHAR | Name of recipe |
| recipe_img | VARCHAR | Image filename |
| Category | VARCHAR | breakfast/lunch/dinner |
| description | TEXT | Recipe description |
| prep_time | INT | Preparation time in minutes |
| cook_time | INT | Cooking time in minutes |
| total_time | INT | Total time in minutes |
| serving | INT | Number of servings |
| ingredients | TEXT | Comma separated ingredients |
| instructions | TEXT | Step by step instructions |
| average_rating | FLOAT | Auto calculated by trigger |
| rating_count | INT | Total number of ratings |

#### `review`
| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary key |
| Name | VARCHAR | Reviewer name |
| Email | VARCHAR | Reviewer email |
| Recipe_title | VARCHAR | Which recipe reviewed |
| Rating | INT | 1 to 5 stars |
| Reviews | TEXT | Written review |
| created_at | TIMESTAMP | Auto timestamp |

#### `contact`
| Column | Type | Description |
|--------|------|-------------|
| Name | TEXT | Sender name |
| Email | TEXT | Sender email |
| Phone | INT | Phone number |
| Message | TEXT | Message content |

#### `submit_recipe`
| Column | Type | Description |
|--------|------|-------------|
| Id | INT | Primary key |
| Recipe_title | VARCHAR | Submitted recipe name |
| Category | VARCHAR | Recipe category |
| description | VARCHAR | Recipe description |
| ingredients | VARCHAR | Recipe ingredients |
| instructions | VARCHAR | Cooking instructions |
| prep_time | INT | Preparation time |
| cook_time | INT | Cooking time |
| total_time | INT | Total time |
| recipe_img | VARCHAR | Uploaded image |

### ⚡ MySQL Trigger
```sql
-- Automatically updates average rating after every review
CREATE TRIGGER update_average_rating 
AFTER INSERT ON review 
FOR EACH ROW 
BEGIN
  DECLARE avg_rating FLOAT;
  DECLARE count_rating INT;

  SELECT AVG(Rating), COUNT(*) 
  INTO avg_rating, count_rating
  FROM review
  WHERE Recipe_title = NEW.Recipe_title;

  UPDATE recipes
  SET average_rating = avg_rating,
      rating_count = count_rating
  WHERE Recipe_title = NEW.Recipe_title;
END
```

## 📁 Project Structure
sipa-recipes/
│
├── home.php              # Homepage with dynamic sections
├── recipee.php           # All recipes with category filter
├── view_recipee.php      # Single recipe detail page
├── review.php            # Review submission form
├── service.php           # Submit your own recipe
├── contact.php           # Contact form
├── about.php             # About us page
├── header.php            # Shared navigation header
├── footer.php            # Shared footer
├── style.css             # Custom styles
│
├── img/                  # Static images
│   ├── home.jpeg
│   ├── breakfast.jpeg
│   ├── lunch.jpeg
│   ├── dinner.jpeg
│   └── ...
│
├── recipe-img/           # Uploaded recipe images
│   ├── halwa-puri.jpeg
│   ├── chicken-biryani.jpeg
│   └── ...
│
├── css/                  # CSS libraries
│   ├── bootstrap.min.css
│   ├── animate.css
│   └── animate.min.css
│
├── js/                   # JavaScript files
│   ├── jquery.js
│   ├── bootstrap.min.js
│   └── wow.min.js
│
├── fonts/                # Custom fonts
│   ├── DancingScript
│   ├── PlayfairDisplay
│   └── Poppins
│
├── recipee_website.sql   # Complete database dump
└── README.md             # Project documentation

## 🚀 Getting Started

### Prerequisites
- XAMPP or any PHP local server
- PHP 8.0 or higher
- MySQL 5.7 or higher
- Web browser

### Installation

1. Clone the repository
```bash
git clone https://github.com/yourusername/sipa-recipes.git
```

2. Move to XAMPP htdocs folder
```bash
# Move the project folder to:
C:/xampp/htdocs/sipa-recipes
```

3. Start XAMPP
```bash
# Open XAMPP Control Panel
# Start Apache
# Start MySQL
```

4. Import the database
```bash
# Open phpMyAdmin at http://localhost/phpmyadmin
# Create new database called: recipee_website
# Click Import
# Select the file: recipee_website.sql
# Click Go
```

5. Run the project
```bash
# Open your browser and go to:
http://localhost/sipa-recipes/home.php
```

## 🎯 Key Learning Outcomes

Building this project demonstrated:

- **Full Stack PHP Development** — Server-side rendering with 
  dynamic data
- **MySQL Database Design** — Relational tables with proper 
  relationships
- **Database Triggers** — Automated background database operations
- **File Upload Handling** — Secure server-side file management
- **SQL Injection Prevention** — Using prepared statements
- **Session Management** — PHP sessions for user feedback
- **MVC-like Architecture** — Separating concerns with includes
- **Bootstrap Responsive Design** — Mobile-first development

## 🌟 Highlights For Employers

> This project demonstrates understanding of **server-side 
> programming**, **relational database design**, **SQL triggers**, 
> and **secure form handling** — core skills required for 
> backend development roles.

## 🔮 Future Improvements

- [ ] Add user authentication and login system
- [ ] Add admin dashboard to approve submitted recipes
- [ ] Add recipe search functionality
- [ ] Add recipe bookmarking feature
- [ ] Add social sharing buttons
- [ ] Migrate to Laravel framework
- [ ] Add API endpoints for mobile app
- [ ] Deploy to live hosting server

## 📊 Sample Data Included

The database dump includes:
- ✅ 15 authentic Pakistani recipes across 3 categories
- ✅ Sample reviews and ratings
- ✅ Working trigger for automatic rating calculation
- ✅ Sample contact and submission data

## 👩‍💻 About the Developer

**[Palwasha]**
Software Engineering fresher with experience in both 
PHP/MySQL traditional web development and modern MERN stack 
applications. Passionate about building practical solutions 
that solve real world problems.

- 🌐 Portfolio: [your-portfolio-link]
- 💼 LinkedIn: [[your-linkedin-link](https://www.linkedin.com/in/palwasha-khan2201/)] 

## 📄 License

This project is built for **educational purposes** as part of 
a web development learning journey.

---

⭐ If you found this project helpful, please give it a star!
