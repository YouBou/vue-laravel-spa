import {createRouter, createWebHistory} from 'vue-router';
import TaskListComponent from "./components/TaskListComponent";

const routes = [
    {
        path: '/tasks',
        component: TaskListComponent,
        name: 'task.list',
    }
];

const router = createRouter({
    routes,
    history: createWebHistory(),
})

export default router;