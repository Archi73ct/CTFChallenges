from flask import Flask, request, render_template
import os

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/', methods=['POST'])
def very_safe_function():
    field_input = request.form['text']
    output = str(field_input)
    return render_template('index.html', output=eval(output))
