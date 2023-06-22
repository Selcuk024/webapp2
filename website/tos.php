<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_SESSION['user'])) {
        include_once("navbar-logged-in.php");
    } else {
        include_once("navbar-not-logged-in.php");
    }
    include_once("login.php");

    include_once("forgot-password.php");
    include_once("signup.php");
    ?>
    <main class="tos-main">
        <div class="tos-text-container">
            <h1 class="tos-koptext">Terms and Conditions<h1>
            <h1 class="tos-text">1. Boekingen kunnen online of via andere communicatiemiddelen
                worden gemaakt. Het maken van een boeking houdt in dat de klant akkoord gaat met de algemene
                voorwaarden en betalingsverplichtingen.</h1>
            <h1 class="tos-text">2. Betaling voor de boeking dient te geschieden volgens de door
                Worldwide Booking verstrekte instructies. Indien de betaling niet tijdig is ontvangen, behoudt
                Worldwide Booking zich het recht voor om de boeking te annuleren.</h1>
            <h1 class="tos-text">3. Worldwide Booking verwerkt persoonlijke gegevens in
                overeenstemming met de geldende privacywetgeving. Persoonlijke gegevens worden alleen gebruikt
                voor het uitvoeren van de boeking en kunnen worden gedeeld met derden die betrokken zijn bij de
                uitvoering van de diensten</h1>
            <h1 class="tos-text">4. Annuleringen en wijzigingen van boekingen
                dienen tijdig te worden doorgegeven aan Worldwide Booking. Annulerings- en wijzigingsvoorwaarden
                kunnen van toepassing zijn, afhankelijk van de specifieke boeking en het gekozen tarief.
                Eventuele kosten of vergoedingen als gevolg van annuleringen of wijzigingen zijn de
                verantwoordelijkheid van de klant.</h1>
            <h1 class="tos-text">5. Worldwide Booking is niet aansprakelijk voor enige directe, indirecte,
                incidentele of gevolgschade die voortvloeit uit het gebruik van de diensten of faciliteiten van
                derden, inclusief luchtvaartmaatschappijen, accommodaties, vervoerders, enz. Worldwide Booking
                is niet aansprakelijk voor eventuele vertragingen, annuleringen, overboekingen, verlies of schade
                veroorzaakt door derden.
            </h1>
            <h1 class="tos-text">6. Alle intellectuele eigendomsrechten met betrekking
                tot de website en inhoud van Worldwide Booking blijven eigendom van Worldwide Booking. Het is
                niet toegestaan om de inhoud of het logo van Worldwide Booking te kopiëren, reproduceren,
                verspreiden of gebruiken zonder voorafgaande schriftelijke toestemming.</h1>
            <h1 class="tos-text">7. Toepasselijk recht en geschillenbeslechting. Op deze algemene voorwaarden
                is het Nederlands recht van toepassing. 8.2 Geschillen die voortvloeien uit of verband houden met
                deze algemene voorwaarden zullen worden voorgelegd aan de bevoegde rechter in Nederland.</h1>
        </div>
        </div>
    </main>

</body>
</head>