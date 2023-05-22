<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>
    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            <Select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </Select>
            <Select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </Select>
            <Select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </Select>
            <input type="" placeholder="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
        </aside>
        <main>
            <?php require_once './admin/backend/conn.php';
            $query = "SELECT * FROM rides";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <h1>Attracties</h1>
            <!-- hier komen de attractiekaartjes -->
            <div class="attracties">
                <?php foreach ($rides as $ride) : ?>
                    <div class="attr-card">
                        <div class="card-img" style="background-image: url(<?php echo $ride['img_file']; ?>);"></div>
                        <div>
                            <p class="adv"><?php echo $ride['themeland']; ?></p>
                            <h2><?php echo $ride['title']; ?></h2>
                            <p class="desc"><?php echo $ride['description']; ?></p>
                            <?php if ($ride['min_length'] !== null) : ?>
                                <p class="rule"><?php echo $ride['min_length']; ?> minimale lengte</p>
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endforeach; ?>

                <!-- <div class="attr-card " id="large">
                    <div class="card-img img-2"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>


                    </div>
                </div>

                <div class="attr-card">
                    <div class="card-img img-3"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>
                    </div>
                </div>

                <div class="attr-card">
                    <div class="card-img img-4"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>
                    </div>
                </div>

                <div class="attr-card">
                    <div class="card-img img-5"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>
                    </div>
                </div>

                <div class="attr-card bigger">
                    <div class="card-img img-6"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>
                    </div>
                </div>

                <div class="attr-card large">
                    <div class="card-img img-7"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>
                    </div>
                </div>

                <div class="attr-card">
                    <div class="card-img img-8"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>
                    </div>
                </div>

                <div class="attr-card">
                    <div class="card-img img-9"></div>
                    <div>
                        <p class="adv">ADVENTURELAND</p>
                        <h2>Speedy XL</h2>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="rule">120cm minimale lengte</p>
                    </div>
                </div> -->
            </div>
        </main>
    </div>

</body>

</html>