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
                                <a class="uk-margin-left" href="<?php use App\Models\Product;

                                echo $routes->get('product')->getPath(); ?>">Back
                                    to Kunden</a>
                            </li>
                            <li>
                                <a class="uk-margin-left" href="<?php echo $routes->get('product-create')->getPath(); ?>">
                                    Create Company</a>
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
                            <div class="uk-grid uk-grid-row uk-child-width-1-2">
                                <div>
                                    <a class="uk-margin-top uk-margin-bottom uk-button uk-button-secondary" href="/products">exit</a>
                                </div>
                                <div class="uk-flex uk-flex-right">
                                    <p>Id: <?= $values['id']; ?></p>
                                </div>
                            </div>
                        </div>

                        <form method="POST">
                            <div class="uk-card-body">
                                <label for="editCompanyName">Name:</label>
                                <input class="uk-input uk-margin-top uk-margin-bottom" type="text" value="<?= $values['companyName']; ?>" name="editCompanyName" required>

                                <label for="editAddress">Address:</label>
                                <div class="uk-grid uk-child-width-1-2">
                                    <div class="uk-width-expand">
                                        <input class="uk-input uk-margin-top uk-margin-bottom" type="text" value="<?=
                                        $values['address']; ?>" name="editAddress" required>
                                    </div>
                                    <div class="uk-width-1-6">
                                        <input class="uk-input uk-margin-top uk-margin-bottom" type="text" value="<?=
                                        $values['number']; ?>" name="editNumber" required>
                                    </div>
                                </div>

                                <label for="editPlz">PLZ/Location:</label>
                                <div class="uk-grid uk-child-width-expand">
                                    <div class="uk-width-1-5">
                                        <input class="uk-input uk-margin-top uk-margin-bottom" type="text" value="<?=
                                        $values['plz']; ?>" name="editPlz" required>
                                    </div>
                                    <div class="uk-width-expand">
                                        <input class="uk-input uk-margin-top uk-margin-bottom" type="text" value="<?=
                                        $values['place']; ?>" name="editPlace" required>
                                    </div>
                                </div>

                                <label for="editMail">E-mail:</label>
                                <input class="uk-input uk-margin-top uk-margin-bottom" type="email" value="<?=
                                $values['mail']; ?>" name="editMail" required>

                                <label for="editPhone">Phone:</label>
                                <input class="uk-input uk-margin-top uk-margin-bottom" type="tel" value="<?=
                                $values['phone']; ?>" name="editPhone" required>

                                <label for="editOk">Head:</label>
                                <div class="uk-grid uk-child-width-1-2">
                                    <div>
                                        <input class="uk-input uk-margin-top uk-margin-bottom" type="text" value="<?=
                                        $values['ok']; ?>" name="editOk" required>
                                    </div>
                                    <div>
                                        <input class="uk-input uk-margin-top uk-margin-bottom" type="text" value="<?=
                                        $values['okFirst']; ?>" name="editOkFirst" required>
                                    </div>
                                </div>

                                <p>Status:</p>
                                <div>
                                    <label class="uk-margin-bottom"><input class="uk-radio" type="radio" value="1" <?=
                                        $values['status'];?> name="editStatus" <?php if ($values['status'] == 1)
                                            :?> checked <?php endif;?>> &emsp; On</label>
                                </div>
                                <div class="uk-margin-bottom">
                                    <label class="uk-margin-bottom"><input class="uk-radio" type="radio" value="0" <?=
                                        $values['status'] ?> name="editStatus" <?php if ($values['status'] == 0)
                                            :?> checked <?php endif;?>> &emsp; Off</label>
                                </div>

                                <button class="uk-button uk-button-default uk-button-primary" type="submit" name="done"
                                        id="done">done</button>
                                <a class="uk-button uk-button-danger" href="#modal-sections" data-uk-toggle>Delete</a>

                                <div id="modal-sections" data-uk-modal>
                                    <div class="uk-modal-dialog">
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title">Do you <strong>really</strong> want to delete this entry?</h2>
                                        </div>
                                        <div class="uk-modal-footer uk-text-right">
                                            <button class="uk-button uk-button-primary uk-modal-close" type="button">Cancel</button>
                                            <a href="/delete/<?= $values['id'] ?>" class="uk-button uk-button-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
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