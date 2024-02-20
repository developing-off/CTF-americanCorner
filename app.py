from flask import Flask, request, render_template
import sqlite3,base64


app = Flask(__name__, static_folder='static')

# Set up a simple SQLite database with a users table
conn = sqlite3.connect('database.db')
cursor = conn.cursor()
cursor.execute('CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, password TEXT)')
#cursor.execute("INSERT INTO users (username, password) VALUES ('corner', 'american')")
conn.commit()
conn.close()

# Vulnerable login route with SQL injection
@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']

        conn = sqlite3.connect('database.db')
        cursor = conn.cursor()

        # This is vulnerable to SQL injection
        query = f"SELECT * FROM users WHERE username = '{username}' AND password = '{password}'"
        
        # Comment the line above and uncomment the line below to fix the vulnerability
        # query = "SELECT * FROM users WHERE username = ? AND password = ?"
        # cursor.execute(query, (username, password))

        result = cursor.execute(query).fetchall()
        conn.close()

        if result:
            return render_template('welcome.html', username=result[0][1], data=result)
        else:
            return 'Login failed'

    # Render the login form if it's a GET request
    return render_template('login.html')

# Registration route
@app.route('/register', methods=['GET', 'POST'])
def register():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']

        conn = sqlite3.connect('database.db')
        cursor = conn.cursor()

        # Insert the new user into the database
        query = f"INSERT INTO users (username, password) VALUES ('{username}', '{password}')"
        cursor.execute(query)
        conn.commit()
        conn.close()

        return render_template('login.html')

    # Render the registration form if it's a GET request
    return render_template('register.html')

# Simple landing page
@app.route('/')
def home():
    return render_template('home.html')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)
