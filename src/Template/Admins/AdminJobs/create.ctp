<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminJob $adminJob
 */

use Cake\Core\Configure;
?>
<style>
.image-set {
  height:200px; width:300px; border-radius: 10%; margin: 15px auto; text-align:center;
}
.image-unset {
  width:300px; margin-bottom: 20px;
}
</style>

<div class="adminJobs form large-9 medium-8">
    <?= $this->Form->create($adminJob, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('求人作成/編集画面') ?></legend>
        <?php echo $this->Form->hidden('admins_id', ['value' => $admins['id']]); ?>
        <div class="large-6 medium-6">
        <?php if(isset($adminJob->main_image)) { 
          echo $this->Form->label('main_image', '求人メイン画像');
          echo $this->Html->image('/files/AdminJobs/main_image' . DS . $adminJob->id . DS . $adminJob->main_image, ['alt' => 'noimage', 'class'=> 'image-set']);
        } else {
          echo $this->Form->control('main_image',['label'=> '求人メイン画像（アップロード必須です）', 'type'=>'file', 'onChange'=>'mainImgPreView(event)']);
          ?>
          <div id="main_preview" class = "image-unset"></div>
        <?php } ?>
        </div>
        <div class="large-6 medium-6">
        <?php if(isset($adminJob->sub1_image)) {
          echo $this->Form->label('sub1_image', '求人サブ画像１');
          echo $this->Html->image('/files/AdminJobs/sub1_image' . DS . $adminJob->id . DS . $adminJob->sub1_image, ['alt' => 'noimage', 'class'=> 'image-set']);
        } else {
          echo $this->Form->control('sub1_image',['label'=> '求人サブ画像１（アップロード必須です）', 'type'=>'file', 'onChange'=>'sub1ImgPreView(event)']);
        ?>
        <div id="sub1_preview" class = "image-unset"></div>
        <?php } ?>
        </div>
        <div class="large-6 medium-6">
        <?php if(isset($adminJob->sub2_image)) {
          echo $this->Form->label('sub2_image', '求人サブ画像２');
          echo $this->Html->image('/files/AdminJobs/sub2_image' . DS . $adminJob->id . DS . $adminJob->sub2_image, ['alt' => 'noimage', 'class'=> 'image-set']);
        } else {
          echo $this->Form->control('sub2_image',['label'=> '求人サブ画像２', 'type'=>'file', 'onChange'=>'sub2ImgPreView(event)']);
        ?>
        <div id="sub2_preview" class = "image-unset"></div>
        <?php } ?>
        </div>
        <div class="large-6 medium-6">
        <?php if(isset($adminJob->sub3_image)) {
          echo $this->Form->label('sub3_image', '求人サブ画像３');
          echo $this->Html->image('/files/AdminJobs/sub3_image' . DS . $adminJob->id . DS . $adminJob->sub3_image, ['alt' => 'noimage', 'class'=> 'image-set']);
        } else {
          echo $this->Form->control('sub3_image',['label'=> '求人サブ画像３', 'type'=>'file', 'onChange'=>'sub3ImgPreView(event)']);
        ?>
        <div id="sub3_preview" class = "image-unset"></div>
        <?php } ?>
        </div>
        <?php
            echo $this->Form->control('phone_number', ['label'=> '電話番号']);
            echo $this->Form->control('occupation', ['label'=> '職種分類', 'type' => 'select', 'options' => Configure::read('occupation'), 'style' => 'margin-bottom:20px;']);
            echo $this->Form->control('occupation_detail', ['placeholder'=>'例::物流', 'label'=> '職種（職種分類が軽作業であれば物流、ドライバーなど）']);
            echo $this->Form->control('area', ['label'=> '働く都道府県', 'type' => 'select', 'options' => Configure::read('prefecture'), 'style' => 'margin-bottom:20px;']);
            echo $this->Form->control('region', ['placeholder'=>'例::渋谷区', 'label'=> '働く地域（市町村区を〇〇区や〇〇市まで入力してください）']);
            echo $this->Form->control('work_period', ['label'=> '勤務期間', 'type' => 'select', 'options' => Configure::read('work_period')]);
            echo $this->Form->control('work_time', ['label'=> '勤務時間', 'type' => 'select', 'options' => Configure::read('work_time')]);
            echo $this->Form->control('holidays', ['label'=> '休日', 'type' => 'select', 'options' => Configure::read('holidays')]);
            echo $this->Form->control('shift_work', ['label'=> 'シフト（提出法/週）', 'type' => 'select', 'options' => Configure::read('shift_work')]);
            echo $this->Form->control('hourly_wage', ['label'=> '給与', 'type' => 'select', 'options' => Configure::read('hourly_wage')]);
            echo $this->Form->control('welfare', ['label'=> '待遇/福利厚生', 'type' => 'select', 'options' => Configure::read('welfare')]);
            echo $this->Form->control('address', ['label'=> '勤務先住所', 'placeholder'=>'例::東京都渋谷区渋谷1-1']);
            echo $this->Form->control('nearest_station', ['label'=> '最寄駅', 'placeholder'=>'例::東京駅']);
            if(empty($adminJob->catchcopy)) {
              echo $this->Form->control('catchcopy', ['label'=> 'キャッチコピー', 'type' => 'textarea', 'value' => '例::初めて歓迎！先輩スタッフがサポート！研修があって安心♦️']);
            } else {
              echo $this->Form->control('catchcopy', ['label'=> 'キャッチコピー', 'type' => 'textarea', 'placeholder' => '例::初めて歓迎！先輩スタッフがサポート！研修があって安心♦️']);
            }
            if(empty($adminJob->contents)) {
              echo $this->Form->control('contents', ['label'=> 'サブタイトル', 'type' => 'textarea', 'value' => '例::初めてという方は多くいますので「私だけ」と不安になる心配なし！！']);
            } else {
              echo $this->Form->control('contents', ['label'=> 'サブタイトル', 'type' => 'textarea', 'placeholder' => '例::初めてという方は多くいますので「私だけ」と不安になる心配なし！！']);
            }
            if(empty($adminJob->salary_detail)) {
              echo $this->Form->control('salary_detail', ['label'=> '給与/交通費詳細', 'type' => 'textarea',
              'value'=>'例::週払い/月払いで選択可能
              [週払い]木曜日締めの金曜日払い *現金/振込
              [月払い]月末締めの翌月10日払い *振込のみ
              *残業の場合は8時間以上勤務で1.25%
              *22:00~以降の場合は時給が〇〇円
              ♦️電車の場合♦️']);
            } else {
              echo $this->Form->control('salary_detail', ['label'=> '給与/交通費詳細', 'type' => 'textarea', 
              'placeholder'=>'例::週払い/月払いで選択可能
              [週払い]木曜日締めの金曜日払い *現金/振込
              [月払い]月末締めの翌月10日払い *振込のみ
              *残業の場合は8時間以上勤務で1.25%
              *22:00~以降の場合は時給が〇〇円
              ♦️電車の場合♦️']);
            }
            echo $this->Form->control('work_time_detail', ['label'=> '勤務時間詳細', 'type' => 'textarea']);
            echo $this->Form->control('work_period_detail', ['label'=> '勤務期間詳細', 'type' => 'textarea']);
            echo $this->Form->control('holidays_detail', ['label'=> '休日/休暇詳細', 'type' => 'textarea']);
            echo $this->Form->control('address_detail', ['label'=> '勤務地詳細', 'type' => 'textarea']);
            echo $this->Form->control('introduce_job', ['label'=> '仕事内容紹介詳細', 'type' => 'textarea']);
            echo $this->Form->control('merit', ['label'=> 'メリット', 'type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('作成/編集')) ?>
    <?= $this->Form->end() ?>
</div>
