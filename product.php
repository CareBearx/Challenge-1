<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="img/favicon.png" />
  </head>

  <body>
      <?php include 'assets/header.php'; ?>

      <main>
        <h1>Producten</h1>
        <h2>Voor de serieuze Gamer</h2>

         <!-- This is a comment 
        <template id="product-template">
          <div class="product">
              <img class="product-img" src="" alt="">
              <h3 class="product-title"></h3>
              <p class="product-price"></p>
              <a class="product-link" href="">Bekijk product</a>
          </div>
       </template>
-->
        <section class="producten">
          <div class="gaming-laptop">
            <img src="img/laptop.webp" id="laptop" />
            <div class="product-info">
              <h3>Gaming Laptop X1</h3>
              <p>$1499</p>
              <p>
                Krachtige laptop met de nieuwste GPU voor ultieme gaming
                prestaties.
              </p>
            </div>
          </div>

          <div class="custom-gamingpc">
            <img src="img/pc.png" id="pc" />
            <div class="product-info">
              <h3>Custom Gaming PC</h3>
              <p>$1999</p>
              <p>
                Op maat gemaakte desktop met topkwaliteit componenten voor
                maximale snelheid.
              </p>
            </div>
          </div>

          <div class="gaming-headset">
            <img src="img/headset.webp" id="headset" />
            <div class="product-info">
              <h3>Pro Gaming Headset</h3>
              <p>$199</p>
              <p>
                Comfortabele headset met surround sound voor een meeslepende
                game-ervaring.
              </p>
            </div>
          </div>
        </section>
      </main>

      <?php include 'assets/footer.php'; ?>
    <script src="script.js"></script>
  </body>
</html>
