<?php
/* @var $this SiteController */

$this->pageTitle='Richmond Lions Rugby Club Sponsors';
$amazonLink = 'http://www.amazon.com/ref=as_li_ss_sm_fb_us_ndp_tl?_encoding=UTF8&camp=213733&creative=399841&linkCode=shr&tag=richmrugbyfou-20';
$impactLink = 'https://docs.google.com/forms/d/14a5p_YJSr07Dp6wW4_HORQAC1lNpUnDONAvjPUC0vj8/viewform?usp=send_form';
$pbrLink = '//pabstblueribbon.com';
$advancedLink = '//advancedortho.me';
$gusLink = '//gusbarandgrill.com';
?>

<section class="first light-grey">
    <div class="content">
        <div class="gutter">
            <h2>Thanks to our sponsors!</h2>
            <p>
                If you are interested in becoming a sponsor please email our fundraising chair at <a href="mailto:fundraising@richmondlions.com">fundraising@richmondlions.com</a>.
            </p>
        </div>
    </div>
</section>

<section class="amazon cover dark">
    <div class="content">
        <div class="text-container">
            <h3><a href="<?php echo $amazonLink ?>">Amazon Smile</a></h3>
        </div>
        <div class="card-container">
            <a href="<?php echo $amazonLink ?>">
                <div class="card">
                    <div class="square">
                        <div class="sponsor-logo">
                            <img src="/content/images/sponsors/amazon_logo.jpg">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="impact light-grey light">
    <div class="content">
        <div class="text-container">
            <h3><a href="<?php echo $impactLink ?>">Impact Insurance</a></h3>
        </div>
        <div class="card-container">
            <a href="<?php echo $impactLink ?>">
                <div class="card">
                    <div class="square">
                        <div class="sponsor-logo">
                            <img src="/content/images/sponsors/impact_insurance_logo.jpg">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="pbr cover dark">
    <div class="content">
        <div class="text-container">
            <h3><a href="<?php echo $pbrLink ?>">Pabst Blue Ribbon</a></h3>
        </div>
        <div class="card-container">
            <a href="<?php echo $pbrLink ?>">
                <div class="card">
                    <div class="square">
                        <div class="sponsor-logo">
                            <img src="/content/images/sponsors/pbr_logo.jpg">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="gus cover dark">
    <div class="shade">
        <div class="content">
            <div class="text-container">
                <h3><a href="<?php echo $gusLink ?>">Gus' Bar & Grill</a></h3>
            </div>
            <div class="card-container">
                <a href="<?php echo $gusLink ?>">
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
    </div>
</section>

<section class="advanced cover dark">
    <div class="shade">
        <div class="content">
            <div class="text-container">
                <h3><a href="<?php echo $advancedLink ?>">Advanced Orthopaedics</a></h3>
            </div>
            <div class="card-container">
                <a href="<?php echo $amazonLink ?>">
                    <div class="card">
                        <div class="square">
                            <div class="sponsor-logo">
                                <img src="/content/images/sponsors/advanced_logo.jpg">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>
