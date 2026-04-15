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


<body class="text-gray-800 bg-gray-50" style="font-family: 'Space Grotesk', sans-serif;" data-url-public="<?= PUBLIC_URL ?>">

    <?php require VIEWS_PATH . '/partials/admin/header.php' ?>

    
        <?= $content ?>
    

    <?php require VIEWS_PATH . '/partials/admin/footer.php' ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="module" src="<?= PUBLIC_URL ?>/assets/js/admin/ui.js"></script>
<script type="module" src="<?= PUBLIC_URL ?>/assets/js/admin/event.js"></script>

</html>