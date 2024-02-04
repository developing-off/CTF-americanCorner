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
    "q"=> "Which of the following SQL statements is vulnerable to SQL injection?",
    "o"=> ["SELECT * FROM users WHERE username = ? AND password = ?", "SELECT * FROM users WHERE username = '' OR '1'='1'--' AND password = 'anything'", "UPDATE users SET password = 'newpassword' WHERE username = 'user1'", "DELETE FROM users WHERE username = 'admin'"],
    "a"=> 2
],
[
    "q"=> "What is the purpose of parameterized queries in preventing SQL injection?",
    "o"=> ["To execute queries faster", "To make queries more readable", "To separate user input from the query structure", "To create dynamic SQL queries"],
    "a"=> 3
],
[
    "q"=> "Which type of SQL injection attack involves extracting information from the database using the UNION statement?",
    "o"=> ["Time-based Blind Injection", "Error-based Injection", "UNION-based Injection", "Boolean-based Blind Injection"],
    "a"=> 3
],
[
    "q"=> "What is a common payload for a boolean-based blind injection to check if a condition is true?",
    "o"=> ["'; DROP TABLE users;--", "' OR 1=1--", "' UNION SELECT null, user(), null--", "' OR SLEEP(5)--"],
    "a"=> 2
],
[
    "q"=> "In the fixed code example, what is the purpose of the question marks (?) in the SQL query?",
    "o"=> ["To comment out parts of the query", "To indicate a placeholder for user input", "To concatenate strings in the query", "To execute a subquery"],
    "a"=> 2
],
[
    "q"=> "What additional measure, besides using parameterized queries, helps prevent SQL injection?",
    "o"=> ["Using dynamic SQL queries", "Least Privilege Principle", "Storing passwords in plain text", "Avoiding input validation"],
    "a"=> 2
],
[
    "q"=> "Which of the following is not a recommended practice for preventing SQL injection?",
    "o"=> ["Input validation", "Using stored procedures", "Concatenating user input directly into SQL queries", "Implementing proper authentication and authorization"],
    "a"=> 3
],
[
    "q"=> "What is the primary goal of a SQL injection workshop?",
    "o"=> ["To teach participants how to write SQL queries", "To demonstrate the impact of SQL injection attacks", "To explore the benefits of database normalization", "To practice secure coding techniques"],
    "a"=> 2
]
];