<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <title>Hello world</title>
</head>
<body>
    <h1>Hello world</h1>
    <p>This is the data <em><?= $data['info'] ?></em> from controller.</p>

    <?php foreach ($data['list'] as $key => $value) { ?>
    <a href="javascript:void(0);">foreach list <?= $value ?></a>
    <?php } ?>
</body>
</html>