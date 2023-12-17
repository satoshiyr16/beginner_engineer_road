import './bootstrap';

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import { createApp } from "vue";

import App from "./Vue/app.vue";
import router from "./router";

const app = createApp(App);
app.use(router);

app.mount("#app");
