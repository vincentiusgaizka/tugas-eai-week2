<?php
    $refrensi = 'https://apiv3.apifootball.com/?action=get_countries&APIkey=ec16a045189fad26fdf77bef1783ab87dad579b767aae0d529f863f13ee27707';
    $isi = file_get_contents($refrensi);
    $data = json_decode($isi, true);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3">Countries</h1>
        <div class="row">
            <?php foreach ($data as $row): ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row['country_logo'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3><?php echo $row['country_id'] ?></h3>
                            <p class="card-text"><?php echo $row['country_name'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>