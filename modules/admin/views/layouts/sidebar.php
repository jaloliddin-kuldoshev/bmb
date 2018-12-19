<?php
/**
 * Created by PhpStorm.
 * User: Farhodjon
 * Date: 10.03.2018
 * Time: 15:17
 */

use app\modules\admin\widgets\Menu;
use yii\helpers\Url;

?>
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <?php
            try {
                echo Menu::widget([
                    'options' => ['id' => 'sidebarnav'],
                    'submenuTemplate' => "\n<ul aria-expanded='false' class='collapse'>\n{items}\n</ul>\n",
                    'badgeClass' => 'label label-rouded label-primary pull-right',
                    'activateParents' => true,
                    'items' => [
                        [
                            'label' => '',
                            'options' => ['class' => 'nav-devider']
                        ],
                        [
                            'label' => 'Home',
                            'options' => ['class' => 'nav-label']
                        ],
                        [
                            'label' => 'Dashboard',
                            'url' => ['default/index'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                        ],
                        [
                            'label' => 'Страницы',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [

                                [
                                    'label' => 'Слайдер Главная страница',
                                    'url' => ['slider/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Партнеры',
                                    'url' => ['partners/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Сервисы',
                                    'url' => ['services/view', 'id' => 1],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'О нас',
                                    'url' => ['about/view', 'id' => 2],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Отзывы',
                                    'url' => ['review/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Документы',
                                    'url' => ['docs/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                    'items' => [
                                        [
                                            'label' => 'Документы',
                                            'url' => ['docs/index'],
                                            'icon' => '<i class="fa fa-angle-double-right"></i>',

                                        ],
                                        [
                                            'label' => 'Баннер',
                                            'url' => ['image/view', 'id' => 1],
                                            'icon' => '<i class="fa fa-angle-double-right"></i>',

                                        ],
                                    ],
                                ],
                                [
                                    'label' => 'Контакты',
                                    'url' => ['contacts/view', 'id' => 1],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Новости',
                                    'url' => ['news/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                    'items' => [
                                        [
                                            'label' => 'Новости',
                                            'url' => ['news/index'],
                                            'icon' => '<i class="fa fa-angle-double-right"></i>',

                                        ],
                                        [
                                            'label' => 'Баннер',
                                            'url' => ['image/view', 'id' => 2],
                                            'icon' => '<i class="fa fa-angle-double-right"></i>',

                                        ],
                                    ],
                                ],
                                [
                                    'label' => 'Наши представители',
                                    'url' => ['team/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                    'items' => [
                                        [
                                            'label' => 'Наши представители',
                                            'url' => ['team/index'],
                                            'icon' => '<i class="fa fa-angle-double-right"></i>',

                                        ],
                                        [
                                            'label' => 'Баннер',
                                            'url' => ['image/view', 'id' => 3],
                                            'icon' => '<i class="fa fa-angle-double-right"></i>',

                                        ],
                                    ],
                                ],


                            ]
                        ],
                        [
                            'label' => 'Медиаетка',
                            'url' => '#',
                            'icon' => '<i class="fa fa-play-circle"></i>',
                            'items' => [

                                [
                                    'label' => 'Видео',
                                    'url' => ['video/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Фото',
                                    'url' => ['alboum/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Баннер',
                                    'url' => ['image/view', 'id' => 4],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',

                                ],

                            ]
                        ],
                        [
                            'label' => 'Компания',
                            'url' => '#',
                            'icon' => '<i class="fa fa-database"></i>',
                            'items' => [
                                [
                                    'label' => 'Компания',
                                    'url' => Url::to(['company/index']),
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Работники компании',
                                    'url' => ['workers/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Баннер',
                                    'url' => ['image/view', 'id' => 5],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',

                                ],
                                [
                                    'label' => 'Проекты',
                                    'url' => ['projects/view', 'id' => 3],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],


                            ]
                        ],
                    ]
                ]);
            } catch (Exception $e) {
            }

            ?>
        </nav>
    </div>
</div>
