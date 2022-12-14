<?php require admin_view('static/header') ?>

    <div class="content">

    <div class="box-">
        <h1>
            Üyeler
            <!--                <a href="#">Add New</a>-->
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Kullanıcı Adı</th>
                <th class="hide">e-posta</th>
                <th class="hide">Kayıt Tarihi</th>
                <th class="hide">Rütbe</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row): ?>
                <tr>
                    <td>
                        <a href="<?php echo admin_url('edit-user?id=' . $row['user_id']) ?>" class="title">
                            <?php echo $row['user_name'] ?>
                        </a>
                    </td>
                    <td class="hide">
                        <?php echo $row['user_email'] ?>
                    </td>
                    <td class="hide">
                        <?php echo $row['user_date'] ?>
                    </td>
                    <td class="hide">
                        <?php echo user_ranks($row['user_rank'])   ?>
                    </td>
                    <td>
                        <a href="<?php echo admin_url('edit-user?id=' . $row['user_id']) ?>" class="btn"> Düzenle </a>
                        <a onclick="return confirm('Silme işlemine devam etmek istiyor musunuz?')"
                           href="<?= admin_url('delete?table=users&column=user_id&id=' . $row['user_id']) ?>"
                           class="btn"> Sil </a>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php if ($totalRecord > $pageLimit): ?>
    <div class="pagination">
        <ul>
            <?php echo $db->showPagination(admin_url(route(1) . '?' . $pageParam . '=[page]')); ?>
        </ul>
    </div>
<?php endif; ?>
<?php require admin_view('static/footer') ?>