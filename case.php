<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="d-flex flex-column align-items-center justify-content-center ">
        <div class="h1 m-5 text-danger">Case</div>
        <div class="h5">初期費用の例</div>
    </div>

    <div class="h3 m-5 p-4 border border-dark">家賃8万円、敷金・礼金・仲介手数料が1ヶ月の場合</div>

    <!-- 費用表 -->
    <?php $cases = array(
        array(
            "title" => "一般的な初期費用",
            "deposit" => "75,000",
            "keyMoney" => "75,000",
            "commissionFee" => "85,000",
            "totalFee" => "23,500",
            "textColor" => "dark"
        ),
        array(
            "title" => "HOME LIFEの初期費用",
            "deposit" => "75,000",
            "keyMoney" => "75,000",
            "commissionFee" => "0",
            "totalFee" => "15,000",
            "textColor" => "danger"
        )
    ) ?>

    <div class=" container">
        <div class="row w-100 d-flex align-items-center justify-content-center">
            <?php foreach ($cases as $case): ?>
                <div class="col-md-5 d-flex flex-column justify-content-center align-items-center h4">
                    <div class="m-4"><?php echo $case["title"]; ?></div>
                    <div class="d-flex m-4 w-75">
                        <div class="bg-secondary-subtle w-50 p-4 d-flex align-items-center justify-content-center">敷金</div>
                        <div class="m-4 h2 d-flex justify-content-center align-items-center  border-bottom border-secondary">
                            <?php echo $case["deposit"]; ?>
                            <div class="h5 d-flex justify-content-center align-items-center m-2">円</div>
                        </div>
                    </div>
                    <div class="d-flex m-4 w-75">
                        <div class="bg-secondary-subtle w-50 p-4 d-flex align-items-center justify-content-center">礼金</div>
                        <div class="m-4 h2 d-flex justify-content-center align-items-center  border-bottom border-secondary">
                            <?php echo $case["keyMoney"]; ?>
                            <div class="h5 d-flex justify-content-center align-items-center m-2">円</div>
                        </div>
                    </div>
                    <div class="d-flex m-4 w-75">
                        <div class="bg-secondary-subtle w-50 p-4 d-flex align-items-center justify-content-center">手数料</div>
                        <div class="m-4 h2  d-flex justify-content-center align-items-center  border-bottom border-secondary  text-<?php echo $case["textColor"]; ?>">
                            <?php echo $case["commissionFee"]; ?>
                            <div class="h5 d-flex justify-content-center align-items-center m-2">円</div>
                        </div>
                    </div>
                    <div class="d-flex m-4 w-75">
                        <div class="bg-secondary-subtle w-50 p-4 d-flex align-items-center justify-content-center">合計</div>
                        <div class="m-4 h2 d-flex justify-content-center align-items-center  border-bottom border-secondary  text-<?php echo $case["textColor"]; ?>">
                            <?php echo $case["totalFee"]; ?>
                            <div class="h5 d-flex justify-content-center align-items-center m-2">円</div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>