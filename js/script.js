// Carousel
let index = 0;
const slides = document.querySelectorAll('.carousel .slide');
const total = slides.length;

document.querySelector('.next').addEventListener('click', () => {
    index = (index + 1) % total;
    updateCarousel();
});

document.querySelector('.prev').addEventListener('click', () => {
    index = (index - 1 + total) % total;
    updateCarousel();
});

function updateCarousel() {
    slides.forEach((slide, i) => {
        const offset = i - index;

        if (offset === 0) {
            // střední slide (velký)
            slide.style.transform = 'translateX(0) scale(1) rotateY(0deg)';
            slide.style.zIndex = 10;
            slide.style.opacity = 1;
        } else if (offset === -1 || (offset === total - 1 && index === 0)) {
            // levý slide
            slide.style.transform = 'translateX(-150px) scale(0.8) rotateY(30deg)';
            slide.style.zIndex = 5;
            slide.style.opacity = 0.5;
        } else if (offset === 1 || (offset === -(total - 1) && index === total - 1)) {
            // pravý slide
            slide.style.transform = 'translateX(150px) scale(0.8) rotateY(-30deg)';
            slide.style.zIndex = 5;
            slide.style.opacity = 0.5;
        } else {
            // ostatní
            slide.style.transform = 'translateX(0) scale(0.5) rotateY(0deg)';
            slide.style.zIndex = 0;
            slide.style.opacity = 0;
        }
    });
}

updateCarousel();

// Odpočet Akce (popup-timer)
const targetDate = new Date().getTime() + 60 * 60 * 1000; // 60 minut od načtení
const timerElement = document.getElementById('popup-timer');

function updateCountdown() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
        timerElement.innerHTML = "Akce skončila!";
        return;
    }

    const minutes = Math.floor(distance / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    timerElement.innerHTML = `${minutes < 10 ? '0' : ''}${minutes}m ${seconds < 10 ? '0' : ''}${seconds}s`;
}

setInterval(updateCountdown, 1000);
updateCountdown();

// Funkce pro opakované zobrazování popupu
let popupTimeout;

function showPopupAkce() {
    const popup = document.getElementById('popup-akce');
    popup.style.display = 'flex';

    // Zruším případný starý timeout, aby to bylo čisté
    clearTimeout(popupTimeout);
}

const popup = document.querySelector('.popup-akce');

function showPopup() {
  popup.classList.add('active');
}

// zavolat showPopup() když chceš popup zobrazit


function showPopupAkce() {
    const popup = document.getElementById('popup-akce');
    popup.classList.remove('no-transition'); // zajistíme že při zobrazování bude transition zapnuté
    popup.classList.add('show');
}

function hidePopupAkce() {
    const popup = document.getElementById('popup-akce');

    popup.classList.add('no-transition'); // vypneme transition
    popup.classList.remove('show');

    // Po 3 vteřinách znovu zobrazit popup
    popupTimeout = setTimeout(showPopupAkce, 10000);
}

// Spuštění popupu po 5 vteřinách po načtení stránky
window.addEventListener('load', function() {
    setTimeout(showPopupAkce, 5000);
});

// Zavírač křížek
document.getElementById('popup-close').addEventListener('click', function() {
    hidePopupAkce();
});

// Kliknutí na tlačítko v popupu
document.getElementById('popup-btn').addEventListener('click', function() {
    document.getElementById('sleva').value = '1';
    window.location.href = '#rezervace';
});

// Vybírání počtu dnů při rezervaci
const pocetSelect = document.getElementById('pocet');

for (let i = 1; i <= 30; i++) {
    const option = document.createElement('option');
    option.value = i;
    option.text = `${i} ${i === 1 ? 'noc' : 'nocí'}`;
    pocetSelect.appendChild(option);
}

// Aktivace slevy přes velké tlačítko "akce-btn"
document.getElementById('akce-btn').addEventListener('click', function() {
    document.getElementById('sleva').value = "1";
});