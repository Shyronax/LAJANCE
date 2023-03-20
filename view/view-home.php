<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mille Cultures, Une Origine</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
        include "src/element/nav.html";
    ?>
    <main>
        <div class="card hero">
            <div class="card__header card__header--sm">
                <p class="text--semi-bold">Du 31 mars au 25 juin 2023</p>
                <p class="text--semi-bold">Réservation en ligne obligatoire</p>
            </div>
            <div class="flex hero__content">
                <div class="hero__info">
                    <h1 class="hero__title">Les Pueblos</h1>
                    <p class="caption">Découvrez l'histoire fascinante et la culture vibrante des Pueblos à travers notre exposition interactive.</p>
                </div>
                <div class="btn btn--primary">
                    <p class="text--bold">Acheter mon billet</p>
                    <img src="/src/img/arrow-right.svg" alt="" class="btn__icon">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__header">
                <h2 class="card__title">L'expostion</h2>
            </div>
            <div class="card__main">
                <div class="card__media">
                    <video src="">

                    </video>
                </div>
                <div class="card__info">
                    <div class="card__text">
                        <p>Épisode de la série <span class="text--italic">« Mille Cultures, une Origine »</span>, l'exposition “Les Pueblos” a pour objectif de <span class="text--highlight">démystifier les origines amérindiennes</span>.</p>
                        <p>Contenus audiovisuels, dispositif interactif, poteries et autres objets sacrés seront l'occasion de vous plonger dans une <span class="text--highlight">ambiance immersive</span>, afin de découvrir l'univers des peuples Pueblos.</p>
                    </div>
                    <div class="btn btn--primary">
                        <p class="text--bold">En savoir plus</p>
                        <img src="src/img/arrow-right.svg" alt="" class="btn__icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-gallery">
            <div class="card-gallery__group--column">
                <img src="src/img/group-pueblos.jpg" alt="">
                <img src="src/img/landscape.jpg" alt="">
            </div>
            <div class="card-gallery__group--row">
                <img src="src/img/drawing.jpg" alt="">
                <img src="src/img/pueblos.jpg" alt="">
            </div>
        </div>
        <div class="card">
            <div class="card__header">
                <h2 class="card__title">Nous trouver</h2>
            </div>
            <div class="card__main flex--reverse">
                <div class="card__media">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1153.0237163742015!2d2.5843720477426624!3d48.83721962462024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1679320145226!5m2!1sfr!2sfr" width="790" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card__info">
                    <div class="card__text">
                        <div class="flex flex--column">
                            <h3>IUT de Marne-la-Vallée - Université Gustave Eiffel</h3>
                            <p>2, rue Albert Einstein
                                77420 Champs-sur-Marne</p>
                        </div>
                        <div class="flex flex--start flex--column">
                            <h3>Horaires d'ouverture</h3>
                            <p>de 8h à 18h du lundi au vendredi</p>
                        </div>
                    </div>
                    <div class="btn btn--primary">
                        <p class="text--bold">Préparer ma visite</p>
                        <img src="src/img/arrow-right.svg" alt="" class="btn__icon">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__link-section">
            <div class="footer__link-list">
                <h1 class="footer__link-list-title">Infos pratiques</h1>
                <ul class="footer__link-list-group list--none">
                    <li class="footer__link-list-text"><a href="" class="footer__link-list-link">Préparez votre visite</a></li>
                    <li class="footer__link-list-text"><a href="" class="footer__link-list-link">Règlement intérieur</a></li>
                    <li class="footer__link-list-text"><a href="" class="footer__link-list-link">FAQ</a></li>
                </ul>
            </div>
            <div class="footer__link-list">
                <h1 class="footer__link-list-title">Contact</h1>
                <ul class="footer__link-list-group list--none">
                    <li class="footer__link-list-text">Téléphone : <a href="" class="footer__link-list-link">+33 (0)1 60 95 85 90</a></li>
                    <li class="footer__link-list-text">Email : <a href="mailto:mmi-dir.iut@univ-eiffel.fr" class="footer__link-list-link">mmi-dir.iut@univ-eiffel.fr</a></li>
                    <li class="footer__link-list-text">Adresse : <a href="" class="footer__link-list-link">2, rue Albert Einstein <br> 77420 Champs-sur-Marne</a></li>
                </ul>
            </div>
            <div class="footer__link-list">
                <h1 class="footer__link-list-title">Réseaux sociaux</h1>
                <div class="footer__link-list-section">
                    <div class="footer__link-list-col">
                        <h2 class="footer__link-list-header">L'exposition</h2>
                        <div class="footer__social-media">
                            <img src="" alt="" class="footer__social-media-img">
                            <p><a href="" class="footer__link-list-link">@milleculturesuneorigine</a></p>
                        </div>
                        <div class="footer__social-media">
                            <img src="" alt="" class="footer__social-media-img">
                            <p><a href="" class="footer__link-list-link">@milleculturesuneorigine</a></p>
                        </div>
                        <div class="footer__social-media">
                            <img src="" alt="" class="footer__social-media-img">
                            <p><a href="" class="footer__link-list-link">@milleculturesuneorigine</a></p>
                        </div>
                    </div>
                    <div class="footer__link-list-col">
                        <h2 class="footer__link-list-header">Le lieu</h2>
                        <div class="footer__social-media">
                            <img src="" alt="" class="footer__social-media-img">
                            <p><a href="" class="footer__link-list-link">@mmi_champs</a></p>
                        </div>
                        <div class="footer__social-media">
                            <img src="" alt="" class="footer__social-media-img">
                            <p><a href="" class="footer__link-list-link">@iutmarnelavallee</a></p>
                        </div>
                        <div class="footer__social-media">
                            <img src="" alt="" class="footer__social-media-img">
                            <p><a href="" class="footer__link-list-link">IUT de Marne-la-Vallée</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__utility">
            <p class="footer__utility-copy">© 2023 - Glimpse</p>
            <a href="" class="footer__utility-link">Mentions légales</a>
            <a href="" class="footer__utility-link">Agence Glimpse</a>
            <a href="" class="footer__utility-link">Plan du site</a>
        </div>
    </footer>
</body>
</html> 