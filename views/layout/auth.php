<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <title><?= $title ?? 'Lusta' ?></title>
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/assets/css/output.css?v=<?= time() ?>" />
</head>

<body class="flex items-center justify-center min-h-screen p-4 bg-linear-to-br from-white via-yellow-50 to-yellow-100" style="font-family: 'Space Grotesk', sans-serif;">

    <?php require VIEWS_PATH . '/partials/auth/header.php' ?>

    <main>
        <?= $content ?>
    </main>

    <?php require VIEWS_PATH . '/partials/auth/footer.php' ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module" src="<?= PUBLIC_URL ?>/assets/js/auth/ui.js"></script>
<script type="module" src="<?= PUBLIC_URL ?>/assets/js/auth/event.js"></script>

</html>