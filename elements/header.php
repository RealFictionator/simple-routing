<header>
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <?php foreach ($routingList as $link) { ?>
                                    <li class="nav-item">
                                        <a href="<?php print HTTP; ?><?= $link[1] ?>" class="nav-link"><?= ucfirst($link[1]) ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>