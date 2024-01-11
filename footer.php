<?php
$icons = [
    ["url" => "#", "image" => "images/facebook.png", "alt" => "Facebook"],
    ["url" => "#", "image" => "images/insta.png", "alt" => "Instagram"],
    ["url" => "#", "image" => "images/X.png", "alt" => "X"]
];

$links = [
    [ 'title' => 'test', 'mt' => 'margin-top-custom' ],
    [ 'title' => 'test', 'mt' => '' ],
    [ 'title' => 'test', 'mt' => '' ]
];

?>




<footer>
    <nav class="navbar navbar-expand-lg bg-body-tertiary h-100 p-0 transparent position-relative">
        <div class="container-fluid w-100 h-100 transparent">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100 p-0 h-100 transparent" id="navbarNavAltMarkup">
            <div class="navbar-nav d-block w-100 p-0 h-100 position-relative bg-op transparent">
                <div class="w-25 h-100 position-absolute end-0 d-flex justify-content-center align-item-center flex-wrap align-content-around transparent">
                <?php foreach ($icons as $icon) { ?>
                <a href="<?php echo $icon['url']; ?>"><img class="size-img-custom me-3" src="<?php echo $icon['image']; ?>" alt="<?php echo $icon['alt']; ?>"></a>
                <?php } ?>
                </div>
                <?php foreach ($links as $link) { ?>
                <a class="nav-link active ms-custom-a-footer px-5 py-2 fs-6 <?= $link['mt']?>" aria-current="page" href="#"><?= $link['title']?></a>
                <?php } ?>
            </div>
            </div>
        </div>
    </nav>
</footer>


