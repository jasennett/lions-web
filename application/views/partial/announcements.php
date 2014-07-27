<?php
/** @var $model AnnouncementsModel */

if (empty($model->announcements))
{
?>
    <p class="placeholder"><?php $this->renderPartial('/partial/noAnnouncements') ?></p>
<?php
}
else
{
    foreach($model->announcements as $announcement)
    {
    ?>
        <div class="message">
            <div class="card">
                <p class="text">
                    <?php echo $announcement->getFormattedMessage(); ?>
                </p>

                <div class="when">
                    <p>
                        <a href="<?php echo $announcement->getPostUrl(); ?>">
                            <?php echo $announcement->getFormattedDate(); ?>
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    <?
    }
    ?>
    <div class="clear"></div>
<?php
}
?>