<?php
define('ENVIRONMENT', 'production');
define('WEBSITE_HOSTNAME', 'eccc.powersporttechnologies.com');
define('DATABASE_HOSTNAME', 'db1.internal.powersporttechnologies.com');
define('DATABASE_NAME', 'eccc_v1');
define('DATABASE_USER', 'eccc_v1');
define('DATABASE_PASS', '59ngb389trxc');
define('USE_PORTAL_WS', true);
define('WS_HOST', 'portal.powersporttechnologies.com');
define('STORE_NAME', 'eccc_v1');
define('MOTORCYCLE_SHOP_NEW', true);
define('FROM_EMAIL_ADDRESS', 'noreply@eastcoastcycle.com');
define('REPLY_TO_EMAIL', FROM_EMAIL_ADDRESS);
define('REPLY_TO_NAME', 'noreply');
define('STYLED_HOSTNAME', 'eccc.powersporttechnologies.com');
define('STORE_DIRECTORY', __DIR__);
define('SEARCH_NOINDEX', false);
define('CORE_DIRECTORY', __DIR__);
define('EBAY_TOKEN', '');
define('STORE_BANNER_LIBRARY', __DIR__.'/html/bannerlibrary');

// These are top level category numbers.
// They were factored out of the code. The defaults are probably correct except for VTwin
// Remember, when you add one here, be sure to add it in the master_v_new.php, too.
define('TOP_LEVEL_CAT_STREET_BIKES', 20409);
define('TOP_LEVEL_CAT_ATV_PARTS', 20419);
define('TOP_LEVEL_CAT_UTV_PARTS', 20422);
define('TOP_LEVEL_CAT_VTWIN_PARTS', 69597);
define('TOP_LEVEL_CAT_DIRT_BIKES', 20416);
define('TOP_LEVEL_CAT_MARINE', 99999);

// These are page IDs. They are referenced at the top of the controllers.
define('TOP_LEVEL_PAGE_ID_VTWIN', 17);
define('TOP_LEVEL_PAGE_ID_ATV', 2);
define('TOP_LEVEL_PAGE_ID_DIRT', 1);
define('TOP_LEVEL_PAGE_ID_STREET', 3);
define('TOP_LEVEL_PAGE_ID_UTV', 4);
define('TOP_LEVEL_PAGE_ID_HOME', 0);
define('TOP_LEVEL_PAGE_ID_VAULT', 19);
define('TOP_LEVEL_PAGE_ID_MARINE', 0);


// This disables all the motorcycle functionality and instead it just reverts to a parts store.
define('MOTORCYCLE_SHOP_DISABLE', false);

// this defaults to 8 if not set otherwise
define('FOOTER_PAGE_LIMIT', 8);

// this lets you disable the whole front navigation
define('DISABLE_FRONT_MOTORCYCLE_NAV', false);
define('MOTORCYCLE_SHOP_USED', true);

// this lets you disable this button, or not.
define('ENABLE_OEMPARTS_BUTTON', true);

// Enables the vault, or not.
define('ENABLE_VAULT', false);

// Override wording, if you prefer, for the search
define('SEARCH_PLACEHOLDER_WORDING', 'Search Parts and Apparel');
define('GET_FINANCING_WORDING', 'GET FINANCING');

// Enables lightspeed integration....
define('ENABLE_LIGHTSPEED', true);

// Disables the test drive option...
define('DISABLE_TEST_DRIVE', false);

global $LightspeedSupplierLookAside;
$LightspeedSupplierLookAside = array(
    "BEL" => "Bell Helmets",
    "HH" => "Helmet House",
    "ONE" => "One Industries",
    "SB" => "Sullivans",
    "TR" => "Tucker Rocky",
    "WP" => "Western Power Sports"
);

// Accommodations for Team
define('SIMPLIFIED_NAV_WITHIN_MAJOR_UNITS', false);

// Switch the home view..
define('HOMEPAGE_VIEW', 'master/master_v_front'); // there is also a master_v_bikefront

// Enable the Motorcycle Dealer feed
define('ENABLE_MD_FEED', false);

