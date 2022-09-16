import App from './App.vue';
import VueCountdown from '@chenfengyuan/vue-countdown';
import {createApp} from 'vue';
import 'virtual:svg-icons-register';
import '../scss/app.scss';

createApp(App)
    .component(VueCountdown.name, VueCountdown)
    .mount("#app");
