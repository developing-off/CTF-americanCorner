<?php
$quiz = [
  [
    "q"=> "What is SQL injection?",
    "o"=> ["A type of programming language", "A security vulnerability in web applications", "A database management system", "A data encryption technique"],
    "a"=> 1
],
[
    "q"=> "How does SQL injection work?",
    "o"=> ["By injecting JavaScript code into a website", "By manipulating the structure of SQL queries through user inputs", "By encrypting sensitive data in a database", "By exploiting browser vulnerabilities"],
    "a"=> 1
],
[
    "q"=> "How can SQL injection vulnerabilities be prevented?",
    "o"=> ["Implementing input validation and parameterized queries","Using secure passwords", "Disabling database logging", "Increasing the database timeout"],
    "a"=> 0
],

[
    "q"=> "Which SQL injection payload is commonly used to bypass authentication?",
    "o"=> ["'; DROP TABLE users;--",  "1=1; --","' OR '1'='1'--", "SELECT * FROM users"],
    "a"=> 2
],



[
    "q"=> "In the fixed code example, what is the purpose of the question marks (?) in the SQL query?",
    "o"=> ["To comment out parts of the query", "To indicate a placeholder for user input", "To concatenate strings in the query", "To execute a subquery"],
    "a"=> 1
],


[
    "q"=> "What additional measure, besides using parameterized queries, helps prevent SQL injection?",
    "o"=> ["Least Privilege Principle","Using dynamic SQL queries",  "Storing passwords in plain text", "Avoiding input validation"],
    "a"=> 0
],

[
    "q"=> "Which of the following is not a recommended practice for preventing SQL injection?",
    "o"=> ["Input validation", "Using stored procedures", "Concatenating user input directly into SQL queries", "Implementing proper authentication and authorization"],
    "a"=> 2
],


[
    "q"=> "What is the primary goal of a SQL injection workshop?",
    "o"=> ["To teach participants how to write SQL queries", "To demonstrate the impact of SQL injection attacks", "To explore the benefits of database normalization", "To practice secure coding techniques"],
    "a"=> 1
]
];