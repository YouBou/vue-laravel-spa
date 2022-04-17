import { createApp } from 'vue';
import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import TaskListComponent from "./components/TaskListComponent";

require('./bootstrap');

VueRouter.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/tasks',
            name: 'task.List',
            component: TaskListComponent
        },
    ]
});

const app = createApp({})
app.component('header-component', HeaderComponent);
app.mount('#app')

