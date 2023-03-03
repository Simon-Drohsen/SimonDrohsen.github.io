<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="theme-color" content="#f5f5f5"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.1">
            <meta name="description" content="Ich bin Simon Drohsen Lernender bei der w-vision AG.
                                                      Ich habe dieses Portfolio erstellt, um euch zu zeigen, was ich nach ca.
                                                      6 Monaten in der Lehre kann.">
            <title>Simon Drohsen</title>
            <!-- UIkit CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" />

            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>
            <section class="uk-section uk-section-small first-page">
                <div class="uk-container uk-container-expand container uk-flex uk-flex-row">
                    <div class="uk-grid uk-grid-collapse" data-uk-grid>
                        <div class="uk-width-1-2@m uk-flex uk-flex-column uk-flex-center text-div">
                            <h1 class="uk-text-left text">Simon Drohsen</h1>
                            <h2 class="uk-text-left text h4">Lernender Informatiker Applikationsentwicker EFZ</h2>
                            <p class="uk-text-left text">Ich bin Simon Drohsen Lernender bei der w-vision AG.
                            Ich habe dieses Portfolio erstellt, um euch zu zeigen,
                            was ich nach ca. 6 Monaten in der Lehre kann.
                            Das heisst ihr könnt jetzt meine bisherigen Projekte ansehen. </p>
                        </div>

                        <div class="uk-width-1-2@m me">
                            <img alt="Simon Drohsen" src="img/Ich_kein_hintergrund.webp" class="uk-align-right uk-margin-right uk-margin-remove-bottom k-width-1-2@m">
                        </div>
                    </div>
                </div>
            </section>

            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <h1 class="h1-about uk-text-center">ÜBER MICH</h1>
                    <p class="p-about">Als Applikationsentwickler im Bereich Web Development bin ich darauf spezialisiert, leistungsstarke und benutzerfreundliche
                        Anwendungen für das Web zu entwickeln. Meine Aufgaben sind die Entwicklung von Front-End-Webanwendungen, dynamischen
                        Benutzeroberflächen sowie das Implementieren von robusten Back-End-Systemen und APIs. Ich konzentriere mich auf die neuesten
                        Webtechnologien und -standards. Dazu gehören HTML, CSS, JavaScript und viele mehr. Auf meiner Portfolio-Website finden Sie eine Auswahl
                        meiner Projekte, die ich schon machen durfte. Das Erste Projekt, dass ich umgesetzt habe, war eine sehr simple Website...</p>
                    <br>
                    <img alt="Meine Erste Website" src="img/first_website.webp" class="first-website uk-align-center">
                </div>
            </section>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <br>
                    <p>Da das mein erstes Projekt war sah es nicht besonders schön aus. Aber nachher konnte eine Website einer Vorlage nach programmieren.
                       Das ist ein Teil der Website, die ich programmiert habe, aber man sieht wie sich meine Fähigkeiten im gegensatz zur ersten Website verbessert haben.
                       Ich habe dafür sehr viel länger gebraucht für diese Website:</p>
                    <br>
                    <img alt="District Website" src="img/district_products.webp" class="district uk-flex uk-align-center">
                    <br>
                    <p>Damit ich überhaupt Fortschritte machen konnte, habe ich sehr viele Tutorials bei Codecademy gemacht.
                        Ich habe nicht nur die Übungen für HTML und CSS gemacht, sondern auch für Javascript, C# und PHP. Dass heisst zwar nicht das ich alle
                        Programmiersprachen perfektioniert habe, aber ich kann schon vieles mit den Sprachen anfangen und umsetzen. Als nächstes, seht ihr die
                        Projekte die ich entweder mit PHP, Javascript oder C# umgesetzt habe. Bitte beachtet dass ich diese Projekte alle für den Computer umgesetzt
                        habe und sie deshalb auf dem Handy nicht gut aussehen.</p>
                </div>
            </section>

            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-flex btn-grid uk-width-1-1@l">
                        <button class="btn uk-flex-around uk-width-1-3@l" onclick="window.open('html-and-php/calculator-index-php.php', '_blank')">
                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                            <span>Ein Taschenrechner mit PHP</span>
                        </button>

                        <button class="btn uk-flex-around uk-width-1-3@l" onclick="window.open('html-and-php/calculator-index-javascript.html', '_blank')">
                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                            <span>Ein Taschenrechner mit Javascript</span>
                        </button>

                        <button class="btn uk-flex-around uk-width-1-3@l" onclick="window.open('html-and-php/tic-tac-toe-index-javascript.html', '_blank')">
                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                            <span>Ein Tic Tac Toe mit Javascript</span>
                        </button>
                    </div>

                    <p class="c-sharp-p">Die C# Dateien kann man nur anschauen wenn man sie herunterlädt und im Microsoft Visual Studio öffnet. Das heisst,
                        dass man dieDateien auch nur auf dem Computer und nicht auf dem Handy öffnen kann.
                        Die Projekte die ich in C# gemacht habe, sind alles Konsolenanwendungen und deshalb nicht besonders schön gestaltet.</p>

                    <a class="btn download-csharp uk-align-center" href="csharp-projects.zip" download="csharp-projects.zip" onclick="trackOutboundLink('../csharp-projects.zip'); return false;">
                        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                        </svg>
                        <span>All meine C# Projekte</span>
                    </a>
                </div>
            </section>

            <footer>
                <nav class="social-media">
                    <ul>
                        <li><img alt="assets" src="img/tw.svg" class="icon twitter" onclick="window.open('https://twitter.com/SDrohsen', '_blank')"></li>
                        <li><img alt="assets" src="/img/in.svg" class="icon linkedln" onclick="window.open('https://www.linkedin.com/in/simon-drohsen-466650251/', '_blank')"></li>
                        <li><img alt="assets" src="/img/fb.svg" class="icon fb" onclick="window.open('https://www.facebook.com/simon.drohsen', '_blank')"></li>
                        <li><img alt="assets" src="/img/insta.svg" class="icon insta" onclick="window.open('https://www.instagram.com/simon.6204_/', '_blank')"></li>
                    </ul>
                </nav>

                <div class="post-footer">
                    <p>© 2023 Simon Drohsen. All rights reserved.</p>
                </div>
            </footer>
        </body>
    </html>
