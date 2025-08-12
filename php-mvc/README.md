# My PHP Learning Journey 🚀 2025

## Table of Contents
- [MODULE 1 : DESIGN YOUR WEBSITE WITH PHP AND MYSQL](../README.md)
- [MODULE 2 : ADOPT AN MVC ARCHITECTURE IN PHP](#MODULE-1--ADOPT-AN-MVC-ARCHITECTURE-IN-PHP)

# MODULE 2 : ADOPT AN MVC ARCHITECTURE IN PHP

## Table of Contents

- [Chapter 1 : Discovering Professional Code](#chapter-1--discovering-professional-code)

---

## Chapter 1 : Discovering Professional Code

Just because code works doesn't mean it's professional. Professional code is designed to be clear, reusable, and easy to work with, especially for teams. This chapter introduces you to the core principles of professional development by using a fictional project: modernizing a basic blog for a volleyball association using **MVC architecture**.

### What Makes Code "Professional"? 🧑‍💻

Professional code has several key characteristics that make it high-quality:

* **Modular:** It is broken down into many small, individual files, each with a single, specific purpose.
* **Decoupled:** The individual files are designed to work independently from each other, which reduces dependencies and makes the code easier to maintain.
* **Standardized:** It follows common formatting and naming standards, often written in English, so that other developers can understand and work on it easily.

These qualities provide significant advantages: they allow teams to work together efficiently, make it simple to add new features without breaking existing code, and ensure that useful code can be reused in other projects. A good way to think about professional code is that it is "ready for change."

### The Path to Professionalism 🛤️

Becoming a professional developer is a journey that can be broken down into three main steps:

1.  **Get it to work:** Learn to write basic code that functions correctly.
2.  **Structure it better:** Learn to organize your code in a modular way, like with **MVC architecture**, to make it clean and easy to manage.
3.  **Use a framework:** Adopt tools like **Symfony** that automate much of this structured work, allowing you to build projects faster.

While you could jump straight to using a framework, it's highly recommended to first learn how to structure code manually. This foundational knowledge helps you understand *why* frameworks are designed the way they are, making them much easier to use effectively in the long run.

-----

## Chapter 2: Discovering the Limits of a Beginner's Code

In this chapter, you’ll dive into a real-world example of what makes code un-professional. Using a sample blog project, you'll see how a seemingly functional codebase can quickly become unmanageable. This exercise highlights the need to move beyond just writing code that "works" and start structuring it for future growth and collaboration.

### The Pitfalls of Amateur Code 📉

The provided sample code, all contained within a single file (`index.php`), demonstrates several common issues that can make a project difficult to maintain:

* **Mixed Languages:** The file mixes PHP, SQL, and HTML all together. This makes the code hard to read and understand, forcing a developer to constantly switch between mindsets. A professional developer should not have to parse SQL queries inside a block of PHP, which is itself inside an HTML page.
* **Poor Formatting:** The code lacks consistent formatting, with messy indentation and misplaced braces. This makes it challenging to follow the logic and understand the flow of the program.
* **Single-File Structure:** Combining all the application's logic into one file creates a "monolithic" structure that is difficult to navigate. As the project grows, this single file would become hundreds of lines long, making it nearly impossible to work on without introducing bugs or creating conflicts in a team setting.

While this code may function for a simple project, its lack of organization and clarity makes it a maintenance nightmare. A developer working on this project would spend more time trying to understand the existing code than building new features.

### The Problem of Scale 📈

This unstructured approach works for small, simple tasks. However, as soon as you need to add new features or collaborate with others, the problems become significant. It's difficult to make changes without affecting other parts of the code. In a team, this approach leads to constant code conflicts and a frustrating development process. By understanding these limitations, you'll see why a structured approach like **MVC architecture** is essential for building robust and scalable applications.

-----

## Chapter 3: Separating Display from PHP Processing

As you move from writing beginner code to professional code, a crucial first step is to stop mixing your PHP logic with your HTML. This practice, known as **separation of concerns**, makes your code easier to read, maintain, and work on in a team. This chapter guides you through the process of refactoring a single-file application into a more modular structure.

### A First Separation: Inside a Single File ✂️

The first step is to clearly divide your code into two main sections within the same file:

1.  **Data Retrieval:** The top of the file contains all the PHP code responsible for connecting to the database and fetching the necessary information. The result is stored in simple, structured PHP variables like arrays.
2.  **Data Display:** The bottom of the file contains the HTML, which loops through the PHP variables to display the data. This section's only job is to format and present the information retrieved in the first section.

This initial separation makes it immediately easier to see where data is being processed versus where it is being displayed.

### Separating into Two Files 📁

The next logical step is to split these two sections into separate files, a practice commonly used in professional development.

* `index.php`: This file becomes the "controller." It handles all the PHP logic, including the database connection and the data retrieval. After preparing the data, it uses the `require` function to load the display file.
* `templates/homepage.php`: This file acts as the "view" or "template." It contains the HTML and minimal PHP logic (like `foreach` loops or `echo` statements) needed to display the data. It receives the variables prepared by `index.php` and focuses solely on presentation.

The use of `require` is preferred over `include` because it will stop the script if the template file is missing, preventing an incomplete or broken page from being served. This refactoring process, called **refactorization**, doesn't add new features, but it dramatically improves the quality and maintainability of your codebase.

-----

## Chapter 4: Isolating Data Access

In this chapter, you'll take the concept of code separation a step further by completely isolating your database and data-retrieval logic. This is the final step in building the foundation for a professional, modular application using the **Model-View-Controller (MVC)** architecture.

### The MVC Triad 🏗️

The MVC pattern organizes your code into three distinct parts, each with a specific role:

* **Model (`src/model.php`)**: The Model is responsible for all data-related tasks. It knows how to connect to the database and retrieve information. It contains a function, such as `getPosts()`, which performs the SQL query and returns the results. It is completely independent of how the data will be displayed.
* **View (`templates/homepage.php`)**: The View's sole purpose is to display the data. It contains the HTML and minimal PHP logic (like loops) to present the information it receives. The View is unaware of where the data came from.
* **Controller (`index.php`)**: The Controller acts as the intermediary. It connects the Model and the View. Its job is to handle a user's request, call the appropriate function in the Model to get the data, and then pass that data to the View to be displayed.

### The New Structure in Action 🚀

This chapter refactors the code into these three files:

* `src/model.php`: This file now contains a function `getPosts()` that encapsulates the entire database connection and data retrieval logic. It returns the list of posts as a simple array.
* `templates/homepage.php`: This file remains unchanged from the previous chapter. It simply takes the `$posts` variable and displays it in HTML.
* `index.php`: This file becomes the Controller. It's now very simple, containing only three lines of code:
    1.  `require('src/model.php');` to load the Model's functions.
    2.  `$posts = getPosts();` to call the function and get the data.
    3.  `require('templates/homepage.php');` to load the View and display the data.

This new structure is a significant step forward. It allows different developers to work on different parts of the application without interfering with each other. For example, a database expert could optimize the `getPosts()` function without needing to touch the display code, and a front-end developer could redesign the HTML without knowing any SQL.