<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<script>
function imgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("preview");
  var previewImage = document.getElementById("previewImage");
   
  if(previewImage != null) {
    preview.removeChild(previewImage);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}
</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Job Offer'), ['controller' => 'UserJobOffer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Job Offer'), ['controller' => 'UserJobOffer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Picture'), ['controller' => 'UserPicture', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Picture'), ['controller' => 'UserPicture', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
    <?php echo $this->Html->image('/files/Users/image' . DS . $user->id . DS . $user->image,
            ['alt' => 'noimage', 'style'=> 'width:20%; height:20%; border-radius: 10%; margin: 10px auto; text-align:center;']); ?>
        <legend><?= __('マイページ(求人応募情報編集)') ?></legend>
        <div id="preview" style = "width:20%; height:20%; border-radius:10%;"></div>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('image',['label'=> '履歴書写真', 'type'=>'file', 'onChange'=>'imgPreView(event)']);
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('kana');
            echo $this->Form->control('sex');
            echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('phone_number');
            echo $this->Form->control('job');
            echo $this->Form->control('skill');
            echo $this->Form->control('work_style');
            echo $this->Form->control('pr');
            echo $this->Form->control('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('更新')) ?>
    <?= $this->Form->end() ?>
</div>
