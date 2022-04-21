import {createRouter, createWebHistory} from 'vue-router';
import TaskListComponent from "./components/TaskListComponent";
import TaskShowComponent from "./components/TaskShowComponent";
import TaskCreateComponent from "./components/TaskCreateComponent";
import TaskEditComponent from "./components/TaskEditComponent";

const routes = [
    {
        path: '/tasks',
        component: TaskListComponent,
        name: 'task.list',
    },
    {
        path: '/tasks/create',
        component: TaskCreateComponent,
        name: 'task.create',
    },
    {
        path: '/tasks/:taskId',
        component: TaskShowComponent,
        name: 'task.show',
        props: true
    },
    {
        path: '/tasks/:taskId/edit',
        component: TaskEditComponent,
        name: 'task.edit',
        props: true
    }
];

const router = createRouter({
    routes,
    history: createWebHistory(),
})

export default router;
