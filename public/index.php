<? session_start(); require __DIR__.'/../config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Invoices | <?= env->company_name ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= env->base_url ?>/dependencies/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="<?= env->base_url . env->logo_path ?>">
    </head>
    <body>
        <div class="min-vh-100 d-flex flex-column">
            <header class="d-flex justify-content-center align-items-center bg-secondary bg-opacity-25 p-2">
                <div>
                    <img src="<?= env->base_url . env->logo_path ?>" style="height: 1.25rem;">
                    <?= env->company_name ?>
                </div>
            </header>
            <main class="d-flex flex-column flex-grow-1 d-flex justify-content-center pb-5">
                <? require __DIR__.'/../views/'. method .'.php'; ?>
            </main>
            <footer class="bg-light py-1 text-end pe-2">
                <a href="<?= env->base_url ?>/admin" style="color: #ccc">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
                    </svg>
                </a>
            </footer>
        </div>
        <script src="<?= env->base_url ?>/dependencies/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>