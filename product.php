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
    <?php require_once 'assets/header.php'; ?>

    <main>
        <h1>Producten</h1>
        <h2>Voor de serieuze Gamer</h2>
        <!--- laptop --->
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
                    <button data-modal-id="modal1" class="myButton">Read more</button>
                </div>
            </div>
            <!--- PC --->
            <div class="custom-gamingpc">
                <img src="img/pc.png" id="pc" />
                <div class="product-info">
                    <h3>Custom Gaming PC</h3>
                    <p>$1999</p>
                    <p>
                        Op maat gemaakte desktop met topkwaliteit componenten voor
                        maximale snelheid.
                    </p>
                    <button data-modal-id="modal2" class="myButton">Read more</button>
                </div>
            </div>
            <!--- Headset --->
            <div class="gaming-headset">
                <img src="img/headset.webp" id="headset" />
                <div class="product-info">
                    <h3>Pro Gaming Headset</h3>
                    <p>$199</p>
                    <p>
                        Comfortabele headset met surround sound voor een meeslepende
                        game-ervaring.
                    </p>
                    <button data-modal-id="modal3" class="myButton">Read more</button>
                </div>
            </div>

        </section>
    </main>

    <!--- Modals ---->

    <!--- Gaming-laptop ---->

    <div id="modal1" class="modal">

        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Gaming Laptop X1</h3>
            <p>$1499</p>
            <p>
                Krachtige laptop met de nieuwste GPU voor ultieme gaming
                prestaties. Krachtige laptop met de nieuwste GPU voor ultieme gaming
                prestaties.
                Krachtige laptop met de nieuwste GPU voor ultieme gaming
                prestaties.Krachtige laptop met de nieuwste GPU voor ultieme gaming
                prestaties.
            </p>

        </div>

    </div>

    <!--- Custom-gamingpc ---->
    <div id="modal2" class="modal">

        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Custom Gaming PC</h3>
            <p>$1999</p>
            <p>
                Op maat gemaakte desktop met topkwaliteit componenten voor
                maximale snelheid.
            </p>
        </div>

    </div>

    <!--- Gaming-headset ---->
    <div id="modal3" class="modal">

        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Pro Gaming Headset</h3>
            <p>$199</p>
            <p>
                Comfortabele headset met surround sound voor een meeslepende
                game-ervaring.
            </p>
        </div>

    </div>

    <?php require_once 'assets/footer.php'; ?>
    <script src="script.js"></script> 
</body>

</html>