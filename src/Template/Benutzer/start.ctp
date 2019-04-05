<?= $this->element('nav') ?>
<div class="jumbotron text-center intro" style="min-height: 60vh; background-image: url(https://www.domusweb.it/content/dam/domusweb/en/news/2014/08/19/park_associates_anti_office/00-anti-office.jpg.foto.rbig.jpg)">

    <a class="im_start" href="#myPage">
        <?= $this->Html->image('web_hi_res_512.png', ['alt' => 'Kamer Jobs Logo', 'height' => '320', 'width' => '320', 'class' => 'im_start']); ?>
    </a>
</div>


<div class="container text-center">

    <?= $this->Form->create(null, ['type' => 'get', 'url' => ['controller' => 'jobs', 'action' => 'search']]) ?>
        <input type="text" placeholder="Was suchen Sie?" name="stichwort"/>
        <input type="text" placeholder="Wo?" name="ort"/>
        <input type="submit" value="Suchen"/>
    <?= $this->Form->end() ?>
</div>
