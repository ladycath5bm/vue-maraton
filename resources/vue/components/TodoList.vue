<template>
    <div class="relative flex flex-col items-center">
        <h2 class="z-10 bg-gray-200 px-4 text-xl text-gray-500">List</h2>
        <hr class="absolute top-3 w-full border-2 border-gray-500" />
        <ul v-if="todos" class="mt-4 flex flex-col gap-2">
            <ToDoCard v-for="todo in todos" :key="todo.id" :todo="todo" />
        </ul>
        <div v-else>There are not ToDos</div>
    </div>
</template>

<script>
import ToDoCard from './ToDoCard.vue';
import { computed } from 'vue';
import { state } from '../store';

export default {
    components: { ToDoCard },
    setup() {
        const todos = computed(() => state.todos);
        return { todos };
    },
};
</script>
