import App from './App.vue';
import VueCountdown from '@chenfengyuan/vue-countdown';
import {createApp} from 'vue';
import axios from "axios"
import 'virtual:svg-icons-register';
import '../scss/app.scss';

axios.defaults.withCredentials = true

createApp(App)
    .component(VueCountdown.name, VueCountdown)
    .mount("#app");
