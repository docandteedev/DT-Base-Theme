<?php
/**
 * Template Name: Contact Page
 */
?>
<div class="row content">
    <div class="small-12 medium-6">
        <?php gravity_form("Contact Form", $display_title = false, $display_description = false, $ajax = true); ?>
    </div>
    <div class="small-12 medium-6">
        <div class="flex-video">
            <iframe
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=<?php echo get_option('google_maps_api_key'); ?>
    &q=<?php echo get_option('location_latitude'); ?>, <?php echo get_option('location_longitude'); ?>" allowfullscreen>
            </iframe>
        </div>
        <div class="contact-details">
            <?php if (!empty(get_option("phone_number"))): ?>
                <p>Phone:
                    <a href="tel: <?php echo get_option("phone_number"); ?>">
                        + <?php echo get_option("phone_number"); ?>
                    </a>
                </p>
            <?php elseif (!empty(get_option("fax_number"))): ?>
                <p>Fax:
                    <a href="fax: <?php echo get_option("fax_number"); ?>">
                        + <?php echo get_option("fax_number"); ?>
                    </a>
                </p>
            <?php elseif (!empty(get_option("mobile_number"))): ?>
                <p>Mobile:
                    <a href="tel: <?php echo get_option("mobile_number"); ?>">
                        + <?php echo get_option("mobile_number"); ?>
                    </a>
                </p>
            <?php elseif (!empty(get_option("email"))): ?>
                <p>Email:
                    <a href="mailto: <?php echo get_option("email"); ?>">
                        <?php echo get_option("email"); ?>
                    </a>
                </p>
            <?php elseif (!empty(get_option("address"))): ?>
                <p>Address:
                    <p>
                        <?php echo get_option("address"); ?>
                    </p>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
