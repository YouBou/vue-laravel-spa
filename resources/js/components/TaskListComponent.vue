<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Person In Charge</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            <tr v-for="(task, index) in tasks" :key="index">
                <th scope="row">{{ task.id }}</th>
                <td>{{ task.title }}</td>
                <td>{{ task.content }}</td>
                <td>{{ task.personInCharge }}</td>
                <td>
                    <router-link v-bind:to="{name: 'task.show', params: {taskId: task.id}}">
                        <button class="btn btn-primary">Show</button>>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'task.edit', params: {taskId: task.id}}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
// TODO composition apiについて確認
import {defineComponent, onMounted, ref} from "vue";

    export default defineComponent({
        setup() {
            const tasks = ref([]);
            const getTasks = () => {
                axios.get('/api/tasks').then((res) => {tasks.value = res.data});
            };
            onMounted(() => {
                getTasks();
            });
        return {
            tasks
        };
    }});
</script>
