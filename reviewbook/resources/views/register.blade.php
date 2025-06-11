<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Register</title>
    </head>
    <body>
        <h1>Halaman Register</h1>
        <h2>Sign Up Form</h2>

        <form action="/welcome" method="post">
            @csrf

            <label> First Name:</label>
            <input type="text" name="fname" />

            <label> Last Name:</label>
            <input type="text" name="lname" />

            <input type="submit" value="submit" />
        </form>
    </body>
</html>
