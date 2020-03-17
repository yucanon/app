<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminJob $adminJob
 */
?>
<script>
function mainImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("main_preview");
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

function imgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("sub1_preview");
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
        <li><?= $this->Html->link(__('List Admin Jobs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminJobs form large-9 medium-8 columns content">
    <?= $this->Form->create($adminJob, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Admin Job') ?></legend>
        <?php
        debug($admins['id']);
            //echo $this->Form->control('admins_id', ['options' => $admins, 'empty' => true]);
            echo $this->Form->hidden('admins_id', ['value' => $admins['id']]);
            echo $this->Form->control('main_image',['label'=> '履歴書写真', 'type'=>'file', 'onChange'=>'mainImgPreView(event)']);
            ?>
            <div id="main_preview" style = "width:20%; height:20%; border-radius:10%;"></div>
            <?php
            echo $this->Form->control('sub1_image',['label'=> '履歴書写真', 'type'=>'file', 'onChange'=>'imgPreView(event)']);
            ?>
            <div id="sub1_preview" style = "width:20%; height:20%; border-radius:10%;"></div>
            <?php
            echo $this->Form->control('phone_number');
            echo $this->Form->control('occupation');
            echo $this->Form->control('occupation_detail');
            echo $this->Form->control('area');
            echo $this->Form->control('region');
            echo $this->Form->control('work_period');
            echo $this->Form->control('work_time');
            echo $this->Form->control('holidays');
            echo $this->Form->control('shift_work');
            echo $this->Form->control('hourly_wage');
            echo $this->Form->control('welfare');
            echo $this->Form->control('address');
            echo $this->Form->control('nearest_station');
            echo $this->Form->control('salary_detail');
            echo $this->Form->control('work_time_detail');
            echo $this->Form->control('work_period_detail');
            echo $this->Form->control('holidays_detail');
            echo $this->Form->control('address_detail');
            echo $this->Form->control('contents');
            echo $this->Form->control('introduce_job');
            echo $this->Form->control('merit');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
