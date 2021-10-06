from flask import Flask, request, render_template
import os

app = Flask(__name__)

blacklist = ['ls', 'cat', 'whoami', 'cp', 'mv', 'pwd']

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/', methods=['POST'])
def very_safe_function():
    field_input = request.form['text']
    output = str(field_input)
    for word in blacklist:
        if word in output:
                return render_template('index.html', output=f"Your input contains {word}, which is not allowed.")             
    return render_template('index.html', output=eval(output))
