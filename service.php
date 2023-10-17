<div class="d-flex flex-column align-items-center justify-content-center m-5">
    <div class="h1 text-danger">Service</div>
    
    <?php $serviceCards = array(
        array(
            "title" => "メールを送るだけで簡単査定",
            "content" => "お問い合わせフォームから送付いただくだけで、こちらから必要な内容をメールで送付いたします",
            "img" => "./assets/images/mail.jpg"
        ),
        array(
            "title" => "プロが選ぶ賃貸サービス",
            "content" => "私たちの会社はプロフェッショナルな人材を確保しており、的確な提案が可能です。",
            "img" => "./assets/images/man.jpg"
        )
    ) ?>

    <div class="container">
        <div class="row d-flex justify-content-center">
                <?php foreach ($serviceCards as $card): ?>
                    <div class="col-md-4 card m-5 p-0">
                           <img class="card-img-top" src="<?php echo $card["img"]; ?>" alt=""> 
                        <div class="card-title text-center h4 p-4 text-secondary">
                            <?php echo $card["title"]; ?>
                        </div>
                        <div class="card-text m-2 h5 p-4">
                            <?php echo $card["content"]; ?>
                        </div>
                    </div>
                <?php endforeach ?>
        </div>
    </div>
</div>