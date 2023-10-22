<header class="h-20">
        <div class="d-flex justify-content-between align-items-center container-fluid bg-dark">
            <!-- タイトル -->
            <div class="h3 m-4 text-danger">HOME LIFE</div>
            <!-- ナビゲーション -->
            <?php $navTexts = array(
              array(
                "title" => "Home",
                "link" => "#"
              ),
              array(
                "title" => "About",
                "link" => "#about"
              ),
              array(
                "title" => "Case",
                "link" => "#case"
              ),
              array(
                "title" => "Service",
                "link" => "#service"
              ),
              array(
                "title" => "FAQ",
                "link" => "#faq"
              ),
              array(
                "title" => "Contact Us",
                "link" => "#contactUs"
              ),
            ) ?>
            <div>
              <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                  <nav class="navbar navbar-expand-lg navbar-dark">
                    <ul class="navbar-nav">
                      <?php foreach ($navTexts as $navText): ?>
                        <li class="nav-item m-1">
                          <a class="nav-link text-decoration-none" href="<?php echo $navText["link"]; ?>">
                            <?php echo $navText["title"]; ?>
                          </a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  </nav>
                </div>
              </div>
              <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
              </nav>
            </div>
</header>