<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('news_message'); ?>

<div class="news flex-column">
    <?php if (count($data['news']) > 0) : ?>
        <h4>All news</h4>
        <ul>
            <?php
            foreach ($data['news'] as $news) : ?>
                <li class="news-item flex-center universal-size">
                    <div class="news-info">
                        <span class="news-info-title"><?= $news->title ?></span>
                        <span class="news-info-description"> <?= $news->description ?></span>
                    </div>
                    <div class="news-actions flex-center ">
                        <a class="btn-edit" href="<?= URLROOT ?>/news/edit/<?= $news->id ?>"></a>
                        <form action="<?= URLROOT ?>/news/delete/<?= $news->id ?>" method="POST"><button class="btn-delete" type="submit">Delete</button></form>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="news-form">
        <?php if (isset($data['id'])) : ?>
            <div class="edit-header flex-center">
                <h4>Edit news</h4>
                <a class="close-edit" href="<?= URLROOT ?>/news">Back</a>
            </div>
            <form class="flex-column" action="<?= URLROOT ?>/news/edit/<?= $data['id'] ?>" method="POST">
                <input class="input-text  universal-size" required type="text" name="title" id="title" value="<?= $data['title'] ?>">
                <textarea rows="10" class="input-text" required name="description" id="description" placeholder="Description"><?= $data['description'] ?></textarea>

                <input class="btn universal-size" type="submit" value="Save">
            </form>
        <?php else : ?>
            <h4>Create news</h4>
            <form class="flex-column" action="<?= URLROOT ?>/news/add" method="POST">
                <input class="input-text universal-size" required type="text" name="title" id="title" placeholder="Title">
                <textarea rows="10" class="input-text" required name="description" id="description" placeholder="Description"></textarea>
                <input class="btn universal-size" type="submit" value="Create">
            </form>
        <?php endif; ?>
        <a class="btn universal-size logout-btn" href="<?= URLROOT ?>/users/logout">Logout</a>
    </div>


</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>