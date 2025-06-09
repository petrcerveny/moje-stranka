<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Ostružina</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>

<header class="sticky">
    <div class="logo">
        <img src="images/logo.png" alt="Logo Hotel Ostružina" />
        <h2>
        HOTEL <br> OSTRUŽINA
    </h2>
    </div>
    <nav>
        <ul>
            <li><a href="#pokoje">Pokoje</a></li>
            <li><a href="#recenze">Recenze</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#rezervace">Rezervace</a></li>
        </ul>
    </nav>
</header>

<section class="carousel" id="pokoje">
    <h2>↓ PRÉMIOVÉ POKOJE ↓</h2>
    <div class="slider">
        <div class="slide"><img src="images/room1.png" alt="Pokoj 1" /></div>
        <div class="slide"><img src="images/room2.jpg" alt="Pokoj 2" /></div>
        <div class="slide"><img src="images/room3.png" alt="Pokoj 3" /></div>
    </div>
    <button class="prev">❮</button>
    <button class="next">❯</button>
</section>

<div class="separator"></div>

<!-- Popup Akce -->
<div id="popup-akce" class="popup-akce">
    <div class="popup-content">
        <h3>ZLEVNĚNÉ UBYTOVÁNÍ KONČÍ ZA</h3>
        <div id="popup-timer"></div>
        <button id="popup-btn">Ubytujte se zde</button>
        <span id="popup-close">&times;</span>
    </div>
</div>

<section class="cenik" id="cenik">
    <h2>Ceník pokojů</h2>
    <div class="cenik-item">
        <img src="images/pokoj1.jpg" alt="Pokoj 1">
        <div class="cenik-info">
            <span class="nazev">Pokoj •  1 Osoba</span>
            <span class="cena">1 200 Kč / noc</span>
        </div>
    </div>
    <div class="cenik-item">
        <img src="images/pokoj2.jpg" alt="Pokoj 2">
        <div class="cenik-info">
            <span class="nazev">Pokoj •  2 Osoby</span>
            <span class="cena">1 800 Kč / noc</span>
        </div>
    </div>
    <div class="cenik-item">
        <img src="images/pokoj3.jpg" alt="Pokoj 3">
        <div class="cenik-info">
            <span class="nazev">Rodinné Apartmá</span>
            <span class="cena">2 500 Kč / noc</span>
        </div>
    </div>
    <p>Včetně poplatků</p>
</section>

<section class="recenze" id="recenze">
    <h2>Recenze hostů</h2>
    <article>
        <div class="recenze-header">
            <img src="images/recenze1.jpg" alt="Avatar Jana K.">
            <div class="hodnoceni">⭐⭐⭐⭐⭐</div>
        </div>
        <p class="recenze-text">Nejlepší hotel v okolí! Výborná lokalita a skvělá atmosféra.</p>
        <p class="recenze-author">- Jana K.</p>
    </article>
    <article>
        <div class="recenze-header">
            <img src="images/recenze2.jpg" alt="Avatar Petr M.">
            <div class="hodnoceni">⭐⭐⭐</div>
        </div>
        <p class="recenze-text">Pokoj čistý, personál milý. Snídaně byla bohatá, ale chyběla zelenina.</p>
        <p class="recenze-author">- Petr M.</p>
    </article>
    <article>
        <div class="recenze-header">
            <img src="images/recenze3.png" alt="Avatar Lucie B.">
            <div class="hodnoceni">⭐⭐⭐⭐</div>
        </div>
        <p class="recenze-text">Skvělý zážitek! Rádi se vrátíme. Pokoj byl krásný a čistý, personál velmi vstřícný.</p>
        <p class="recenze-author">- Lucie B.</p>
    </article>
</section>

<section class="faq" id="faq">
    <h2>Často kladené otázky</h2>
    <details>
        <summary>Je možné parkovat u hotelu?</summary>
        <p>• Ano, zdarma.</p>
    </details>
    <details>
        <summary>Má hotel Wi-Fi?</summary>
        <p>• Ano, v celém objektu.</p>
    </details>
    <details>
        <summary>Jsou v ceně i obědy?</summary>
        <p>• Obědy pouze za příplatek v naší restauraci.</p>
    </details>
    <details>
        <summary>Můžou do hotelu psi?</summary>
        <p>• Můžou, musíte dát dopředu vědět při vyplňování rezervace.</p>
    </details>
    <details>
        <summary>Je personál dostupný 24 hodin?</summary>
        <p>• Ano, je.</p>
    </details>
</section>

<section class="rezervace" id="rezervace">
    <h2>Rezervace pokoje</h2>
    <form action="php/rezervace.php" method="POST">
        <label for="jmeno">Jméno:</label>
        <input type="text" id="jmeno" name="jmeno" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="datum">Datum příjezdu:</label>
        <input type="date" id="datum" name="datum" required />

        <label for="osoby">Počet osob:</label>
        <select id="osoby" name="osoby" required>
        <option value="" disabled selected hidden>-- Vyberte --</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        </select>

        <input type="hidden" id="sleva" name="sleva" value="0">

        <label for="mazlicci">Mazlíčci?</label>
        <select id="mazlicci" name="mazlicci" required>
            <option value="" disabled selected hidden>Ne</option>
            <option value="Ano">Ano</option>
            <option value="Ne">Ne</option>
        </select>

        <label for="pocet">Počet nocí:</label>
        <select id="pocet" name="pocet" required>
            <option value="" disabled selected hidden>-- Vyberte --</option>
        </select>

        <label for="detaily">Něco, o čem bychom měli vědět?</label>
        <textarea id="detaily" name="detaily" rows="4" placeholder="Sem můžete napsat například požadavky na pokoj, alergie, pozdní příjezd apod."></textarea>

        <button type="submit">Rezervovat</button>
    </form>
</section>

<section class="mapa">
    <h2>Kde nás najdete</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d40876.120109779025!2d17.053373354492162!3d50.184370106904126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711f0a53b35c991%3A0x8f16cb458b564842!2zT3N0cnXFvm7DoSA4MywgNzg4IDI1IE9zdHJ1xb5uw6EsIMSMZXNrbw!5e0!3m2!1scs!2sus!4v1749406176216!5m2!1scs!2sus" width="100%" height="300" style="border:0;" allowfullscreen></iframe>
</section>

<footer>
    <div class="footer-left">
        <p class="footer-title">Zavolejte nám</p>
        <p>📞 +420 123 456 789</p>
    </div>
    <div class="footer-center">
        <p>&copy; 2025 Hotel Ostružina. Všechna práva vyhrazena.</p>
    </div>
    <div class="footer-right">
        <p class="footer-title">Napište nám mail</p>
        <p>📧 info@hotelostruzina.cz</p>
    </div>
</footer>


</body>
</html>
