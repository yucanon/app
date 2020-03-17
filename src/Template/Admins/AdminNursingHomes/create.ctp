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

function sub1ImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("sub1_preview");
  var previewImage1 = document.getElementById("previewImage1");
   
  if(previewImage1 != null) {
    preview.removeChild(previewImage1);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage1");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}

function sub2ImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("sub2_preview");
  var previewImage2 = document.getElementById("previewImage2");
   
  if(previewImage2 != null) {
    preview.removeChild(previewImage2);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage2");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}

function sub3ImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("sub3_preview");
  var previewImage3 = document.getElementById("previewImage3");
   
  if(previewImage3 != null) {
    preview.removeChild(previewImage3);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage3");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}
</script>
<div class="adminJobs form large-9 medium-8">
    <?= $this->Form->create($adminJob, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('求人作成/編集画面') ?></legend>
        <?php
            echo $this->Form->hidden('admins_id', ['value' => $admins['id']]);
            if(isset($adminJob->main_image)) {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->label('main_image', '求人メイン画像');
                echo $this->Html->image('/files/AdminJobs/main_image' . DS . $adminJob->id . DS . $adminJob->main_image,
                ['alt' => 'noimage', 'style'=> 'height:200px; width:300px; border-radius: 10%; margin: 15px auto; text-align:center;']);
                ?>
              </div>
              <?php
            } else {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->control('main_image',['label'=> '求人メイン画像（アップロード必須です）', 'type'=>'file', 'onChange'=>'mainImgPreView(event)']);
                ?>
                <div id="main_preview" style = "height:200px; width:300px; margin-bottom: 20px;"></div>
              </div>
              <?php
            }
            if(isset($adminJob->sub1_image)) {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->label('sub1_image', '求人サブ画像１');
                echo $this->Html->image('/files/AdminJobs/sub1_image' . DS . $adminJob->id . DS . $adminJob->sub1_image,
                ['alt' => 'noimage', 'style'=> 'height:200px; width:300px; border-radius: 10%; margin: 15px auto; text-align:center;']);
                ?>
                </div>
                <?php
            } else {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->control('sub1_image',['label'=> '求人サブ画像１（アップロード必須です）', 'type'=>'file', 'onChange'=>'sub1ImgPreView(event)']);
                ?>
              <div id="sub1_preview" style = "height:200px; width:300px; margin-bottom: 20px;"></div>
              </div>
              <?php
            }
            if(isset($adminJob->sub2_image)) {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->label('sub2_image', '求人サブ画像２');
                echo $this->Html->image('/files/AdminJobs/sub2_image' . DS . $adminJob->id . DS . $adminJob->sub2_image,
                ['alt' => 'noimage', 'style'=> 'height:200px; width:300px; border-radius: 10%; margin: 15px auto; text-align:center;']);
                ?>
                </div>
                <?php
            } else {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->control('sub2_image',['label'=> '求人サブ画像２', 'type'=>'file', 'onChange'=>'sub2ImgPreView(event)']);
                ?>
              <div id="sub2_preview" style = "height:200px; width:300px; margin-bottom: 20px;"></div>
              </div>
              <?php
            }
            if(isset($adminJob->sub3_image)) {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->label('sub3_image', '求人サブ画像３');
                echo $this->Html->image('/files/AdminJobs/sub3_image' . DS . $adminJob->id . DS . $adminJob->sub3_image,
                ['alt' => 'noimage', 'style'=> 'height:200px; width:300px; border-radius: 10%; margin: 15px auto; text-align:center;']);
                ?>
                </div>
                <?php
            } else {
              ?>
              <div class="large-6 medium-6">
                <?php
                echo $this->Form->control('sub3_image',['label'=> '求人サブ画像３', 'type'=>'file', 'onChange'=>'sub3ImgPreView(event)']);
                ?>
              <div id="sub3_preview" style = "height:200px; width:300px; margin-bottom: 20px;"></div>
              </div>
              <?php
            }
            echo $this->Form->control('phone_number', ['label'=> '電話番号']);
            $occupation = ['販売' => '販売', '飲食店' => '飲食店', 'サービス業' => 'サービス業', '軽作業' => '軽作業', '事務' => '事務', 'モニター' => 'モニター', '在宅ワーク' => '在宅ワーク'];
            echo $this->Form->control('occupation', ['label'=> '職種分類', 'type' => 'select', 'options' => $occupation, 'style' => 'margin-bottom:20px;']);
            echo $this->Form->control('occupation_detail', ['placeholder'=>'例::物流', 'label'=> '職種（職種分類が軽作業であれば物流、ドライバーなど）']);
            $prefecture = ['北海道' => '北海道', '青森県' => '青森県', '岩手県' => '岩手県', '宮城県' => '宮城県', '秋田県' => '秋田県','山形県' => '山形県', '福島県' => '福島県', '茨城県' => '茨城県', '栃木県' => '栃木県', 
            '群馬県' => '群馬県', '埼玉県' => '埼玉県', '千葉県' => '千葉県', '東京都' => '東京都', '神奈川県' => '神奈川県', '新潟県' => '新潟県','富山県' => '富山県', '石川県' => '石川県', '福井県' => '福井県', '山梨県' => '山梨県', 
            '長野県' => '長野県', '岐阜県' => '岐阜県', '静岡県' => '静岡県', '愛知県' => '愛知県', '三重県' => '三重県', '滋賀県' => '滋賀県','京都府' => '京都府', '大阪府' => '大阪府', '兵庫県' => '兵庫県', '奈良県' => '奈良県', 
            '和歌山県' => '和歌山県', '鳥取県' => '鳥取県', '島根県' => '島根県', '岡山県' => '岡山県', '広島県' => '広島県', '山口県' => '山口県','徳島県' => '徳島県', '香川県' => '香川県', '愛媛県' => '愛媛県', '高知県' => '高知県', 
            '福岡県' => '福岡県', '佐賀県' => '佐賀県', '長崎県' => '長崎県', '熊本県' => '熊本県', '大分県' => '大分県', '宮崎県' => '宮崎県', '鹿児島県' => '鹿児島県', '沖縄県' => '沖縄県'];
            echo $this->Form->control('area', ['label'=> '働く都道府県', 'type' => 'select', 'options' => $prefecture, 'style' => 'margin-bottom:20px;']);
            echo $this->Form->control('region', ['placeholder'=>'例::渋谷区', 'label'=> '働く地域（市町村区を〇〇区や〇〇市まで入力してください）']);
            $work_period = ['短期(一ヶ月未満)' => '短期(一ヶ月未満)', '短期(三ヶ月程度)' => '短期(三ヶ月程度)', '短期(六ヶ月未満)' => '短期(六ヶ月未満)', '長期(六ヶ月以上)' => '長期(六ヶ月以上)', '長期(一年以上)' => '長期(一年以上)'];
            echo $this->Form->control('work_period', ['label'=> '勤務期間', 'type' => 'select', 'options' => $work_period]);
            $work_time = ['全時間帯勤務可能なお仕事' => '全時間帯勤務可能なお仕事', '深夜以外の全時間帯勤務可能なお仕事' => '深夜以外の全時間帯勤務可能なお仕事', '早朝勤務のお仕事' => '早朝勤務のお仕事', '午前勤務のお仕事' => '午前勤務のお仕事', '午後勤務のお仕事' => '午後勤務のお仕事', '深夜勤務のお仕事' => '深夜勤務のお仕事'];
            echo $this->Form->control('work_time', ['label'=> '勤務時間', 'type' => 'select', 'options' => $work_time]);
            $holidays = ['シフト制のため休日不定期' => 'シフト制のため休日不定期', '土日祝完全休み' => '土日祝完全休み', '定休日は休み' => '定休日は休み'];
            echo $this->Form->control('holidays', ['label'=> '休日', 'type' => 'select', 'options' => $holidays]);
            $shift_work = ['週一未満' => '週一未満', '週一' => '週一', '週二' => '週二', '週三' => '週三', '週四' => '週四', '週五' => '週五', '週五以上' => '週五以上'];
            echo $this->Form->control('shift_work', ['label'=> 'シフト（提出法/週）', 'type' => 'select', 'options' => $shift_work]);
            $hourly_wage = ['時給1500円以上' => '時給1500円以上', '時給1300円以上' => '時給1300円以上', '時給1200円以上' => '時給1200円以上', '時給1100円以上' => '時給1100円以上', '時給1000円以上' => '時給1000円以上', '時給900円以上' => '時給900円以上', '時給790円以上' => '時給790円以上'];
            echo $this->Form->control('hourly_wage', ['label'=> '給与', 'type' => 'select', 'options' => $hourly_wage]);
            $welfare = ['交通費支給' => '交通費支給', '場合により交通費支給' => '場合により交通費支給', '皆勤手当、交通費支給' => '皆勤手当、交通費支給', 'その他' => 'その他'];
            echo $this->Form->control('welfare', ['label'=> '待遇/福利厚生', 'type' => 'select', 'options' => $welfare]);
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
