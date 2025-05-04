
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("div1").style.top = "0";
  } else {
    document.getElementById("div1").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

document.addEventListener('DOMContentLoaded', function () {
    // Hata mesajını içeren elementi seçelim
    const alertBox = document.querySelector('.alert');

    if (alertBox) {
        // Hata mesajı varsa gösterelim
        setTimeout(function () {
            alertBox.classList.add('show');
        }, 100); // 0.1 saniye sonra göster (sayfa yüklenince)

        // Belirli bir süre sonra (5 saniye) mesajı gizleyelim
        setTimeout(function () {
            alertBox.classList.add('hide');
        }, 5000); // 5 saniye sonra gizle

        // Gizlenme işlemi tamamlanınca DOM'dan kaldır
        setTimeout(function () {
            alertBox.remove();
        }, 5500); // 0.5 saniye animasyon süresiyle birlikte
    }
});


//Intro Slide
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.intro-slide');
    let currentSlide = 0;

    function showSlide(slideIndex) {
        slides.forEach((slide, index) => {
            if (index === slideIndex) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 15000);

    showSlide(currentSlide);
});

document.addEventListener('DOMContentLoaded', function () {
    var navbar_button = document.getElementById("menu-icon");
    var dropdown_navbar = document.getElementById("navbar-dropdown");

    navbar_button.addEventListener('click', function(){
        dropdown_navbar.classList.toggle("open");
    });
});


//Leftbar 
$("#left-bar-controller").on('click', function () {
    const leftbar = document.getElementById("left-bar");
    leftbar.classList.toggle('open');
});
//Leftbar

//Notification
$("#notification").on('click', function () {
    const leftbar = document.getElementById("notification-dropdown");
    leftbar.classList.toggle('open');
});
//Notification

//Notification
$("#user-dropdown").on('click', function () {
    const leftbar = document.getElementById("admin-dropdown");
    leftbar.classList.toggle('open');
});
//Notification


//FAQS
$("#ddb-1").on('click', function () {
    const elements = document.getElementById("ddc-1");
    elements.classList.toggle('dd-active');
});
$("#ddb-2").on('click', function () {
    const elements = document.getElementById("ddc-2");
    elements.classList.toggle('dd-active');
});
$("#ddb-3").on('click', function () {
    const elements = document.getElementById("ddc-3");
    elements.classList.toggle('dd-active');
});
$("#ddb-4").on('click', function () {
    const elements = document.getElementById("ddc-4");
    elements.classList.toggle('dd-active');
});
//FAQS




//Register Login Interface changing
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});










// Geçiş işlemleri için toggle butonlarının işlevi
document.getElementById('login').addEventListener('click', function() {
    document.querySelector('.container').classList.remove('right-panel-active');
});

document.getElementById('register').addEventListener('click', function() {
    document.querySelector('.container').classList.add('right-panel-active');
});

// Geri Dön butonuna tıklanınca ana sayfaya yönlendir
document.getElementById('returnbutton').addEventListener('click', function() {
    window.location.href = '/';
});

// Kayıt formu için basit doğrulama
document.querySelector('.sign-up form').addEventListener('submit', function (event) {
    event.preventDefault(); // Formun varsayılan submit işlemini durdur
    
    const email = this.querySelector('input[name="email"]').value;
    const password = this.querySelector('input[name="password"]').value;
    const passwordConfirmation = this.querySelector('input[name="password_confirmation"]').value;
    
    const errorMessage = document.getElementById('errorMessage');
    
    if (!validateEmail(email)) {
        alert('Geçerli bir e-posta adresi giriniz.');
        return;
    }

    if (password !== passwordConfirmation) {
        alert('Şifreler eşleşmiyor!');
        return;
    }

    // Tüm doğrulamalar başarılı ise formu gönder
    this.submit();
});

// Email doğrulama fonksiyonu
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}









// DUYURU
const announcements = document.querySelectorAll('.announcement');
let currentIndex = 0;
const displayDuration = 3000;

function showNextAnnouncement() {
  announcements.forEach(announcement => {
    announcement.classList.remove('show');
  });

  announcements[currentIndex].classList.add('show');

  currentIndex = (currentIndex + 1) % announcements.length;
}

showNextAnnouncement();

setInterval(showNextAnnouncement, displayDuration);
//DUYURU




//interactive tab active status changing
function showContent(contentName, element) {

    var contents = document.querySelectorAll('.interactive-tab');
    contents.forEach(function (content) {
        content.style.display = 'none';
    });

    document.getElementById(contentName).style.display = 'block';

    var tabs = document.querySelectorAll('.abtn');
    tabs.forEach(function (tab) {
        tab.classList.remove('active');
    });

    element.classList.add('active');
}









$("#x1").on('click', function () {
    const elements = document.getElementById("1");
    elements.classList.toggle('open');
});
$("#x2").on('click', function () {
    const elements = document.getElementById("2");
    elements.classList.toggle('open');
});
$("#x3").on('click', function () {
    const elements = document.getElementById("3");
    elements.classList.toggle('open');
});





