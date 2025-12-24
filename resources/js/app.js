import './bootstrap';
import { createApp } from 'vue';

// 1. 引入 BootstrapVueNext (替代 BootstrapVue)
import BootstrapVueNext from 'bootstrap-vue-next';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue-next/dist/bootstrap-vue-next.css';

// 2. 引入其他插件 (請確認已安裝 Vue 3 相容版本)
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/css/index.css'; // Vue 3 版的路徑通常有變
import Lightbox from 'vue-easy-lightbox';

// 3. 引入你的 Vue 元件
import LanguageSwitcher from './components/LanguageSwitcher.vue';
import Home from './components/Home.vue';
import Photo from './components/Photo.vue';

// 建立應用程式實例
const app = createApp({
    data() {
        return {
            isLoading: true,
        };
    },
    mounted() {
        setTimeout(() => {
            this.isLoading = false;
        }, 500);
    }
});

// 4. 使用插件
app.use(BootstrapVueNext); // 包含原本的 BootstrapVue 與 Icons 效果
app.use(Lightbox);

// 5. 註冊全域元件
app.component('loading', Loading);
app.component('language-switcher', LanguageSwitcher);
app.component('home', Home);
app.component('photo', Photo);

// 特別注意：BootstrapVueNext 內建已包含 BCard 等，
// 如果你之前有特殊別名需求，可以像這樣註冊：
// import { BCard } from 'bootstrap-vue-next';

// 6. 掛載到 HTML
app.mount('#app');
