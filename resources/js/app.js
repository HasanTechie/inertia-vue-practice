import { createApp, h } from 'vue'
import {createInertiaApp, Link, Head} from '@inertiajs/vue3'
import Layout from './Components/Layout.vue'

createInertiaApp({
    resolve: async name => {
        // Lazy load all pages
        const pages = import.meta.glob('./Pages/**/*.vue')
        // Get dynamic importer function
        const importer = pages[`./Pages/${name}.vue`]
        if (!importer) {
            throw new Error(`❌ Page not found: ./Pages/${name}.vue`)
        }
        // Load page module
        const page = await importer()
        // Set default persistent layout
        page.default.layout ??= Layout

        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link",Link)
            .component("Head",Head)
            .mount(el)
    },
    title: title => `My App — ${title}`
})
