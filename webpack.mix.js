const mix = require('laravel-mix');
const lodash = require("lodash");
const WebpackRTLPlugin = require('webpack-rtl-plugin');
const folder = {
    src: "resources/", // source files
    dist: "public/", // build files
    dist_assets: "public/assets/" //build assets files
};

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

var third_party_assets = {
    css_js: [
        { "name": "@ckeditor", "assets": ["./node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"] },
        {
            "name": "@simonwep",
            "assets": ["./node_modules/@simonwep/pickr/dist/pickr.min.js",
                "./node_modules/@simonwep/pickr/dist/themes/classic.min.css",
                "./node_modules/@simonwep/pickr/dist/themes/monolith.min.css",
                "./node_modules/@simonwep/pickr/dist/themes/nano.min.css",
            ]
        },
        { "name": "bootstrap", "assets": ["./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"] },
        { "name": "@tarekraafat", "assets": [
            "./node_modules/@tarekraafat/autocomplete.js/dist/autoComplete.min.js",
            "./node_modules/@tarekraafat/autocomplete.js/dist/css/autoComplete.css",
        ] },
        { "name": "aos", "assets": [
            "./node_modules/aos/dist/aos.js",
            "./node_modules/aos/dist/aos.css",
    ] },

        { "name": "dom-autoscroller", "assets": ["./node_modules/dom-autoscroller/dist/dom-autoscroller.min.js"] },
        { "name": "dragula",
                    "assets":["./node_modules/dragula/dist/dragula.min.js",
                        "./node_modules/dragula/dist/dragula.min.css"]
        },
        {
            "name": "choices.js",
            "assets": ["./node_modules/choices.js/public/assets/scripts/choices.min.js",
                "./node_modules/choices.js/public/assets/styles/choices.min.css"
            ]
        },
        { "name": "cleave.js", "assets": ["./node_modules/cleave.js/dist/cleave.min.js"] },
        { "name": "apexcharts", "assets": ["./node_modules/apexcharts/dist/apexcharts.min.js"] },
        // { "name": "bootstrap", "assets": ["./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"] },
        { "name": "chart.js", "assets": ["./node_modules/chart.js/dist/chart.min.js"] },
        { "name": "fg-emoji-picker", "assets": ["./node_modules/fg-emoji-picker/fgEmojiPicker.js"] },

        {
            "name": "filepond-plugin-file-encode",
             "assets": ["./node_modules/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js",
            ]
        },
        {
            "name": "filepond-plugin-file-validate-size",
             "assets": ["./node_modules/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js",
            ]
        },
        {
            "name": "filepond-plugin-image-exif-orientation",
             "assets": ["./node_modules/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js",
            ]
        },
        {
            "name": "filepond-plugin-image-exif-orientation",
             "assets": ["./node_modules/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js",
            ]
        },
        {
            "name": "filepond-plugin-image-preview",
             "assets": [
                 "./node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js",
                 "./node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css",
            ]
        },
        {
            "name": "filepond",
             "assets": [
                 "./node_modules/filepond/dist/filepond.min.js",
                 "./node_modules/filepond/dist/filepond.min.css",
            ]
        },
        {
            "name": "dropzone",
            "assets": ["./node_modules/dropzone/dist/dropzone-min.js",
                "./node_modules/dropzone/dist/dropzone.css"
            ]
        },
        { "name": "echarts", "assets": ["./node_modules/echarts/dist/echarts.min.js"] },

        { "name": "fullcalendar", "assets": [
            "./node_modules/fullcalendar/main.min.js",
            "./node_modules/fullcalendar/main.min.css"] },
        {
            "name": "flatpickr",
            "assets": ["./node_modules/flatpickr/dist/flatpickr.min.js",
                "./node_modules/flatpickr/dist/flatpickr.min.css"
            ]
        },
        {
            "name": "glightbox",
            "assets": ["./node_modules/glightbox/dist/js/glightbox.min.js",
                "./node_modules/glightbox/dist/css/glightbox.min.css"
            ]
        },
        { "name": "gmaps", "assets": ["./node_modules/gmaps/gmaps.min.js"] },

        { "name": "isotope-layout", "assets": ["./node_modules/isotope-layout/dist/isotope.pkgd.min.js"] },

        { "name": "gridjs", "assets": ["./node_modules/gridjs/dist/gridjs.umd.js",
                                    "./node_modules/gridjs/dist/theme/mermaid.min.css"
    ] },
        { "name": "jsvectormap", "assets": [
            "./node_modules/jsvectormap/dist/css/jsvectormap.min.css",
            "./node_modules/jsvectormap/dist/js/jsvectormap.min.js",
            "./node_modules/jsvectormap/dist/maps/world-merc.js",
            "./node_modules/jsvectormap/dist/maps/us-merc-en.js",
            "./node_modules/jsvectormap/dist/maps/canada.js",
            "./node_modules/jsvectormap/dist/maps/russia.js",
            "./node_modules/jsvectormap/dist/maps/spain.js",
        ] },
        { "name": "leaflet", "assets": [
            "./node_modules/leaflet/dist/leaflet.js",
            "./node_modules/leaflet/dist/leaflet.css",
        ] },
        { "name": "masonry-layout", "assets": ["./node_modules/masonry-layout/dist/masonry.pkgd.min.js"] },
        { "name": "particles.js", "assets": ["./node_modules/particles.js/particles.js"] },

        { "name": "prismjs", "assets": [
            "./node_modules/prismjs/prism.js",
            "./node_modules/prismjs/themes/prism.css",
            "./node_modules/prismjs/plugins/toolbar/prism-toolbar.min.css",

        ] },

        { "name": "list.pagination.js", "assets": ["./node_modules/list.pagination.js/dist/list.pagination.min.js"] },

        { "name": "list.js", "assets": ["./node_modules/list.js/dist/list.min.js"] },
        { "name": "multi.js", "assets": [
            "./node_modules/multi.js/dist/multi.min.js",
            "./node_modules/multi.js/dist/multi.min.css",
        ] },

        { "name": "moment", "assets": ["./node_modules/moment/min/moment.min.js"] },
        {
            "name": "nouislider",
            "assets": ["./node_modules/nouislider/dist/nouislider.min.js",
                "./node_modules/nouislider/dist/nouislider.min.css"
            ]
        },
        { "name": "quill", "assets": [
            "./node_modules/quill/dist/quill.core.css",
            "./node_modules/quill/dist/quill.bubble.css",
            "./node_modules/quill/dist/quill.snow.css",
            "./node_modules/quill/dist/quill.min.js"
            ]
        },
        { "name": "rater-js", "assets": ["./node_modules/rater-js/index.js"] },

        { "name": "shepherd.js", "assets": [
            "./node_modules/shepherd.js/dist/js/shepherd.min.js",
            "./node_modules/shepherd.js/dist/css/shepherd.css",
        ] },


        { "name": "simplebar", "assets": ["./node_modules/simplebar/dist/simplebar.min.js"] },
        {
            "name": "sweetalert2",
            "assets": ["./node_modules/sweetalert2/dist/sweetalert2.min.js",
                "./node_modules/sweetalert2/dist/sweetalert2.min.css"
            ]
        },
        {
            "name": "swiper",
            "assets": ["./node_modules/swiper/swiper-bundle.min.js",
                "./node_modules/swiper/swiper-bundle.min.css"
            ]
        },

        { "name": "feather-icons", "assets": ["./node_modules/feather-icons/dist/feather.min.js"] },
        { "name": "wnumb", "assets": ["./node_modules/wnumb/wNumb.min.js"] },
        { "name": "node-waves", "assets": ["./node_modules/node-waves/dist/waves.min.js"] },
        { "name": "sortablejs", "assets": ["./node_modules/sortablejs/Sortable.min.js"] }
    ]
};

//copying third party assets
lodash(third_party_assets).forEach(function(assets, type) {
    if (type == "css_js") {
        lodash(assets).forEach(function(plugin) {
            var name = plugin['name'],
                assetlist = plugin['assets'],
                css = [],
                js = [];
            lodash(assetlist).forEach(function(asset) {
                var ass = asset.split(',');
                for (let i = 0; i < ass.length; ++i) {
                    if (ass[i].substr(ass[i].length - 3) == ".js") {
                        js.push(ass[i]);
                    } else {
                        css.push(ass[i]);
                    }
                };
            });
            if (js.length > 0) {
                mix.combine(js, folder.dist_assets + "/libs/" + name + "/" + name + ".min.js");
            }
            if (css.length > 0) {
                mix.combine(css, folder.dist_assets + "/libs/" + name + "/" + name + ".min.css");
            }
        });
    }
});

// mix.copyDirectory("./node_modules/tinymce", folder.dist_assets + "/libs/tinymce");
mix.copyDirectory("./node_modules/leaflet/dist/images", folder.dist_assets + "/libs/leaflet/images");
// mix.copyDirectory("./node_modules/bootstrap-editable/img", folder.dist_assets + "/libs/img");

// copy all fonts
var out = folder.dist_assets + "fonts";
mix.copyDirectory(folder.src + "fonts", out);

// copy all images
var out = folder.dist_assets + "images";
mix.copyDirectory(folder.src + "images", out);

mix.sass('resources/scss/bootstrap.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/bootstrap.css");
mix.sass('resources/scss/icons.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/icons.css");
mix.sass('resources/scss/app.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/app.css");
mix.sass('resources/scss/custom.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/custom.css");


mix.webpackConfig({
    plugins: [
        new WebpackRTLPlugin()
    ]
});


//copying demo pages related assets
var app_pages_assets = {
    js: [
            folder.src + "js/pages/animation-aos.init.js",
            folder.src + "js/pages/apexcharts-area.init.js",
            folder.src + "js/pages/apexcharts-bar.init.js",
            folder.src + "js/pages/apexcharts-boxplot.init.js",
            folder.src + "js/pages/apexcharts-bubble.init.js",
            folder.src + "js/pages/apexcharts-candlestick.init.js",
            folder.src + "js/pages/apexcharts-column.init.js",
            folder.src + "js/pages/apexcharts-heatmap.init.js",
            folder.src + "js/pages/apexcharts-line.init.js",
            folder.src + "js/pages/apexcharts-mixed.init.js",
            folder.src + "js/pages/apexcharts-pie.init.js",
            folder.src + "js/pages/apexcharts-polararea.init.js",
            folder.src + "js/pages/apexcharts-radar.init.js",
            folder.src + "js/pages/apexcharts-radialbar.init.js",
            folder.src + "js/pages/apexcharts-scatter.init.js",
            folder.src + "js/pages/apexcharts-timeline.init.js",
            folder.src + "js/pages/apexcharts-treemap.init.js",
            // folder.src + "js/pages/calendar.init.js",
            folder.src + "js/pages/card.init.js",
            folder.src + "js/pages/chartjs.init.js",
            folder.src + "js/pages/chat.init.js",
            folder.src + "js/pages/coming-soon.init.js",
            folder.src + "js/pages/crm-companies.init.js",
            folder.src + "js/pages/crm-contact.init.js",
            folder.src + "js/pages/crm-leads.init.js",
            folder.src + "js/pages/crypto-buy-sell.init.js",
            folder.src + "js/pages/crypto-kyc.init.js",
            folder.src + "js/pages/crypto-orders.init.js",
            folder.src + "js/pages/crypto-transactions.init.js",
            folder.src + "js/pages/crypto-wallet.init.js",
            folder.src + "js/pages/dashboard-analytics.init.js",
            folder.src + "js/pages/dashboard-crm.init.js",
            folder.src + "js/pages/dashboard-crypto.init.js",
            folder.src + "js/pages/dashboard-ecommerce.init.js",
            folder.src + "js/pages/dashboard-projects.init.js",
            folder.src + "js/pages/echarts.init.js",
            folder.src + "js/pages/ecommerce-cart.init.js",
            folder.src + "js/pages/ecommerce-order.init.js",
            folder.src + "js/pages/ecommerce-customer-list.init.js",
            folder.src + "js/pages/ecommerce-product-checkout.init.js",
            folder.src + "js/pages/ecommerce-product-create.init.js",
            folder.src + "js/pages/ecommerce-product-details.init.js",
            folder.src + "js/pages/ecommerce-product-list.init.js",
            folder.src + "js/pages/form-file-upload.init.js",
            folder.src + "js/pages/form-input-spin.init.js",
            folder.src + "js/pages/form-advanced.init.js",
            folder.src + "js/pages/form-editor.init.js",
            folder.src + "js/pages/form-masks.init.js",
            folder.src + "js/pages/form-pickers.init.js",
            folder.src + "js/pages/form-validation.init.js",
            folder.src + "js/pages/form-wizard.init.js",
            folder.src + "js/pages/gallery.init.js",
            folder.src + "js/pages/gmaps.init.js",
            folder.src + "js/pages/gridjs.init.js",
            folder.src + "js/pages/invoicecreate.init.js",
            folder.src + "js/pages/invoiceslist.init.js",
            folder.src + "js/pages/leaflet-map.init.js",
            folder.src + "js/pages/leaflet-us-states.js",
            folder.src + "js/pages/listjs.init.js",
            folder.src + "js/pages/mailbox.init.js",
            folder.src + "js/pages/modal.init.js",
            folder.src + "js/pages/materialdesign.list.js",
            folder.src + "js/pages/notifications.init.js",
            folder.src + "js/pages/nestable.init.js",
            folder.src + "js/pages/particles.app.js",
            folder.src + "js/pages/password-addon.init.js",
            folder.src + "js/pages/pricing.init.js",
            folder.src + "js/pages/profile-setting.init.js",
            folder.src + "js/pages/profile.init.js",
            folder.src + "js/pages/project-create.init.js",
            folder.src + "js/pages/project-list.init.js",
            folder.src + "js/pages/project-overview.init.js",
            folder.src + "js/pages/range-sliders.init.js",
            folder.src + "js/pages/rating.init.js",
            folder.src + "js/pages/remix-icons-listing.js",
            folder.src + "js/pages/search-result.init.js",
            folder.src + "js/pages/seller-details.init.js",
            folder.src + "js/pages/sellers.init.js",
            folder.src + "js/pages/sweetalerts.init.js",
            folder.src + "js/pages/swiper.init.js",
            folder.src + "js/pages/tasks-kanban.init.js",
            folder.src + "js/pages/tasks-list.init.js",
            folder.src + "js/pages/team.init.js",
            folder.src + "js/pages/ticketdetail.init.js",
            folder.src + "js/pages/ticketlist.init.js",
            folder.src + "js/pages/timeline.init.js",
            folder.src + "js/pages/tour.init.js",
            folder.src + "js/pages/two-step-verification.init.js",
            folder.src + "js/pages/vector-maps.init.js",
            folder.src + "js/pages/landing.init.js",
            folder.src + "js/pages/widgets.init.js"
    ]
};

var out = folder.dist_assets + "js/";
lodash(app_pages_assets).forEach(function(assets, type) {
    for (let i = 0; i < assets.length; ++i) {
        mix.js(assets[i], out + "pages");
    };
});

mix.combine('resources/js/plugins.js', folder.dist_assets + "js/plugins.min.js");
mix.combine('resources/js/layout.js', folder.dist_assets + "js/layout.js");
mix.combine('resources/js/bootstrap.js', folder.dist_assets + "js/bootstrap.min.js");
mix.combine('resources/js/app.js', folder.dist_assets + "js/app.min.js");
mix.combine('resources/js/pages/leaflet-us-states.js', folder.dist_assets + "js/pages/leaflet-us-states.js");
mix.combine('resources/js/pages/form-wizard.init.js', folder.dist_assets + "js/pages/form-wizard.init.js");
mix.combine('resources/js/pages/calendar.init.js', folder.dist_assets + "js/pages/calendar.init.js");
mix.combine('resources/js/pages/plugins/lord-icon-2.1.0.js', folder.dist_assets + "js/pages/plugins/lord-icon-2.1.0.min.js");
mix.combine('resources/js/pages/plugins/jsonfull-emoji-list.json', folder.dist_assets + "js/pages/plugins/jsonfull-emoji-list.json");
mix.combine('resources/js/pages/plugins/event.init.json', folder.dist_assets + "js/pages/plugins/event.init.json");
