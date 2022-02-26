<template>
    <div class="flex flex-col gap-2">
        <div class="flex gap-2">
            <input
                v-model="title"
                class="rounded focus:border-gray-500 focus:ring-gray-500"
                type="text"
                placeholder="ToDo Name"
            />
            <button @click="createTodo" class="btn btn-primary">Create</button>
        </div>
        <textarea
            class="rounded focus:border-gray-500 focus:ring-gray-500"
            v-model="description"
            cols="30"
            rows="2"
            placeholder="Description"
        ></textarea>
    </div>
</template>

<script>
import { ref } from 'vue';
import { todoServices } from '../../../js/services/todoServices';
import { actions } from '../../store';

export default {
    setup() {
        const title = ref(null);
        const description = ref(null);

        const createTodo = async () => {
            await todoServices.create({ title: title.value, description: description.value });
            actions.refreshToDos();
            title.value = null;
            description.value = null;
        };

        return { title, description, createTodo };
    },
};
</script>
