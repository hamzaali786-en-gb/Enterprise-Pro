from flask import Flask, render_template, request, redirect, url_for, session

app = Flask(__name__)
app.secret_key = "dev-change-me"

# Wait for the data first, then change this...
USERS = {
    "admin": "admin123",
    "test": "test123",
}

@app.get("/login")
def login_page():
    err = request.args.get("err")
    return render_template("login.html", err=err)

@app.post("/login")
def login_submit():
    username = (request.form.get("user") or "").strip()
    password = (request.form.get("pass") or "").strip()

    if not username or not password:
        return redirect(url_for("login_page", err="missing"))

    # TEMP auth check (Once again replace this with the actual hashed + data)
    if USERS.get(username) == password:
        session["user"] = username
        return redirect(url_for("welcome"))

    return redirect(url_for("login_page", err="invalid"))

@app.get("/welcome")
def welcome():
    if "user" not in session:
        return redirect(url_for("login_page"))
    return render_template("welcome.html", user=session["user"])

@app.get("/logout")
def logout():
    session.clear()
    return redirect(url_for("login_page"))

if __name__ == "__main__":
    app.run(debug=True)
