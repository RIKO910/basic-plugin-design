<?php
defined( 'ABSPATH' ) || exit;


/**
 * Class Admin.
 *
 * @since 1.0.0
 */
class Admin {


    /**
     * Constructor.
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ), 59 );

        // Enqueue admin scripts and styles.
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));
    }
    /**
     * Add top-level menu.
     *
     * @since 1.0.0
     * @return void
     */
    public function admin_menu() {
        add_menu_page(
            __( 'Quantity Based Price', 'quantity-based-price' ),
            __( 'Quantity Based Price', 'quantity-based-price' ),
            'manage_options',
            'quantity-based-price',
            array( $this, 'render_settings_page' ),
            'dashicons-cart',
            6
        );
    }

    /**
     * Settings.
     *
     * @since 1.0.0
     * @return void
     */
    public function render_settings_page() {
        ?>

        <div class="wrap">
            <h1 class="">Add Pricing Rule</h1>

            <form name="post" action="" id="">
                <div id="" class="qbp-full-page">
                    <div id="" class="qbp-columns-2">

                        <div id="" class="qbp-column-a">
                            <div class="qbp-title">
                                <label for="title"></label>
                                <input type="text" name="post_title" value="" placeholder="Add Title" id="title">
                            </div>

                            <div class="qbp-global-pricing-rule-work">
                                <div class="qbp-global-pricing-rule-work__title">
                                    How global pricing rules work
                                </div>
                                <p>Global rules are useful when you need to provide custom pricing for a bunch of products
                                    and apply it to a specific group of users.</p>

                                <div class="qbp-global-pricing-rule-work__steps">

                                    <div class="qbp-global-pricing-rule-work-step">
                                        <div class="qbp-global-pricing-rule-work-step__icon">$</div>
                                        <div class="qbp-global-pricing-rule-work-step__title">Add pricing</div>
                                        <div class="qbp-global-pricing-rule-work-step__description">Set up custom regular pricing.</div>
                                    </div>
                                    <div class="qbp-global-pricing-rule-work-step qbp-global-pricing-rule-work-step--arrow">
                                        <span class="dashicons dashicons-arrow-right-alt"></span>
                                    </div>

                                    <div class="qbp-global-pricing-rule-work-step">
                                        <div class="qbp-global-pricing-rule-work-step__icon">
                                            <span class="dashicons dashicons-archive"></span></div>
                                        <div class="qbp-global-pricing-rule-work-step__title">Select products</div>
                                        <div class="qbp-global-pricing-rule-work-step__description">
                                            Select products or product categories the rule will work for.</div>
                                    </div>
                                    <div class="qbp-global-pricing-rule-work-step qbp-global-pricing-rule-work-step--arrow">
                                        <span class="dashicons dashicons-arrow-right-alt"></span>
                                    </div>

                                    <div class="qbp-global-pricing-rule-work-step">
                                        <div class="qbp-global-pricing-rule-work-step__icon">
                                            <span class="dashicons dashicons-database"></span></div>
                                        <div class="qbp-global-pricing-rule-work-step__title">Specify quantity</div>
                                        <div class="qbp-global-pricing-rule-work-step__description">
                                            Specify minimum quantity for products.</div>
                                    </div>

                                </div>

                                <div class="qbp-global-pricing-rule-work__close">
                                    ×
                                </div>
                            </div>


                            <div class="qbp-global-pricing-rule-form">
                                <div class="qbp-global-pricing-rule-form__tabs">

                                    <div class="qbp-global-pricing-rule-form-tab qbp-global-pricing-rule-form-tab--active" data-target="qbp-global-pricing-rule-pricing">
                                        <div class="qbp-global-pricing-rule-form-tab__icon">
                                            <span class="dashicons dashicons-arrow-right-alt2"></span>
                                        </div>
                                        <div class="qbp-global-pricing-rule-form-tab__title">
                                            <h3>Pricing</h3>
                                            <div>Set up regular and tiered pricing.</div>
                                        </div>
                                    </div>


                                    <div class="qbp-global-pricing-rule-form-tab " data-target="qbp-global-pricing-rule-products-and-categories">
                                        <div class="qbp-global-pricing-rule-form-tab__icon">
                                            <span class="dashicons dashicons-arrow-right-alt2"></span>
                                        </div>
                                        <div class="qbp-global-pricing-rule-form-tab__title">
                                            <h3>Products</h3>
                                            <div>Select products or product categories the rule will work for.</div>
                                        </div>
                                    </div>



                                    <div class="qbp-global-pricing-rule-form-tab " data-target="qbp-global-pricing-rule-quantity">
                                        <div class="qbp-global-pricing-rule-form-tab__icon">
                                            <span class="dashicons dashicons-arrow-right-alt2"></span>
                                        </div>
                                        <div class="qbp-global-pricing-rule-form-tab__title">
                                            <h3>Quantity rules</h3>
                                            <div>Specify minimum quantity for products.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="qbp-global-pricing-rule-form__content">

                                    <div class="qbp-global-pricing-rule-form-tab-content qbp-global-pricing-rule-form-tab-content--active" id="qbp-global-pricing-rule-pricing">
                                        <div class="qbp-global-pricing-rule-hint ">
                                            <div class="qbp-global-pricing-rule-hint__icon">
                                                <span class="dashicons dashicons-info"></span>
                                            </div>
                                            <div class="qbp-global-pricing-rule-hint__content">
                                                This section controls the base product price. You can set new regular and sale prices or specify a percentage discount based on the original product price.			</div>
                                        </div>

                                        <div class=" ">

                                            <p class="form-field">
                                                <label for="pricing_type">Pricing type</label>
                                                <label for="pricing_type-flat" style="padding: 0; float: none; width: auto; margin: 0;">
                                                    <input type="radio"  style="margin-right: 3px;" value="flat" checked="checked" name="pricing_type" id="pricing_type-flat">
                                                    Flat prices</label>
                                                <label for="pricing_type-percentage" style="padding: 0; float: none; width: auto; margin: 0 5px 0 20px;">
                                                    <input type="radio"  value="percentage" style="margin-right: 3px;" name="pricing_type" id="pricing_type-percentage">
                                                    Percentage discount</label>
                                            </p>

                                            <p class="form-field " >
                                                <label for="regular_price">Regular price ($)</label>
                                                <input  type="text" value="" placeholder="Leave empty to don't change it"  name="regular_price" id="regular_price">
                                            </p>

                                            <p class="form-field " >
                                                <label for="sale_price">Sale price ($)</label>
                                                <input  type="text" value="" placeholder="Leave empty to don't change it" id="sale_price" name="sale_price">
                                            </p>
                                        </div>
                                    </div>



                                    <div class="qbp-global-pricing-rule-form-tab-content " id="qbp-global-pricing-rule-products-and-categories">
                                        <div class="qbp-global-pricing-rule-hint ">
                                            <div class="qbp-global-pricing-rule-hint__icon">
                                                <span class="dashicons dashicons-info"></span>
                                            </div>
                                            <div class="qbp-global-pricing-rule-hint__content">
                                                If you do not specify products or product categories, the rule will work for all products in your store. (excluding products selected in the exclusions section)			</div>
                                        </div>

                                        <div class=" ">
                                            <p class="form-field ">
                                                <label for="product_categories">Apply for categories</label>
                                                <input  type="text" value="" placeholder=""  name="product_categories" id="product_categories">
                                            </p>

                                            <p class="form-field " >
                                                <label for="specific_products">Apply for specific products</label>
                                                <input  type="text" value="" placeholder="" id="specific_products" name="specific_products">
                                            </p>
                                        </div>
                                    </div>



                                    <div class="qbp-global-pricing-rule-form-tab-content " id="qbp-global-pricing-rule-quantity">
                                        <div class="qbp-global-pricing-rule-hint ">
                                            <div class="qbp-global-pricing-rule-hint__icon">
                                                <span class="dashicons dashicons-info"></span>
                                            </div>
                                            <div class="qbp-global-pricing-rule-hint__content">
                                                Quantity rules are applied to products individually.</div>
                                        </div>
                                        <div class=" ">
                                            <p class="form-field" >
                                                <label for="minimum_quantity">Minimum order quantity</label>
                                                <input  type="number" min="0" value="" placeholder="" id="minimum_quantity" name="minimum_quantity">
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- /post-body-content -->

                        <div id="" class=" qbp-column-b">

                            <div id="qbp_notice_notice_box" class="notice_box">
                                <h2 class="notice_box_header">Publish</h2>
                                <hr/>
                                <div class="publish-content">
                                        <label for="status-select">Status:</label>
                                        <select id="status-select" name="status">
                                            <option value="drift">Draft</option>
                                            <option value="pending-review">Pending Review</option>
                                        </select>
                                </div>
                                <div class="publish_button">
                                    <button class="btn ">Publish</button>
                                </div>
                            </div>

                            <div id="qbp_notice_notice_box" class="notice_box">
                                <h2 class="notice_box_header">Pricing notice</h2>
                                <hr/>
                                <div class="notice-content">
                                    <h4>Please note that rules in products have higher priority overriding the pricing rules you set here.</h4>
                                    <h4>Priorities are the following:</h4>
                                    <ul class="qbp-global-pricing-notice-list">
                                        <li>Single product rules (or single variation)</li>
                                        <li>Variable product rules (if a product is a variable)</li>
                                        <li>Global rules</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php
    }

    /**
     * Enqueue admin styles and scripts.
     *
     * @param string $hook Page hook.
     *
     * @since 1.0.0
     * @return void
     */
    public function enqueue_admin_assets($hook)
    {
            // Enqueue admin CSS.
            wp_enqueue_style(
                'pct_admin_style',
                QBP_PLUGIN_URL . 'assets/css/admin.css',
                array(),
                QBP_VERSION
            );

            // Enqueue admin JavaScript.
            wp_enqueue_script(
                'qbt_admin_script',
                QBP_PLUGIN_URL . 'assets/js/admin.js',
                array('jquery'),
                QBP_VERSION,
                true
            );
    }

}