;(function($) {
    $(document).ready(function() {

        jQuery(document).ready(function () {
            jQuery('.qbp-global-pricing-rule-work__close').click(function () {
                jQuery(this).parent().hide();
            })
        })

        jQuery(document).ready(function () {
            let tabs = jQuery('.qbp-global-pricing-rule-form-tab');
            let tabsContent = jQuery('.qbp-global-pricing-rule-form-tab-content');

            tabs.click(function (e) {
                e.preventDefault();

                tabsContent.removeClass('qbp-global-pricing-rule-form-tab-content--active');
                tabs.removeClass('qbp-global-pricing-rule-form-tab--active');

                jQuery(this).addClass('qbp-global-pricing-rule-form-tab--active');

                const target = jQuery(this).data('target');

                jQuery('#' + target).addClass('qbp-global-pricing-rule-form-tab-content--active');
            });
        });

    });
})(jQuery);