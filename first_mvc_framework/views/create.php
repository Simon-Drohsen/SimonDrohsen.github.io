<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.png">
        <title>Simple PHP MVC</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/css/uikit.min.css"/>
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
    <section>
        <nav class="uk-navbar-container uk-margin-bottom">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <h1 class="uk-margin-small-top">Customers</h1>
                        <li>
                            <a class="uk-margin-left" href="<?= $routes->get('product')->getPath(); ?>">Back to Kunden</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="uk-section uk-section-xsmall">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-small uk-child-width-1-2 uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <a class="uk-button uk-button-secondary uk-margin-top uk-margin-bottom" href="/products">exit</a>
                        <form method="POST">
                            <div class="uk-card-body">
                                <p>Company:</p>
                                <input class="uk-input" type="text" placeholder="z.B w-vision AG" name="createCompany" required>

                                <p>Address:</p>
                                <div class="uk-grid uk-child-width-1-2">
                                    <div class="uk-width-expand">
                                        <input class="uk-input" type="text" placeholder="z.B Sandgruebestrasse" name="createAddress">
                                    </div>
                                    <div class="uk-width-1-6">
                                        <input class="uk-input" type="text" placeholder="z.B 4" name="createStreetNumber" required>
                                    </div>
                                </div>

                                <p>PLZ/Location:</p>
                                <div class="uk-grid uk-child-width-1-2">
                                    <div class="uk-width-1-5">
                                        <input class="uk-input" type="number" placeholder="z.B 6210" name="createPlz" required>
                                    </div>
                                    <div class="uk-width-expand">
                                        <input class="uk-input" type="text" placeholder="z.B Sursee" name="createPlace" required>
                                    </div>
                                </div>

                                <p>E-mail:</p>
                                <input class="uk-input" type="email" placeholder="z.B s.drohsen@w-vision.ch" name="createMail" required>

                                <p>Phone:</p>
                                <input class="uk-input" type="tel" pattern="^\+(\s|([0-9]))+$" placeholder="z.B +41 41 926 07 20" name="createPhone" required>

                                <p>Head:</p>
                                <div class="uk-grid uk-child-width-1-2">
                                    <div>
                                        <input class="uk-input" type="text" placeholder="z.B Adrian Hess" name="createOk" required>
                                    </div>
                                    <div>
                                        <input class="uk-input" type="text" placeholder="z.B Adrian Hess" name="createOkFirst" required>
                                    </div>
                                </div>

                                <p>Status:</p>
                                <div>
                                    <label class="uk-margin-bottom"><input class="uk-radio" type="radio" value="1" name="createStatus">&emsp; On</label>
                                </div>
                                <div class="uk-margin-bottom">
                                    <label class="uk-margin-bottom"><input class="uk-radio" type="radio" value="0" name="createStatus">&emsp; Off</label>
                                </div>
                                <button class="uk-button uk-button-primary" type="submit" name="create" id="create">create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit-icons.min.js"></script>
    </body>
</html>