from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/', methods=['POST'])
def very_safe_function():
    field_input = request.form['text']
    output = str(field_input)
    try:
        thingy = {}
        exec(field_input, globals(), thingy)
        return render_template('index.html', output=thingy["tv6gbn7h9ikm8"])
    except:      
        return render_template('index.html', output=eval(output))