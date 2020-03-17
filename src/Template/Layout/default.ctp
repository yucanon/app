<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\ORM\TableRegistry;
$cakeDescription = 'Life Choice';

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        
    </title>
    <?= $this->Html->meta('icon') ?>

<?= $this->Html->css('//use.fontawesome.com/releases/v5.8.2/css/all.css') ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('adminlte.min.css') ?>
<?= $this->Html->css('admin_style.css') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<?php if ($this->name !== 'Admins' && $this->name !== 'AdminJobs' && $this->name !== 'AdminFunerals' && $this->name !== 'AdminNursingHomes') { ?>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">ブランド</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">ホーム <span class="sr-only">(現位置)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">リンク1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">リンク2</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">ドロップダウン</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">メニュー1</a>
            ...
            </div><!-- ./dropdown-menu -->
        </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </nav>
    <?= $this->Flash->render() ?>

<div class="row">
  <?= $this->fetch('content') ?>
</div>
</body>
<?php } else { ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link"></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="javascript:void(0);" class="brand-link">
      <span class="brand-text-disp-collapse">CP3</span>
      <span class="brand-text font-weight-light brand-text-disp-open" style = "display:block; text-align:center;">管理画面</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php if($this->request->getSession()->read('Auth.Admin')) { ?>
            <?php //求人管理者(roleが1)の場合
            if(!empty(TableRegistry::getTableLocator()->get('Admins')->find()->where(['id' => $this->request->getSession()->read('Auth.Admin')['id'], 'role' => '1'])->first())) {
              $exsist_adminjobs = TableRegistry::getTableLocator()->get('AdminJobs')->find()->where(['admins_id' => $this->request->getSession()->read('Auth.Admin')['id']])->first();
              if(empty($exsist_adminjobs)) { ?>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminJobs', 'action' => 'add']) ?>" class="nav-link<?php if ($this->name == '新求人作成') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>新求人作成</p></a></li>
              <?php } else { ?>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminJobs', 'action' => 'create', $exsist_adminjobs->id]) ?>" class="nav-link<?php if ($this->name == '求人編集') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>求人編集</p></a></li>
              <?php } ?>
              <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminJobs', 'action' => 'index']) ?>" class="nav-link<?php if ($this->name == '作成求人') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>作成求人</p></a></li>
            <?php } ?>

            <?php //老人ホーム管理者(roleが2)の場合
            if(!empty(TableRegistry::getTableLocator()->get('Admins')->find()->where(['id' => $this->request->getSession()->read('Auth.Admin')['id'], 'role' => '2'])->first())) {
              $exsist_admin_nursing_homes = TableRegistry::getTableLocator()->get('AdminNursingHomes')->find()->where(['admins_id' => $this->request->getSession()->read('Auth.Admin')['id']])->first();
              if(empty($exsist_admin_nursing_homes)) { ?>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminNursingHomes', 'action' => 'add']) ?>" class="nav-link<?php if ($this->name == '新老人ホーム入居者募集作成') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p style = "font-size:14px;">老人ホーム入居者募集作成</p></a></li>
              <?php } else { ?>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminNursingHomes', 'action' => 'create', $exsist_admin_nursing_homes->id]) ?>" class="nav-link<?php if ($this->name == '老人ホーム入居者募集編集') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p style = "font-size:14px;">老人ホーム入居者募集編集</p></a></li>
              <?php } ?>
              <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminNursingHomes', 'action' => 'index']) ?>" class="nav-link<?php if ($this->name == '作成老人ホーム入居者募集') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p style = "font-size:14px;">作成老人ホーム入居者募集</p></a></li>
            <?php } ?>

            <?php //葬儀管理者(roleが3)の場合
            if(!empty(TableRegistry::getTableLocator()->get('Admins')->find()->where(['id' => $this->request->getSession()->read('Auth.Admin')['id'], 'role' => '3'])->first())) {
              $exsist_admin_funerals = TableRegistry::getTableLocator()->get('AdminFunerals')->find()->where(['admins_id' => $this->request->getSession()->read('Auth.Admin')['id']])->first();
              if(empty($exsist_admin_funerals)) { ?>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminFunerals', 'action' => 'add']) ?>" class="nav-link<?php if ($this->name == '新葬儀募集作成') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>新葬儀募集作成</p></a></li>
              <?php } else { ?>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminFunerals', 'action' => 'create', $exsist_admin_funerals->id]) ?>" class="nav-link<?php if ($this->name == '葬儀募集編集') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>葬儀募集編集</p></a></li>
              <?php } ?>
              <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'adminFunerals', 'action' => 'index']) ?>" class="nav-link<?php if ($this->name == '作成葬儀募集') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>作成葬儀募集</p></a></li>
            <?php } ?>

            <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'Admins', 'action' => 'mypage']) ?>" class="nav-link<?php if ($this->name == '管理者情報') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>管理者情報</p></a></li>
          <li class="nav-item"><a href="<?= $this->Url->build(['controller' => 'Admins', 'action' => 'logout']) ?>" class="nav-link<?php if ($this->name == 'ログアウト') { ?> active<?php } ?>"><i class="fas fa-user mr-3"></i><p>ログアウト</p></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </aside>


  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">

        <?= $this->Flash->render() ?>

        <div class="row">
          <?= $this->fetch('content') ?>
        </div>
      </div>
    </div>
  </div>
        </body>
<?php } ?>
    <footer>
    </footer>
    <?= $this->Html->script('jquery-3.4.1.min.js') ?>
<?= $this->Html->script('bootstrap.bundle.min.js') ?>
<?= $this->Html->script('adminlte.min.js') ?>
<?= $this->Html->script('adminlte_layout_customize.js') ?>
<?= $this->Html->script('admin_script.js') ?>
<?= $this->Html->script('image-preview.js') ?>
<?= $this->Html->script('jquery.japan-map.min.js') ?>
<?= $this->fetch('script') ?>
</html>
