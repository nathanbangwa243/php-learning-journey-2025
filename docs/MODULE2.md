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

## Chapter 2: Discovering the Limits of a Beginner's Code 💾

In this chapter, you’ll dive into a real-world example of what makes code un-professional. Using a sample blog project, you'll see how a seemingly functional codebase can quickly become unmanageable. This exercise highlights the need to move beyond just writing code that "works" and start structuring it for future growth and collaboration.

### The Pitfalls of Amateur Code 📉

The provided sample code, all contained within a single file (`index.php`), demonstrates several common issues that can make a project difficult to maintain:

* **Mixed Languages:** The file mixes PHP, SQL, and HTML all together. This makes the code hard to read and understand, forcing a developer to constantly switch between mindsets. A professional developer should not have to parse SQL queries inside a block of PHP, which is itself inside an HTML page.
* **Poor Formatting:** The code lacks consistent formatting, with messy indentation and misplaced braces. This makes it challenging to follow the logic and understand the flow of the program.
* **Single-File Structure:** Combining all the application's logic into one file creates a "monolithic" structure that is difficult to navigate. As the project grows, this single file would become hundreds of lines long, making it nearly impossible to work on without introducing bugs or creating conflicts in a team setting.

While this code may function for a simple project, its lack of organization and clarity makes it a maintenance nightmare. A developer working on this project would spend more time trying to understand the existing code than building new features.

### The Problem of Scale 📈

This unstructured approach works for small, simple tasks. However, as soon as you need to add new features or collaborate with others, the problems become significant. It's difficult to make changes without affecting other parts of the code. In a team, this approach leads to constant code conflicts and a frustrating development process. By understanding these limitations, you'll see why a structured approach like **MVC architecture** is essential for building robust and scalable applications.