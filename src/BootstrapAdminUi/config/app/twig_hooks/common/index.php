<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container): void {
    $container->extension('twig_hooks', [
        'hooks' => [
            'sylius_admin.common.index' => [
                'sidebar' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/common/sidebar.html.twig',
                ],
                'content' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/common/content.html.twig',
                ],
            ],
            'sylius_admin.common.index.content' => [
                'header' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/common/content/header.html.twig',
                ],
                'grid' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/index/content/grid.html.twig',
                ],
            ],
            'sylius_admin.common.index.content.header' => [
                'breadcrumbs' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/index/content/header/breadcrumbs.html.twig',
                ],
                'title_block' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/common/content/header/title_block.html.twig',
                ],
            ],
            'sylius_admin.common.index.content.header.title_block' => [
                'title' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/common/content/header/title_block/title.html.twig',
                ],
                'actions' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/common/content/header/title_block/actions.html.twig',
                ],
            ],
            'sylius_admin.common.index.content.grid' => [
                'data_table' => [
                    'template' => '@SyliusBootstrapAdminUi/shared/crud/index/content/grid/data_table.html.twig',
                ],
            ],
        ],
    ]);
};
