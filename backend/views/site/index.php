<?php

/* @var $this yii\web\View */
$this->title = 'CORK';
?>
<div id="content" class="main-content">
    <div class="container text-center">
        <h1>Cork Template</h1>
        <br>

        <p>لاستخدام التمبليت .. ما عليك إلا تشغيل المشروع , ويمكنك من خلاله الموقع الرسمي للتمبليت إضافة أي عنصر</p>
        <p>أي صورة موجودة داخل الـ assets/img يمكنك مناداتها من خلال @media مع اسم الصورة</p>
        <img src="<?= Yii::getAlias('@media') . '/01Hive.png' ?>" class="img-fluid mt-3" width="500" alt="01 Hive Logo">
    </div>
</div>