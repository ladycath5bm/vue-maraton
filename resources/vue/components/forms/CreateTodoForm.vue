<template>
    <div class="flex gap-2">
        <input
            v-model="title"
            class="rounded focus:border-gray-500 focus:ring-gray-500"
            type="text"
            placeholder="ToDo Name"
        />
        <button @click="createTodo" class="btn btn-primary">Create</button>
    </div>
</template>

<script>
import { ref } from 'vue';
import { todoServices } from '../../../js/services/todoServices';
import { actions } from '../../store';


export default {
    setup() {
        const title = ref(null);

        const createTodo = async () => {
            await todoServices.create({ title: title.value });
            actions.refreshToDos();
        };

        return { title, createTodo };
    },
};
</script>
