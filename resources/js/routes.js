import {createRouter, createWebHistory} from 'vue-router';
import TaskListComponent from "./components/TaskListComponent";
import TaskShowComponent from "./components/TaskShowComponent";

const routes = [
    {
        path: '/tasks',
        component: TaskListComponent,
        name: 'task.list',
    },
    {
        path: '/tasks/:taskId',
        component: TaskShowComponent,
        name: 'task.show',
        props: true
    }
];

const router = createRouter({
    routes,
    history: createWebHistory(),
})

export default router;