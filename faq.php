<div>
    <div class="h2 m-4 text-center text-danger">
        FAQ
    </div>
    <div class="container">
        <div class="row">
            <!-- FAQ -->
            <?php $faqText = array(
                array(
                    "question" => "物件の内見は可能ですか?",
                    "answer" => "ご希望の物件があれば、不動産会社スタッフが同行の上、内見が可能です。ご希望日時をお知らせください",
                    "id" => "flush-collapseOne"
                ),
                array(
                    "question" => "媒介手数料はかかりますか?",
                    "answer" => "当社の手数料は賃貸物件の場合は入居者負担、売買物件の場合は売主負担となっています。詳細はスタッフにお問い合わせください",
                    "id" => "flush-collapseTwo"
                ),
                array(
                    "question" => "インターネットが利用できる物件はありますか?",
                    "answer" => "ほとんどの賃貸物件ではインターネット回線の引き込みが可能です。端末やプロバイダーの手配は入居者様でお願いします",
                    "id" => "flush-collapseThree"
                ),
                array(
                    "question" => "ペットを飼っているのですが、物件の条件は大丈夫ですか?",
                    "answer" => "ペット相談可の物件も多数ございます。飼育頭数や種類をお聞きし、条件に合った物件をご紹介いたします",
                    "id" => "flush-collapseFour"
                ),
                array(
                    "question" => "火災保険をかける必要がありますか?",
                    "answer" => "火災保険の加入をおすすめしています。保険適用の条件をご説明しますので、お気軽にスタッフまでご相談ください",
                    "id" => "flush-collapseFive"
                )
            ) ?>

            <?php foreach ($faqText as $text): ?>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="h1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $text["id"]; ?>" aria-expanded="false" aria-controls="<?php echo $text["id"]; ?>">
                            <?php echo $text["question"]; ?>
                        </button>
                    </h2>
                    <div id="<?php echo $text["id"]; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php echo $text["answer"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>