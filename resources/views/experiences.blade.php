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
      <h1>DT173G Project</h1>
      <h2>Resume - Rasmus Fogelberg</h2>
    </header>

    <main class="content">
      <section class="form-and-list">


        <article>
          <h2>Create work Experience</h2>

          <form action="">
            <label for="title">Title:<input type="text" name="title" id="title" required /></label>
           

            <label for="company">Company:<input type="text" name="company" id="company" required /></label>
            

            <label for="started_at">Start date:<input
              type="date"
              name="started_at"
              id="started_at"
              required
            /></label>
            
            <fieldset>
              <label for="ended_at">End date:<input
                type="date"
                name="ended_at"
                id="ended_at"
              /></label>
              

              <label for="ongoing" id="ongoing-checkbox">Ongoing:<input 
                type="checkbox" 
                id="ongoing" 
                name="ongoing"
              /></label>
            </fieldset>

            <label for="description" id="desc-field">Description:<textarea
              name="description"
              id="description"
              required
            ></textarea></label>

            <button type="submit" id="add-experience">Submit</button>
            
          </form>
        </article>

        <section id="list">
          <h2>Work experiences</h2>

          @foreach ($experiences as $experience)
            <article class="post-list">
              <h3>{{ $experience->title }} - {{ $experience->company }}</h3>
              <h4>{{ $experience->started_at }} - 
                <?php
                  $end_date = ($experience->ended_at > 1) ? $experience->ended_at : 'Ongoing';
                  echo $end_date;
                  ?>
                </h4>
              <h4>{{ $experience->country }}, {{ $experience->city }}</h4>
              <h5>Description</h5>
              <p>{{ $experience->description }}</p>
              <div class="edit-del-buttons"><button class="edit-button">Edit</button>
            <button class="del-button">Delete</button></div>
            </article>
          @endforeach

        </section>  

      </section>

      <footer>
      </footer>
    </main>

    <script src="js/script.js"></script>
  </body>
</html>
