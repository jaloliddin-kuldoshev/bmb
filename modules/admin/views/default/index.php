<!-- Start Page Content -->
<div class="row">
    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>568120</h2>
                    <p class="m-b-0">Total Revenue</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>1178</h2>
                    <p class="m-b-0">Sales</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Stores</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>847</h2>
                    <p class="m-b-0">Customer</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>Feedback </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Compnay</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $k = 1;
                        foreach (\app\models\Callback::find()->orderBy(['id' => SORT_DESC])->all() as $item): ?>
                            <tr>
                                <td><?= $k ?></td>
                                <td><?= $item->name ?></td>
                                <td><span><?= $item->comp ?></span></td>
                                <td><span><?= $item->phone ?></span></td>
                                <td><?= $item->email ?></td>
                                <td><?= $item->mes ?></td>
                                <td><a href="<?= \yii\helpers\Url::to(['/admin/callback/delete-home', 'id' => $item->id]) ?>"
                                       title="O`chirish" aria-label="O`chirish"
                                       data-pjax="0" data-confirm="Siz rostdan ham ushbu elementni o`chirmoqchimisiz?"
                                       data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                            <?php $k++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End PAge Content -->