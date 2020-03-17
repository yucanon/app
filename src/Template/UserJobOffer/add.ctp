

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $Store
 */

use App\Model\Entity\Store;
use App\View\AppView;
use Cake\Core\Configure;
use Cake\Routing\Router;

?>
<!-- Content Header (Page header) -->

<!-- Main content -->

    <!-- Flash Message -->
    <?= $this->Flash->render() ?>
    <fieldset>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!--<div class="card-header"></div>-->
                    <!-- /.card-header -->

                    <div class="card-body">
                    <div class="form-group">
                        <?php
                        $occupation = ['販売' => '販売', '飲食店' => '飲食店', 'サービス業' => 'サービス業', '軽作業' => '軽作業', '事務' => '事務', 'モニター' => 'モニター', '在宅ワーク' => '在宅ワーク'];
                    echo $this->Form->control('user_id', ['options' => $occupation, 'empty' => true, 'style' => 'margin-bottom:10px;']);
                    echo $this->Form->control('admin_jobs_id', ['options' => $occupation, 'empty' => true]);
                    echo $this->Form->control('work_experience');
                    echo $this->Form->control('commuting_time');
                    echo $this->Form->control('spause');
                    echo $this->Form->control('support_family');
                    echo $this->Form->control('spause_support_family');
                    echo $this->Form->control('work_style');
            ?>
                    </div></div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <?= $this->Html->link(__('戻る'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                                <?= $this->Form->button(__('保存'), ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </fieldset>
    <?= $this->Form->end() ?>
</section>

