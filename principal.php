<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estiloPrincipal.css">
</head>
<body>
    <main>
        <header class="header">
            <div class="">
                <a onclick="">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 12H20M4 8H20M4 16H12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="TituloHeader">
                <h1>Veterinaria</h1>
            </div>
            <div class="">
                <a href="userInfo.php" >
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </header>
        <section class="seccionPrincipalTurnos">
            <div class="Turnos">
                <div class="btnesTurno">
                    <h1>¡Bienvenido/a <?php echo isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : 'Invitado'; ?>!</h1>
                    <div class="turno">
                        <a href="SacarTurnos.php">Sacar Turno</a>
                        <a href="misTurnos.php">Mis Turnos</a>
                    </div> 
                    <div class="mascota">
                        <a href="regisMascota.php">Registrar Mascota</a>
                        <a href="misTurnos.php">Mis mascotas</a>
                    </div>
                </div>
                <div class=""></div>
        </section>
        <section>
            <div class="slider-container">
                <div class="slider-wrapper" id="slider">
                    <div class="slide"><img src="veterinaria1.webp" alt="Imagen 1"></div>
                    <div class="slide"><img src="images.jpeg" alt=""></div>
                    <div class="slide"><img src="images (1).jpeg" alt=""></div>
                    <div class="slide"><img src="images (2).jpeg" alt=""></div>
                    <div class="slide"><img src="images (3).jpeg" alt=""></div>
                    <div class="slide"><img src="images (4).jpeg" alt=""></div>
                </div>
            </div>
        </section>
        <section class="InfoAnimales">
            <table>
                <tr>
                    <td>Animal</td>
                    <td>Ruido</td>
                    <td>Imagen</td>
                </tr>
                <tr>
                    <td>Perro</td>
                    <td>
                        <audio controls>
                            <source src="ES_Dog Bark - SFX Producer.mp3">
                        </audio>
                    </td>
                    <td><img src="https://images.ecestaticos.com/h34TvzTFVdrau9Un4Wdmwhed_e4=/0x115:2265x1390/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F8ec%2F08c%2F85c%2F8ec08c85c866ccb70c4f1c36492d890f.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>Gato</td>
                    <td>
                        <audio controls>
                            <source src="ES_Cat Meow 9 - SFX Producer.mp3">
                        </audio>
                    </td>
                    <td><img src="https://hips.hearstapps.com/hmg-prod/images/beautiful-smooth-haired-red-cat-lies-on-the-sofa-royalty-free-image-1678488026.jpg?crop=0.88847xw:1xh;center,top&resize=1200:*" alt=""></td>
                </tr>
                <tr>
                    <td>Loro</td>
                    <td>
                        <audio controls>
                            <source src="ES_Parrot Screeches - SFX Producer.mp3">
                        </audio>
                    </td>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Thick-billed_parrots_in_a_U.S._zoo.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>caballo</td>
                    <td>
                        <audio controls>
                            <source src="ES_Horse Neigh 4 - SFX Producer.mp3">
                        </audio>
                    </td>
                    <td><img src="https://www.horsejournals.com/files/pictures-videos/articles/shutterstock_733256173_-_rita_kochmarjova-mainweb.jpg" alt=""></td>
                </tr>
            </table>
        </section>
        <footer>
            <p>2023 Veterinaria. Todos los derechos reservados.&copy;</p>
        </footer>
        <script>
            var slider = document.getElementById('slider');
            var slides = document.querySelectorAll('.slide');
            var currentIndex = 0;
            var intervalTime = 3000;
        
            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlider();
            }
        
            function updateSlider() {
                slider.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
            }
            setInterval(nextSlide, intervalTime);
        </script>
    </main>
</body>
</html>