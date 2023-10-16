<div class="m-5 d-flex flex-column justify-content-center align-items-center">
    <div class="h1 m-5 text-danger">
        About
    </div>
    <div class="h3 m-4 w-75 d-flex align-items-center justify-content-center">
        私たちの使命は、お客様の夢の住まいを現実にすることです。<br>
        質の高い不動産ソリューションを提供し、お客様の満足度を最優先に考えます。<br>
        不動産の取引は大きな決断であり、私たちはその重要性を理解し、<br>
        お客様が自信を持って進むお手伝いをします。
    </div>

    <div class="d-flex w-100">
        <!-- カード -->
        <?php $aboutCards = array(
            array(
                "num" => 1,
                "title" => "信頼性",
                "content" => "私たちは誠実かつ信頼性のあるパートナーであり、お客様の信頼を守ることを最優先に考えます。"
            ),
            array(
                "num" => 2,
                "title" => "専門知識",
                "content" => "私たちのエージェントは不動産業界における専門知識を持ち、地元市場に精通しています。"
            ),
            array(
                "num" => 3,
                "title" => "顧客中心",
                "content" => "お客様のニーズを理解し、そのニーズに合致する最適な不動産ソリューションを提供します。"
            ),

        ) ?>

        <?php foreach ($aboutCards as $card): ?>
         <div class="card m-4 d-flex flex-column align-items-center" style="width:28rem">
            <div class="card-img-top h2 w-100 d-flex justify-content-center align-items-center bg-danger" style="height: 4rem;">
                <?php echo $card["num"]; ?>
            </div>
            <div class="card-title h2 m-4" >
                <?php echo $card["title"]; ?>
            </div>
            <div class="card-text h5 p-4">
                <?php echo $card["content"]; ?>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>