import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

createInertiaApp({
    resolve: name => import(`./Pages/${name}.vue`), // Используйте import вместо require
    setup({ el, App, props }) {
        createApp({ render: () => h(App, props) }).mount(el);
    },
});

// Настройка прогресса загрузки
InertiaProgress.init();
