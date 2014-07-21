<?php
/* @var $this SiteController */
/* @var $announcements AnnouncementsModel */
/* @var $events UpcomingEventsModel */

$this->pageTitle='Richmond Lions Rugby Club'
?>

<section class="first about fixed" data-top="background-position: 50% 0px" data-top-bottom="background-position: 50% 200px">
    <div class="about-wrap">
        <div class="content">
            <nav>
                <ul class="social">
                    <li>
                        <a href="http://facebook.com/RichmondLions">
                            <div class="icon">
                                <span class="filler"></span>
                                <span class="logo icon-facebook-circled"></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/RichmondRugby">
                            <div class="icon">
                                <span class="filler"></span>
                                <span class="logo icon-twitter-circled"></span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </nav>

            <div class="about-text">
                <h2 class="history" data-anchor-target=".about-text" data-80-top-top="color: rgba(255,255,255,1)" data-0-top-bottom="color: rgba(255,255,255,0)">
                    Located in historic Richmond, Virginia, USA, the Richmond Lions R.F.C. is the area's competitive Men's Rugby Club (Division II).
                </h2>
                <div class="new-members" data-anchor-target=".about-text" data-80-top-top="color: rgba(255,255,255,1)" data-0-top-bottom="color: rgba(255,255,255,0)">
                    New members are always welcome.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="announcements light-grey">
    <div class="content">
        <div class="gutter">
            <div class="section-name">
                <div class="icon">
                    <span class="icon-megaphone"></span>
                </div>
                <h2>Announcements</h2>
            </div>
            <div class="messages">
                <?php if(empty($announcements->announcements)): ?>
                    <p>No announcements copy.</p>
                <?php else: ?>
                    <?php foreach($announcements->announcements as $announcement): ?>
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
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>

<section class="events dark-grey">
    <div class="content">
        <div class="gutter">
            <div class="section-name">
                <div class="icon">
                    <span class="icon-calendar-empty"></span>
                </div>
                <h2>Upcoming Events</h2>
            </div>
            <div class="upcoming">
                <?php if(empty($events->events)): ?>
                    <p>No events copy.</p>
                <?php else: ?>
                    <?php foreach($events->events as $i=>$event): ?>
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
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="clear"></div>
            </div>
            <div class="section-link">
                <?=CHtml::link('More Events', '//facebook.com/RichmondLions/events', array('class' => 'section-button'))?>
            </div>
        </div>
    </div>
</section>

<section class="sponsors light-grey">
    <div class="content">
        <div class="gutter">
            <div class="section-name">
                <div class="icon">
                    <span class="icon-money"></span>
                </div>
                <h2>Sponsors</h2>
            </div>
            <div class="sponsors-list">
                <div class="sponsor">
                    <div class="card">
                        <div class="square">
                            <div class="sponsor-logo">
                                <img src="/images/sponsors/pbr_logo.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sponsor">
                    <div class="card">
                        <div class="square">
                            <div class="sponsor-logo">
                                <img src="/images/sponsors/gus_logo.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sponsor">
                    <div class="card">
                        <div class="square">
                            <div class="sponsor-logo">
                                <img src="/images/sponsors/advanced_logo.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sponsor">
                    <div class="card">
                        <div class="square">
                            <div class="sponsor-logo">
                                <img src="/images/sponsors/long_foster_logo.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section-link">
                <?=CHtml::link('Become a Sponsor', 'mailto:fundraising@richmondlions.com', array('class' => 'section-button'))?>
            </div>
        </div>
    </div>
</section>