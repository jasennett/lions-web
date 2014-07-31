<?php
/* @var $this SiteController */

$this->pageTitle='Richmond Lions Rugby Football Club'
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

<section class="announcements light light-grey">
    <div class="content">
        <div class="gutter">
            <div class="section-name">
                <div class="icon">
                    <span class="icon-megaphone"></span>
                </div>
                <h2>Announcements</h2>
            </div>
            <div class="messages">
                <div class="placeholder">
                    <p class="alternate"><?php $this->renderPartial('/partial/noAnnouncements') ?></p>
                    <p class="loading">Loading announcements...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="events dark dark-grey">
    <div class="content">
        <div class="gutter">
            <div class="section-name">
                <div class="icon">
                    <span class="icon-calendar-empty"></span>
                </div>
                <h2>Upcoming Events</h2>
            </div>
            <div class="upcoming">
                <div class="placeholder">
                    <p class="alternate"><?php $this->renderPartial('/partial/noEvents') ?></p>
                    <p class="loading">Loading events...</p>
                </div>
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
                    <a href="http://www.amazon.com/ref=as_li_ss_sm_fb_us_ndp_tl?_encoding=UTF8&camp=213733&creative=399841&linkCode=shr&tag=richmrugbyfou-20">
                        <div class="card">
                            <div class="square">
                                <div class="sponsor-logo">
                                    <img src="/content/images/sponsors/amazon_logo.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="sponsor">
                    <a href="https://docs.google.com/forms/d/14a5p_YJSr07Dp6wW4_HORQAC1lNpUnDONAvjPUC0vj8/viewform?usp=send_form">
                        <div class="card">
                            <div class="square">
                                <div class="sponsor-logo">
                                    <img src="/content/images/sponsors/impact_insurance_logo.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="sponsor">
                    <a href="//pabstblueribbon.com">
                        <div class="card">
                            <div class="square">
                                <div class="sponsor-logo">
                                    <img src="/content/images/sponsors/pbr_logo.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="sponsor">
                    <a href="//advancedortho.me">
                        <div class="card">
                            <div class="square">
                                <div class="sponsor-logo">
                                    <img src="/content/images/sponsors/advanced_logo.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="sponsor">
                    <a href="//gusbarandgrill.com">
                        <div class="card">
                            <div class="square">
                                <div class="sponsor-logo">
                                    <img src="/content/images/sponsors/gus_logo.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section-link">
                <?=CHtml::link('Become a Sponsor', 'mailto:fundraising@richmondlions.com', array('class' => 'section-button'))?>
            </div>
        </div>
    </div>
</section>