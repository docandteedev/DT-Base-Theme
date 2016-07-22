<?php
$social_links = array(
    'facebook' => 'fa fa-facebook',
    'twitter' => 'fa fa-twitter ',
    'linkedin' => 'fa fa-linkedin ',
    'github' => 'fa fa-github ',
    'instagram' => 'fa fa-instagram'
);
?>

<ul class="social-icons">
    <?php foreach ($social_links as $social_link => $social_link_icon_class) :  if (!empty(social_accounts_get_option($social_link . '_url'))) : ?>
        <li class="social-link-list-item">
          <a class="social-link <?php echo $social_link_icon_class ?>" href="<?php echo social_accounts_get_option($social_link . '_url'); ?>" target="_blank" aria="true"></a>
        </li>
    <?php endif;  endforeach; ?>
</ul>
