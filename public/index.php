<? require __DIR__.'/../config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Invoices | Parseley Auto, LLC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= env->base_url ?>/dependencies/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="<?= env->base_url ?>/favicon.svg">
    </head>
    <body>
        <div class="min-vh-100 d-flex flex-column">
            <header class="d-flex justify-content-between align-items-center bg-secondary bg-opacity-25 text-center p-2">
                <b>INVOICE</b>
                <div>
                    <img src="<?= env->base_url ?>/favicon.svg" style="height: 1.25rem;">
                    Parseley Auto, LLC
                </div>
            </header>
            <main class="d-flex flex-column flex-grow-1 d-flex justify-content-center border-bottom border-dark pb-5">
                <? require __DIR__.'/../views/'. method .'.php'; ?>
            </main>
        </div>
        <script src="<?= env->base_url ?>/dependencies/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>