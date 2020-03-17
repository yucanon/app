<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MProgram[]|\Cake\Collection\CollectionInterface $mPrograms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('ユーザ一覧画面へ'), ['controller' => 'MAdmins','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('プログラム新規追加画面へ'), ['controller' => 'MPrograms','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('端末管理一覧画面へ'), ['controller' => 'MTerminals','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mAdmins index large-9 medium-8 columns content">
<p>一覧</p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('受信日時') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ダウンロード') ?></th>
            </tr>
        </thead>
        <tbody>
        <!--配列の値が空であるかを判定-->
        <?php if(count($mPrograms)>0) { ?>
            <?php foreach ($mPrograms as $mProgram): ?>
            <tr>
                <td><?= h($mProgram['rgst']) ?></td>
                <?php $filename = h($mProgram->name); ?>
                <td><a href="/cakephp3/m-programs/download/<?= $filename ?>"><?= h($mProgram->name) ?></a></td>
            </tr>
            <?php endforeach; ?>
        <?php } else { ?>
            <tr>
                <td colspan="2" style = "text-align:center;">データがみつかりませんでした</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
