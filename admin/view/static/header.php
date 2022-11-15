<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <title>AhmetHan</title>
    <link rel="stylesheet" href="<?= admin_public_url('styles/main.css?v=' . time()) ?>">
    <script src="<?= admin_public_url('scripts/jquery-1.12.2.min.js') ?>"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= admin_public_url('scripts/admin.js') ?>"></script>
    <style>
        .menu-container .handle {
            width: 15px;
            height: 15px;
            background: #ccc;
            position: absolute;
            top: 15px;
            right: -15px;
            cursor: move;
        }

        .menu-container form > ul li {
            background: #f5f5f5;
            overflow: inherit;
        }

        .menu-container form > ul li.ui-sortable-helper {
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, .2);
        }

        .ui-sortable-placeholder {
            background: #f7ffd8 !important;
            visibility: visible !important;
        }
    </style>
</head>
<body>
<?php if (session('user_rank') && session('user_rank') != 3): ?>

<div class="navbar">
    <ul dropdown>
        <li>
            <a href="#">
                <span class="fa fa-home"></span>
                <span class="title">
            <?php echo setting('title') ?>
        </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-comment"></span>

            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-plus"></span>
                <span class="title">New</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        New Post
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Page
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Category
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="sidebar">
    <ul>
        <?php foreach ($menus as $mainUrl => $menu): ?>
            <li class="<?= (route(1) == $mainUrl) || isset($menu['submenu'][route(1)]) ? 'active' : null ?>">
                <a href="<?= admin_url($mainUrl) ?>">
                    <span class="fa fa-<?= $menu['icon'] ?>"></span>
                    <span class="title">
                        <?= $menu['title'] ?>
                    </span>
                </a>
                <?php if (isset($menu['submenu'])): ?>
                    <ul class="sub-menu">
                        <?php foreach ($menu['submenu'] as $url => $title): ?>
                            <li>
                                <a href="<?= admin_url($url) ?>">
                                    <?= $title ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
        <li class="line">
            <span></span>
        </li>
        <li>
            <form id="logout" action="<?php echo site_url('admin/logout') ?>" method="POST">
                <input type="hidden" hidden name="action" value="logout"/>
                <button form="logout"
                        type="submit"
                        style="width: calc(100% - 20px); margin: 10px; background-color:indianred; border: none; text-shadow: none; box-shadow: none; -webkit-box-shadow:none;"
                >
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Çıkış Yap
                </button>
            </form>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
    Collapse menu
</span>
    </a>
</div>
<div class="content">
    <?php if (isset($error)): ?>
        <div class="message error box">
            <?php echo $error ?>
        </div>
    <?php endif; ?>
    <?php endif; ?>
