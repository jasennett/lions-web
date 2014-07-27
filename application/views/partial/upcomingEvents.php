<?php
/** @var $model UpcomingEventsModel */

if (empty($model->events))
{
?>
    <p class="placeholder"><?php $this->renderPartial('/partial/noEvents') ?></p>
<?php
}
else
{
    foreach($model->events as $i=>$event)
    {
    ?>
        <div class="event<?php echo $i == 1 ? ' middle' : ''; ?>">
            <a href="<?php echo $event->getEventUrl(); ?>">
                <div class="card">
                    <div class="grid-9">
                        <img src="<?php echo $event->getPictureUrl(); ?>">
                    </div>
                    <div class="when">
                        <p>
                            <?php echo $event->getFormattedDate(); ?>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <div class="event-detail">
                        <h3><?php echo $event->name; ?></h3>
                        <p>
                            <?php echo $event->location; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    <?
    }
    ?>
    <div class="clear"></div>
<?php
}
?>