<?php

use hipanel\modules\finance\widgets\AvailableMerchants;

$this->title = 'Политика возврата средств';

?>

<p>
    <?= AvailableMerchants::widget() ?>
</p>

<p>
    Возврат излишне перечисленных денежных средств производится тем же способом, на те же реквизиты с которых была произведена оплата. Запрос на возврат средств отправляется через тикет систему личного кабинета. Запрос обрабатывается в течение 10 рабочих дней
</p>

