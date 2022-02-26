<template>
    <li
        class="flex cursor-pointer justify-between overflow-hidden rounded bg-white shadow-md duration-100 hover:scale-105"
    >
        <div class="flex items-center gap-4 px-4 py-2">
            <input type="checkbox" class="rounded-full text-green-600 focus:ring-green-600" />
            <div class="flex flex-col justify-center">
                <span class="font-semibold text-gray-800">{{ todo.title }}</span>
                <Timestamp />
            </div>
        </div>
        <button
            @click="deleteToDo(todo.id)"
            class="flex items-center bg-red-400 px-2 hover:bg-red-700"
            title="Delete ToDo"
        >
            <TrashIcon class="h-5 text-white" />
        </button>
    </li>
</template>

<script>
import { ClockIcon, TrashIcon } from '@heroicons/vue/outline';
import Timestamp from './Timestamp.vue';
import { state } from '../store';
import { TODOS } from '../../js/constants/todos';

export default {
    props: { todo: { type: Object, required: true } },
    components: { ClockIcon, TrashIcon, Timestamp },
    setup() {
        const deleteToDo = async (id) => {
            state.todoIdSelected = id;
            state.modal = TODOS.DELETE;
        };

        return { deleteToDo };
    },
};
</script>
