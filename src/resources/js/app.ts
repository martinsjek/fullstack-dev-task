import App from './App.vue';
import VueCountdown from '@chenfengyuan/vue-countdown';
import {createApp} from 'vue';
import axios from "axios"
import 'virtual:svg-icons-register';
import '../scss/app.scss';
import VueLazyLoad from 'vue3-lazyload';

axios.defaults.withCredentials = true

createApp(App)
    .use(VueLazyLoad)
    .component(VueCountdown.name, VueCountdown)
    .mount("#app");
