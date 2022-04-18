import { createApp } from 'vue';
import router from "./routes";
import HeaderComponent from "./components/HeaderComponent";


require('./bootstrap');

const app = createApp({
    components: {
        'header-component': HeaderComponent,
    }
});

app.use(router);
app.mount('#app')

