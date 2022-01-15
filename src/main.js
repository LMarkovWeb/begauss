import { createApp } from "vue";
import { createGtm } from '@gtm-support/vue-gtm';
import App from "./App";
import router from "./router";
import store from "./store";
import "./index.css";
import 'tw-elements';

const GTM_Params = {
    id: 'GTM-5WMVV5H',
    enabled: true,
}

createApp(App).use(router).use(store).use(createGtm(GTM_Params)).mount("#app");
