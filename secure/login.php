<!DOCTYPE html>
<html>
    <head><title>Login</title></head>
    <body>
        <h3>Please log in</h3><hr />
        <form enctype="multipart/form-data"
              method="post"
              action="processLogin.php">
            <label for="username">Username:</label>
            <input type="text" name="username" /><br />

            <label for="password">Password:</label>
            <input type="password" name="password" /><br />

            <input type="submit" value="Login" />
        </form>
    </body>
</html>

