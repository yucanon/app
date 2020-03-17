<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminJob[]|\Cake\Collection\CollectionInterface $adminJobs
 */
?>
<style>
@media (min-width: 990px) {
/* 990px以上の幅の場合に適応される */
    .test {
        display: flex; 
        justify-content: space-between;
        margin: 2em auto;  
        padding: 1em;
        width: 90%;
        border: 2px solid #ccc;
        border-radius: 8px;
    }
    .box {
        margin: 2em auto;
        padding: 1em;
        width: 90%;
        border: 5px double black;
        color: black;
        background-color: #fff;
        border-radius: 1px;
    }
    .flex {
        display: flex; 
        justify-content: space-between;
        text-align: center;
    }
    .a {
        margin: 10px;  
        padding: 1em;
        width: 100%;
        border: 2px solid #ccc;
        border-radius: 8px;
    }
    .adminjob-content {
        margin-top:20px;
        margin-left:30px;
    }
}
@media (max-width: 990px) {
    .test {
        display: flex;
        flex-direction: column;
        margin: 2em auto;  
        padding: 1em;
        width: 100%;
        border: 2px solid #ccc;
        border-radius: 8px;
    }
    .box {
        margin: 2em auto;
        padding: 1em;
        width: 100%;
        border: 5px double black;
        color: black;
        background-color: #fff;
        border-radius: 1px;
        font-size: 13px;
    }
    .catchcopy {
        font-size: 13px;
    }
    .flex {
        display: flex; 
        justify-content: space-between;
        font-size: 10px;
        text-align: center;
    }
    .a {
        margin: 10px;  
        padding: 1em;
        width: 100%;
        border: 2px solid #ccc;
        border-radius: 8px;
    }
    .adminjob-content {
        margin-top:20px;
    }
}

</style>
<?php 
//スマホ判定関数
function issmartphone() {
    $sp = $_SERVER['HTTP_USER_AGENT'];
    $sp_list = array('iPhone','iPad','iPod','Android');
    foreach ($sp_list as $spl) {
        //ユーザーエージェントがスマホである場合trueを返す
        if (strpos($sp, $spl) !== false) {
            return true;
        }
    }
}
?>
<div class="adminJobs index large-12">
    <h3><?= __('作成求人') ?></h3>
    <?php foreach ($adminJobs as $adminJob): ?>
        <div class = "test"><a href="<?= $this->Url->build(['controller' => 'adminJobs', 'action' => 'view', $adminJob->id]) ?>">
        <div class="col-lg-12 col-md-12 col-sm-12" style = "margin-bottom: 20px; top: 0; bottom: 0; left: 0; right: 0; margin: auto;">
        <?php if(issmartphone() == false) { ?>
        <?= $this->Html->image('/files/AdminJobs/main_image' . DS . $adminJob->id . DS . $adminJob->main_image,
        ['alt' => '', 'style'=> 'border-radius: 10%; display:block; height:200px; width:300px; margin:auto auto 20px;']); ?></td>
        <?= $this->Html->image('/files/AdminJobs/sub1_image' . DS . $adminJob->id . DS . $adminJob->sub1_image,
        ['alt' => '', 'style'=> 'border-radius: 10%; margin-top:15px; display:block; height:200px; width:300px; margin:auto']); ?></td>
        <?php } else { ?>
        <?= $this->Html->image('/files/AdminJobs/main_image' . DS . $adminJob->id . DS . $adminJob->main_image,
        ['alt' => '', 'style'=> 'border-radius: 10%; display:block; height:150px; width:225px; margin: auto auto -20px;']); ?></td>
        <?php } ?>
        </div>
        <div class="col-lg-7 col-sm-12 col-sm-12 adminjob-content">
        <tbody>
            <tr>
            <?php if(issmartphone() == false) { ?>
            <div style = "color:black; text-align: center; width: 100%; display: inline-block;"><td><?= h($adminJob->catchcopy) ?></td></div>
            <div class ="box">
                <td><?= h($adminJob->contents) ?></td><br><br>
                <td>時給: <?= h($adminJob->hourly_wage) ?></td><br>
                <td>時間: <?= h($adminJob->work_time) ?></td><br>
                <td>勤務先: <?= h($adminJob->address) ?></td><br>
                <td>最寄駅: <?= h($adminJob->nearest_station) ?></td>
            </div>
            <div class = "flex">
            <?= $this->Html->link(__('編集'), ['action' => 'create', $adminJob->id], ['class' => 'button a', 'style' => 'color: black; background-color:white;']) ?>
                <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $adminJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminJob->id), 'class' => 'button a', 'style' => 'color: black; background-color:white;']) ?>
            </div>
            <?php } else {?>
            <div class ="box">
            <div class = "catchcopy"><td><?= h($adminJob->catchcopy) ?></td></div><br>
                <td>時給: <?= h($adminJob->hourly_wage) ?></td><br>
                <td>時間: <?= h($adminJob->work_time) ?></td><br>
                <td>勤務先: <?= h($adminJob->address) ?></td><br>
                <td>最寄駅: <?= h($adminJob->nearest_station) ?></td>
            </div>
            <div class = "flex">
                <?= $this->Html->link(__('編集'), ['action' => 'create', $adminJob->id], ['class' => 'button a', 'style' => 'color: black; background-color:white;']) ?>
                <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $adminJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminJob->id), 'class' => 'button a', 'style' => 'color: black; background-color:white;']) ?>
            </div>
            <?php } ?>
        </div>
    </a></div>
    <?php endforeach; ?>
    <?php if(count($adminJobs) !== 0){ ?>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    <?php } else { ?>
        <div>
        <div class="alert alert-info" style = "text-align:center">
        <?php if(issmartphone() == false) { ?>
            <h5><i class="icon fas fa-info"></i><?= __('求人はまだ作成されていません。左のナビゲーションバーから求人を作成してください') ?></h5>
        <?php } else { ?>
            <h5><i class="icon fas fa-info"></i><?= __('求人はまだ作成されていません。左上のナビゲーションバーを押して求人を作成してください') ?></h5>
        <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>
