<?php
session_start();
if(isset($_POST['view'])) {
    if(!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }
    $_SESSION['count']++;
}
?>

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
            <?php if ($_SESSION['count'] % 2 == 0) :?>
                <nav class="uk-navbar-container uk-margin-bottom">
                    <div uk-navbar>
                        <div class="uk-navbar-left uk-margin-left">
                            <ul class="uk-navbar-nav">
                                <h1 class="uk-margin-small-top">Customers</h1>
                                <li>
                                    <a class="uk-margin-left" href="<?= $routes->get('product')->getPath(); ?>">Back to Customer</a>
                                </li>
                                <li>
                                    <a class="uk-margin-left" href="<?= $routes->get('product-create')->getPath(); ?>">Create Company</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php endif; ?>
        </section>

        <section class="uk-section uk-section-primary uk-section-small">
            <div class="uk-container uk-container-small">
                <div class="uk-grid uk-child-width-expand">
                    <div>
                        <form method="POST">
                            <input class="uk-input" type="text" placeholder="Search" name="search">
                        </form>
                    </div>
                    <div>
                        <form action="products" method="post">
                            <input class="uk-button uk-button-secondary" type="submit" name="view" value="Compact View">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="uk-section uk-section-small">
            <?php if ($_SESSION['count'] % 2 !== 0) :?>
                <div class="uk-width-medium uk-position-center-left uk-position-fixed uk-margin-left">
                    <ul class="uk-nav-default uk-nav-divider" uk-nav>
                        <li class="uk-active">
                            <h1 class="uk-margin-small-top">Customers</h1>
                        </li>
                        <li>
                            <a class="uk-margin-left" href="<?= $routes->get('product-create')->getPath(); ?>">Create Company</a>
                        </li>
                        <li>
                            <a class="uk-margin-left" href="<?= $routes->get('product')->getPath(); ?>">Back to Customer</a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="uk-container <?php if ($_SESSION['count'] % 2 !== 0) {echo "uk-container-large";} else {echo "uk-container-expand";}?>">
                <div>
                    <div class="uk-grid uk-grid-match uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-flex-center" data-uk-grid>
                        <?php if ($_SESSION['count'] % 2 !== 0) :?>
                            <ul class="uk-list uk-list-divider uk-width-1-1">
                                <?php foreach($arrCustomers as $customer): ?>
                                    <li class="uk-child-width-1-1">
                                        <div>
                                            <div class="uk-grid uk-child-width-expand@s">
                                                <div class="uk-text-left">
                                                    <p class="uk-text-baseline"><?php print_r($customer['companyName']) ?></p>
                                                </div>
                                                <div class="uk-text-center">
                                                    <p class="uk-text-middle">Head: <?= $customer['ok'] . " " . $customer['okFirst'] ?></p>
                                                </div>
                                                <div class="uk-text-center">
                                                    <p class="uk-text-middle">Status: <?php if($customer['status'] == 1) {echo "On";} else { echo "Off";}?></p>
                                                </div>
                                                <div class="uk-text-right">
                                                    <a class="uk-button uk-button-secondary" href="/edit/<?= $customer['id'] ?>">edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <?php foreach($arrCustomers as $customer): ?>
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <h2><?php print_r($customer['companyName']) ?></h2>
                                            <p>Id: <?php print_r($customer['id']); $id = $customer['id']; ?></p>
                                        </div>
                                        <div class="uk-card-body">
                                            <p>Address:<br><?= $customer['address'] . " " . $customer['number'] . ", "
                                                . $customer['plz'] . " " . $customer['place']?></p>
                                            <p>E-mail:<br><?= $customer['mail'] ?></p>
                                            <p>Phone:<br><?= $customer['phone'] ?></p>
                                            <p>Head:<br><?= $customer['ok'] . " " . $customer['okFirst'] ?></p>
                                            <p>Status:<br><?php if($customer['status'] == 1) {echo "On";} else { echo "Off";}?></p>
                                            <a class="uk-button uk-button-secondary" href="/edit/<?= $customer['id'] ?>">edit</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if(isset($_POST["search"])) : ?>
                        <a class="uk-button uk-button-default uk-margin-top" href="<?php echo $routes->get('product')->getPath(); ?>">Back to products</a>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit-icons.min.js"></script>
    </body>
</html>