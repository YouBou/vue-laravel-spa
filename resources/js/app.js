import HeaderComponent from "./components/HeaderComponent";
import { createApp } from 'vue';

require('./bootstrap');

const app = createApp({})
app.component('header-component', HeaderComponent);
app.mount('#app')
