import { createApp } from "vue";
import App from "./App";
import router from "./router";
import store from "./store";
import "./index.css";
import 'tw-elements';

createApp(App).use(router).use(store).mount("#app");
