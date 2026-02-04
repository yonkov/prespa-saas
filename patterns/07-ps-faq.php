<?php
/**
  * Title: Faq
  * Slug: prespa-saas/faq
  * Categories: prespa-saas
*/
?>

<!-- wp:group {"metadata":{"categories":["nasio-patterns"],"patternName":"nasio-blocks/01-faq","name":"FAQ"},"align":"full","className":"nasio-pattern section-faq","style":{"color":{"background":"#f9fafb"}},"layout":{"type":"constrained","contentSize":"980px","wideSize":"1180px"}} -->
<div class="wp-block-group alignfull nasio-pattern section-faq has-background" style="background-color:#f9fafb"><!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"p-animation-text-moveUp","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns p-animation-text-moveUp" style="padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"prespa-saas-box has-dark-mode-icons","style":{"spacing":{"padding":{"top":"0.38rem","bottom":"0.38rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":{"topLeft":"1.25rem","topRight":"1.25rem","bottomLeft":"1.25rem","bottomRight":"1.25rem"},"color":"#e3e3e3","width":"1px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"light-gray","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group prespa-saas-box has-dark-mode-icons has-border-color has-light-gray-background-color has-background" style="border-color:#e3e3e3;border-width:1px;border-top-left-radius:1.25rem;border-top-right-radius:1.25rem;border-bottom-left-radius:1.25rem;border-bottom-right-radius:1.25rem;padding-top:0.38rem;padding-right:0.75rem;padding-bottom:0.38rem;padding-left:0.75rem;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/ps-patterns/icons/help.png" alt="" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Help & support', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Frequently asked questions', 'prespa-saas' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Have a questions? We have all the answers.', 'prespa-saas' ); ?></p>
<!-- wp:paragraph -->
<p><?php echo sprintf( esc_html__( "Can't find what you are looking for? Our friendly %s will be happy to assist.", 'prespa-saas' ), '<a href="#">' . esc_html__( 'customer support', 'prespa-saas' ) . '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:nasio-block/accordion {"headerBackgroundColor":"#ffffff"} -->
<div class="wp-block-nasio-block-accordion nasio-accordion" data-default-open="" style="--nasio-blocks-accordion-header-bgr-color:#ffffff"><!-- wp:nasio-block/accordion-item {"title":"<?php esc_html_e( 'What kind of data sources can your platform connect to?', 'prespa-saas' ); ?>","blockId":"442c6a7d-3dcf-4a3a-bd6b-60cd1f70daf1"} -->
<div class="wp-block-nasio-block-accordion-item nasio-accordion-item" data-block-id="442c6a7d-3dcf-4a3a-bd6b-60cd1f70daf1"><button class="nasio-accordion-item-header" aria-expanded="false" type="button"><h3 class="nasio-accordion-item-title"><?php esc_html_e( 'What kind of data sources can your platform connect to?', 'prespa-saas' ); ?></h3><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="nasio-accordion-icon"><path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path></svg></button><div class="nasio-accordion-item-content"><div class="nasio-accordion-item-content-inner"><!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add content here...', 'prespa-saas' ); ?>"} -->
<p><?php esc_html_e( 'Our platform is built for flexibility. We offer seamless integrations with over 100+ popular data sources, including Google Analytics, Salesforce, MySQL, PostgreSQL, Snowflake, HubSpot, and various social media APIs. You can also upload CSV/Excel files or use our API for custom connections.', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:nasio-block/accordion-item -->

<!-- wp:nasio-block/accordion-item {"title":"<?php esc_html_e( 'How does the AI automation work?', 'prespa-saas' ); ?>","blockId":"acffc40d-2db0-46eb-9df4-5f580837bf3e"} -->
<div class="wp-block-nasio-block-accordion-item nasio-accordion-item" data-block-id="acffc40d-2db0-46eb-9df4-5f580837bf3e"><button class="nasio-accordion-item-header" aria-expanded="false" type="button"><h3 class="nasio-accordion-item-title"><?php esc_html_e( 'How does the AI automation work?', 'prespa-saas' ); ?></h3><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="nasio-accordion-icon"><path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path></svg></button><div class="nasio-accordion-item-content"><div class="nasio-accordion-item-content-inner"><!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add content here...', 'prespa-saas' ); ?>"} -->
<p><?php esc_html_e( 'Our AI engine learns from your data patterns to automate key tasks. It can automatically identify anomalies (like a sudden drop in sales), forecast trends, trigger alerts to Slack or email, and even suggest optimizations. Think of it as an intelligent assistant that monitors your data 24/7.', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:nasio-block/accordion-item -->

<!-- wp:nasio-block/accordion-item {"title":"<?php esc_html_e( 'Is there a limitation in the amount of ai agents I can run simultaneously?', 'prespa-saas' ); ?>","blockId":"9d964167-80fc-4c18-9421-8680d6beb565"} -->
<div class="wp-block-nasio-block-accordion-item nasio-accordion-item" data-block-id="9d964167-80fc-4c18-9421-8680d6beb565"><button class="nasio-accordion-item-header" aria-expanded="false" type="button"><h3 class="nasio-accordion-item-title"><?php esc_html_e( 'Is there a limitation in the amount of ai agents I can run simultaneously?', 'prespa-saas' ); ?></h3><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="nasio-accordion-icon"><path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path></svg></button><div class="nasio-accordion-item-content"><div class="nasio-accordion-item-content-inner"><!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add content here...', 'prespa-saas' ); ?>"} -->
<p><?php esc_html_e( 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neq.', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:nasio-block/accordion-item -->

<!-- wp:nasio-block/accordion-item {"title":"<?php esc_html_e( 'Is content creation fully automated?', 'prespa-saas' ); ?>","blockId":"9d964167-80fc-4c18-9421-8680d6beb565"} -->
<div class="wp-block-nasio-block-accordion-item nasio-accordion-item" data-block-id="9d964167-80fc-4c18-9421-8680d6beb565"><button class="nasio-accordion-item-header" aria-expanded="false" type="button"><h3 class="nasio-accordion-item-title"><?php esc_html_e( 'Is content creation fully automated?', 'prespa-saas' ); ?></h3><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="nasio-accordion-icon"><path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path></svg></button><div class="nasio-accordion-item-content"><div class="nasio-accordion-item-content-inner"><!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add content here...', 'prespa-saas' ); ?>"} -->
<p><?php esc_html_e( 'Our platform is designed for scalable automation. The number of concurrent AI agents you can run is determined by your subscription plan.', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:nasio-block/accordion-item -->

<!-- wp:nasio-block/accordion-item {"title":"<?php esc_html_e( 'Is my data secure on your platform', 'prespa-saas' ); ?>","blockId":"9d964167-80fc-4c18-9421-8680d6beb565"} -->
<div class="wp-block-nasio-block-accordion-item nasio-accordion-item" data-block-id="9d964167-80fc-4c18-9421-8680d6beb565"><button class="nasio-accordion-item-header" aria-expanded="false" type="button"><h3 class="nasio-accordion-item-title"><?php esc_html_e( 'Is my data secure on your platform', 'prespa-saas' ); ?></h3><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="nasio-accordion-icon"><path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path></svg></button><div class="nasio-accordion-item-content"><div class="nasio-accordion-item-content-inner"><!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add content here...', 'prespa-saas' ); ?>"} -->
<p><?php esc_html_e( 'Security is our top priority. We employ enterprise-grade encryption (both in transit and at rest), operate on SOC 2 compliant infrastructure, and offer role-based access controls (RBAC). We are fully GDPR and CCPA compliant. Your data is never used to train public AI models.', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:nasio-block/accordion-item -->

<!-- wp:nasio-block/accordion-item {"title":"<?php esc_html_e( 'Can we share reports and dashboards with clients or external stakeholders', 'prespa-saas' ); ?>","blockId":"9d964167-80fc-4c18-9421-8680d6beb565"} -->
<div class="wp-block-nasio-block-accordion-item nasio-accordion-item" data-block-id="9d964167-80fc-4c18-9421-8680d6beb565"><button class="nasio-accordion-item-header" aria-expanded="false" type="button"><h3 class="nasio-accordion-item-title"><?php esc_html_e( 'Can we share reports and dashboards with clients or external stakeholders', 'prespa-saas' ); ?></h3><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="nasio-accordion-icon"><path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path></svg></button><div class="nasio-accordion-item-content"><div class="nasio-accordion-item-content-inner"><!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add content here...', 'prespa-saas' ); ?>"} -->
<p><?php esc_html_e( 'Yes, easily. You can generate and share secure, password-protected links to live dashboards or scheduled PDF/PPT reports. You have full control over what data viewers can see, and you can brand reports with your company\'s logo and colors for a white-labeled experience.', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:nasio-block/accordion-item -->

<!-- wp:nasio-block/accordion-item {"title":"<?php esc_html_e( 'Do you offer free trials?', 'prespa-saas' ); ?>","blockId":"9d964167-80fc-4c18-9421-8680d6beb565"} -->
<div class="wp-block-nasio-block-accordion-item nasio-accordion-item" data-block-id="9d964167-80fc-4c18-9421-8680d6beb565"><button class="nasio-accordion-item-header" aria-expanded="false" type="button"><h3 class="nasio-accordion-item-title"><?php esc_html_e( 'Do you offer free trials?', 'prespa-saas' ); ?></h3><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="nasio-accordion-icon"><path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path></svg></button><div class="nasio-accordion-item-content"><div class="nasio-accordion-item-content-inner"><!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add content here...', 'prespa-saas' ); ?>"} -->
<p><?php esc_html_e( 'We offer transparent, scalable tiered pricing based on the number of data source connections, active users, and AI automation credits. We have a free tier for individuals and startups, plus Professional, Team, and Enterprise plans. All paid plans include a 14-day free trial with full feature access.', 'prespa-saas' ); ?></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:nasio-block/accordion-item --></div>
<!-- /wp:nasio-block/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->