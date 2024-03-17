<section class="footer">
    <div class="footer-nav">
        <div class="footer-mobile">
            <img src="assets/img/logow.svg" alt="Logo">
            <div class="footer-elm">

                <div class="footer-social">
                    <a href="https://www.facebook.com/RafaelDatoPiano/" target="_blank"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/rafael_dato/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://fr.linkedin.com/in/rafa%C3%ABl-dato-6292a51a9" target="_blank"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <select name="lang" id="lang" size="1" onchange="window.location.href=this.value">
                    <option value="" placeholder></option>
                    <option value="?lng=fr" class="language">
                        français
                    </option>
                    <option value="?lng=en" class="language">
                        english
                    </option>
                </select>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-logo">
                <img src="assets/img/logow.svg" alt="Logo">
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">menu</h3>
                <ul>
                    <li>
                        <a href="?lng=<?= $Lang ?>&p=<?= $Data['_HOME_'] ?>"><?= $Data['_HOME_'] ?></a>
                        <a href="?lng=<?= $Lang ?>&p=<?= $Data['_BIO_'] ?>"><?= $Data['_BIO_'] ?></a>
                        <a href="?lng=<?= $Lang ?>&p=<?= $Data['_PRES_'] ?>"><?= $Data['_PRES_'] ?></a>
                        <a href="?lng=<?= $Lang ?>&p=<?= $Data['_MUSIC_'] ?>"><?= $Data['_MUSIC_'] ?></a>
                        <a href="?lng=<?= $Lang ?>&p=<?= $Data['_TOUR_'] ?>"><?= $Data['_TOUR_'] ?></a>
                        <a href="?lng=<?= $Lang ?>&p=<?= $Data['_BLOG_'] ?>"><?= $Data['_BLOG_'] ?></a>
                        <a href="?lng=<?= $Lang ?>&p=<?= $Data['_CONTACT_'] ?>"><?= $Data['_CONTACT_'] ?></a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">best music</h3>
                <ul>
                    <li>
                        <a href="#">so what's next</a>
                        <a href="#">Friendly Walk</a>
                        <a href="#">How deep is the ocean</a>
                        <a href="#">Folk waltz</a>
                        <a href="#">Pop song</a>

                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">last blog</h3>
                <ul>
                    <li>
                        <a href="#">so what's next</a>

                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">contact me</h3>
                <ul>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="social-lang">
                <div class="footer-social">
                    <a href="https://www.facebook.com/RafaelDatoPiano/" target="_blank"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/rafael_dato/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://fr.linkedin.com/in/rafa%C3%ABl-dato-6292a51a9" target="_blank"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>

                <div class="lang">
                    <select name="lang" id="lang" size="1" onchange="window.location.href=this.value">
                        <option value="placeholder" class="language" disabled selected>select lang</option>
                        <option value="?lng=fr" class="language">
                            français
                        </option>
                        <option value="?lng=en" class="language">
                            english
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="copyright">
        <p>copyright orbin &#169; 2023. all rights reserved</p>
    </div>
    </div>
</section>

<script>
    var btn = document.getElementById('menu-btn');
    var menu = document.getElementById('menu');
    var icon = document.querySelector('#menu-btn i');
    let navEl1 = document.querySelectorAll(".nav a")
    // let sel = document.getElementById('lang')
    // console.log(select.options)
    var pos = 0;
    btn.addEventListener('click', function() {
        if (pos == 0) {

            menu.classList.add('menu');
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-xmark');
            if (window.location.href.split('=')[2] === "Artibiography" || window.location.href.split('=')[2] ===
                "Artibiographie") {
                biOverlay.style.display = 'none'
            }
            pos = 1;
        } else {
            menu.classList.remove('menu');
            icon.classList.remove('fa-xmark');
            icon.classList.add('fa-bars');
            if (window.location.href.split('=')[2] === "Artibiography" || window.location.href.split('=')[2] ===
                "Artibiographie") {
                biOverlay.style.display = 'block'
            }
            pos = 0;
        }
    })
</script>
</body>

</html>
