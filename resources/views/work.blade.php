<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>DT173G Project | Login</title>
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
          <h2>Experiences</h2>
          <div id="data-list"></div>
        </article>

        <article>
          <h2>Submit form</h2>

          <form id="course-form" action="">
            <label for="code">Code:</label>
            <input type="text" name="course-code" id="course-code" required />

            <label for="name">Name:</label>
            <input type="text" name="course-name" id="course-name" required />

            <label for="progression">Progression:</label>
            <input
              type="text"
              name="course-progression"
              id="course-progression"
              required
            />

            <label for="syllabus">Course Syllabus:</label>
            <input
              type="text"
              name="course-syllabus"
              id="course-syllabus"
              required
            />
            <button type="submit" id="add-course">Add course</button>
          </form>
        </article>
      </section>

      <footer>
      </footer>
    </main>

    <script src="js/script.js"></script>
  </body>
</html>
