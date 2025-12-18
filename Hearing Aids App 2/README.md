# Hearing Aids Price Guide (Laravel 11/12) — Assignment 2 README

## Project Summary

The Hearing Aids Price Guide is a web application built on Laravel, aimed at assisting users in comparing hearing aids based on cost and compatibility. The project began as a simple CRUD application in Assignment 1 and has been enhanced in Assignment 2 to showcase more sophisticated web development principles and efficient utilization of the Laravel framework. The application offers a tidy, user-friendly interface designed for desktop usage (target resolution 1366×768), featuring uniform navigation and distinct feedback messages for tasks like creating, modifying, or removing records.

The main objective of the application is to enable users to explore a selection of hearing aids and evaluate them based on important features such as brand, model/type (hearing device), cost per pair, rechargeable capability, and suitability ratings for various scenarios (sound clarity, active lifestyle, small gatherings, and social settings). This creates a valuable situation in which users can sort and evaluate products according to price and functional requirements.

---

## How to Install and Run the Project

To run the application locally, the required environment is PHP 8+, Composer, and a MySQL/MariaDB database server.

1. **Download or clone the project** into your local machine.
2. **Install dependencies** using Composer.
3. Create a **MySQL/MariaDB database** (for example: `hearing_aids_db`).
4. Update the project’s environment configuration file (`.env`) to match your database credentials (database name, username, password, host).
5. Run the database setup using Laravel migrations and seeders. This automatically creates the database tables and inserts example data so the app can be tested immediately.
6. Start the Laravel development server and open the app in your browser.

The project includes migrations and seeders to make the marking process smooth and reproducible. A marker can reset the database and recreate the full data set using the included tooling.

---

## Application Requirements Coverage (Assignment 2)

### 1) Extends Assignment 1

This submission directly enhances the Assignment 1 web application by incorporating extra features that extend beyond fundamental CRUD. The initial comparison and data entry features are preserved, but the project now showcases more sophisticated tools and methods applicable to real-world Laravel applications.

### 2) Effective Use of Laravel Framework (Laravel 11/12)
The application showcases the suitable application of Laravel’s essential elements, comprising:

* Routing to specify public and restricted pages.

* Controllers for managing logic and user interactions.

* Models and Eloquent ORM for database interaction.

* Blade templates/components and views for rendering the user interface.

* Middleware designed to safeguard limited zones and implement access regulations.

* Verification to confirm that user input is secure and accurate.

The project's organization adheres to Laravel guidelines, simplifying comprehension, upkeep, and labeling.

### 3) Styled using CSS (No frameworks required)
The user interface is designed with CSS to enhance usability and clarity. The design is optimized for desktops, featuring uniform spacing, contrast, and legible typography. Navigation links remain constantly visible, tables are organized for easy reading, and buttons offer obvious visual feedback for actions.

### 4) Easy to Use + Suitable Navigation

Navigation stays consistent throughout the site. Users can consistently access the primary comparison page and navigate across pages (home, view details, login/register, dashboard/admin features) without any difficulty. Feedback regarding success and errors is shown after form submissions, clarifying when an action was successful or when corrections are required.

### 5) Database well-designed and normalised

In contrast to a single-table-only method, the Assignment 2 database structure demonstrates improved normalisation. For instance, brands may be handled individually rather than restating brand names in each entry. This minimizes redundancy and enhances data uniformity. An effectively structured schema also facilitates the introduction of new features like favourites and role-specific access (admin versus regular user), which would be challenging to integrate seamlessly in a single unorganized table.

---

## Additional Features Implemented for Assignment 2 (Beyond Assignment 1)

### Authentication and Authorisation

The project features user authentication, allowing users to sign up and log in. It also contains authorization guidelines to differentiate between **admin users** and **regular users**. Admins can oversee the database content (create/edit/delete hearing aids and handle brands). Regular users are unable to change data and can only utilize features like browsing and favorites. This aligns with practical needs as not every user should have the ability to modify the dataset.

**Reason for selecting this approach:**
Authentication and authorization are typical necessities in production systems. Demonstrating them indicates that the application can accommodate various user roles while safeguarding critical actions


**Limitations:**
The role system is purposely straightforward (admin versus user). For extensive systems, a more intricate permission model could be necessary, but this fits well within the parameters of this task.

### Search Facility

A search function is available for users to swiftly locate hearing aids by inputting keywords (e.g., brand name, model/type, or descriptive text). This enhances user-friendliness, particularly as the dataset expands. It also shows the capability to create filtered database queries with Laravel and Eloquent.

**Why it matters:**
Search serves a practical function in the real world and demonstrates the capability to formulate query logic while ensuring a responsive user experience.

### Pagination
The listing of hearing aids is divided into pages to avoid lengthy pages and enhance performance. Pagination enhances the user experience by maintaining a manageable table, and it showcases the effective use of Laravel’s pagination features.

**Why it matters:**
Pagination becomes crucial as datasets expand. It minimizes loading time and maintains a tidy interface


### Input Validation (Laravel Validation, not HTML-only)

Forms designed for creating and updating hearing aids utilize Laravel’s validation framework to guarantee that the entered data is accurate and secure. For instance, the app can impose necessary fields, numeric values for cost, and acceptable rating intervals. Mistakes are presented to the user in an understandable manner


**Why it matters:**
Validation ensures data integrity and stops invalid entries from being added to the database. It also shows proper usage of Laravel instead of depending on simple HTML attributes.

### Deeper Laravel Features: Middleware, Blade Components, and Relationships

The application employs middleware to limit access to admin-only routes and utilizes Blade components/layouts to minimize redundant HTML and maintain organized templates. Eloquent relationships associate hearing aids with brands and (when relevant) users with favorites, showcasing a deeper comprehension of Laravel ORM patterns.

**Why it matters:**
These features show the ability to structure a Laravel project professionally and keep code maintainable.

---

## Critical Reflection (Why these tools/techniques were chosen)

The selected advanced features are suitable and effective for the situation. Authentication and authorization align with the real-world expectation that only reliable users should handle product information. Search and pagination enhance usability for users and showcase scalable application architecture. Laravel validation guarantees accuracy and security at the framework level. Employing middleware and organized Blade templates enhances maintainability and simplifies future project expansion.

A significant restriction is that the project is designed to be intentionally lightweight to align with the assignment's scope. Certain functionalities (such as intricate role permissions, comprehensive audit logs, or advanced UI elements) were excluded to maintain the application’s focus, clarity, and alignment with educational goals


---

## Conclusion

This Assignment 2 submission builds upon the Assignment 1 project significantly by incorporating advanced Laravel functionalities while ensuring the application remains practical and user-friendly. The project showcases the efficient application of Laravel 11/12, suitable database architecture, distinct user interface design with CSS, enhanced usability with search and pagination features, and secure data management via validation and authorization. The outcome is a neatly organized web application that aligns with the assignment criteria and showcases a greater comprehension of contemporary Laravel development.
