<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Rafo Portfolio | Start</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="default">
    <header class="header">
      <h1>Assignment 5 - Webbutveckling III</h1>
      <h2>REST-webbservices with PHP</h2>
    </header>

    <main class="content">
      <section class="courses">
        <article>
          <h2>Course list</h2>
          <div id="course-list"></div>
        </article>

        <article>
          <h2>Submit form</h2>

          <form id="login-form" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required />

            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required />

            <button type="submit" id="login">Login</button>
          </form>
        </article>
      </section>

      <footer>
      </footer>
    </main>

    <script src="js/script.js"></script>
  </body>
</html>
