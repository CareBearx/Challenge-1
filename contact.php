<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="img/favicon.png" />
  </head>

  <body>
    <?php include 'assets/header.php'; ?>

    <main>
      <h1>Contact</h1>

      <div class="contact-form-block">
        <h3>Stuur ons een bericht</h3>
            <form class="contact-form">
              <div class="name-fields">
                <input
                  class="firstname-field"
                  type="text"
                  name="firstname"
                  placeholder="Voornaam"
                />
                <input
                  class="lastname-field"
                  type="text"
                  name="lastname"
                  placeholder="Achternaam"
                  />
              </div>
              <input
                class="email-field"
                type="email"
                name="email"
                placeholder="Email"
              />
              <input
                class="subject-field"
                type="text"
                name="subject"
                placeholder="Onderwerp"
                />
              <textarea
                class="message-field"
                name="message"
                placeholder="Bericht"
              ></textarea>
              <button class="submit-button" type="submit">Verstuur</button>
            </form>
      </div>
    </main>
    
    <?php include 'assets/footer.php'; ?>
    <script src="script.js"></script>
  </body>
</html>
