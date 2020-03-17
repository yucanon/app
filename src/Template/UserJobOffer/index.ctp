<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $Stores
 */

use Cake\Routing\Router;
?>
<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= __('') ?></h3>

                        <div class="float-left" style="margin-left: -.625rem;">
                            <div class="" style="width: 200px;">
                                <?= $this->Html->link([
                                    $this->Html->tag('i', '', ['class' => 'fas fa-pencil-alt mr-2']),
                                    $this->Html->tag('', __('新規登録')),
                                ],
                                    ['action' => 'add'],
                                    ['class' => 'btn btn-primary', 'escape' => false]
                                ) ?>
                            </div>
                        </div>

                        <!-- Search Form -->

                        
                    </div>
                    <!-- /.card-header -->


                    <!-- /.card-body -->

                    <div class="card-footer">
                        <!-- Pagination -->
                        
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
