import pickle
import builtins
import os
import io
import base64
from flask import Flask, request, send_from_directory

app = Flask(__name__)

@app.route("/vul",methods=["POST"])
def vul():
    try:
        data = base64.b64decode(request.form['poc'])
        # pickle.loads(data)
        RestrictedUnpickler(io.BytesIO(data)).load()
        return '',204
    except Exception as e:
        return str(e)

@app.route("/", methods=['GET','POST'])
def index():
    return 'hello man, source code is in /source'

@app.route("/source", methods=["GET"])
def download():
    try:
        dirname = os.path.abspath(os.path.dirname(__file__))
        filename = 'app.py'
        return send_from_directory(
                directory=dirname,
                path=filename,
                as_attachment=True
                )
    except Exception as e:
        return str(e)


class RestrictedUnpickler(pickle.Unpickler):
    blacklist = {'eval', 'exec', 'execfile', 'compile', 'open', 'input', '__import__', 'exit'}

    def find_class(self, module, name):
        # Only allow safe classes from builtins.
        if module == "builtins" and name not in self.blacklist:
            return getattr(builtins, name)
        # Forbid everything else.
        raise pickle.UnpicklingError("global '%s.%s' is forbidden" % (module, name))

if __name__=='__main__':
    app.run(host='0.0.0.0', port=8888)
