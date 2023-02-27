require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from "@inertiajs/progress";

import BootstrapVue3 from 'bootstrap-vue-3';
import VueToast from 'vue-toast-notification';
import VueApexCharts from "vue3-apexcharts";

import Layout from "@/Shared/Layout/Layout";
import myMixin from "@/Shared/Layout/layouts.mixin";
import { times } from 'lodash';

createInertiaApp({
    resolve: name => {
        let page = require(`./Pages/${name}`).default;
        if (page.layout === undefined) {
            page.layout = Layout;
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({
                render: () => h(App, props),
                mixins: [myMixin],
                provide: {
                    count: Math.floor((window.innerHeight - 170) / 70),
                    count2: Math.floor(((window.innerHeight - 170) - 170) / 61),
                    count3: Math.floor(((window.innerHeight - 170) - 130) / 61),
                    count4: Math.floor(((window.innerHeight - 170) - 100) / 50),
                    height: window.innerHeight - 170,
                    height2: window.innerHeight - 150
                },
                mounted() {
                    (window.User.role == 'Scholar') ? this.mixinMethod('horizontal'): this.mixinMethod('vertical');
                }
            })
            .use(plugin)
            .use(BootstrapVue3, VueToast)
            .use(VueApexCharts)
            .component("Link", Link)
            .component("Head", Head)
            .mount(el)
            // .config.devtools = true
    },
    title: title => `STSIMS | ${title}`
})

InertiaProgress.init({
    color: "blue",
    showSpinner: true,
})