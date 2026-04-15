<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title><?= $title ?? 'Lusta' ?></title>
    <link rel="icon" href="<?= PUBLIC_URL ?>/assets/img/logo.png" type="image/png">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/assets/css/output.css?v=<?= time() ?>" />
</head>

<body class="bg-[#facf22] min-h-screen" style="font-family: 'Space Grotesk', sans-serif;" data-url-public="<?= PUBLIC_URL ?>">

    <?php require VIEWS_PATH . '/partials/user/header.php' ?>

    <main>
        <?= $content ?>
    </main>

    <?php require VIEWS_PATH . '/partials/user/footer.php' ?>

</body>

<script type="module" src="<?= PUBLIC_URL ?>/assets/js/user/ui.js"></script>
<script type="module" src="<?= PUBLIC_URL ?>/assets/js/user/event.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>