<template>
    <li
        @click="showToDo(todo)"
        :class="{ 'opacity-70': todo.done }"
        class="flex cursor-pointer justify-between overflow-hidden rounded bg-white shadow-md duration-100 hover:scale-105"
    >
        <div class="flex items-center gap-4 px-4 py-2">
            <input
                :checked="todo.done"
                @click="(event) => toggleStatus(todo.id, event)"
                type="checkbox"
                class="rounded-full text-green-600 focus:ring-green-600"
            />
            <div class="flex flex-col justify-center">
                <span :class="{ 'font-semibold text-gray-800': true, 'line-through': todo.done }">{{
                    todo.title
                }}</span>
                <Timestamp :date="todo.created_at" />
            </div>
        </div>
        <button
            @click="(event) => deleteToDo(todo, event)"
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
import { actions, state } from '../store';
import { TODOS } from '../../js/constants/todos';
import { todoServices } from '../../js/services/todoServices';

export default {
    props: { todo: { type: Object, required: true } },
    components: { ClockIcon, TrashIcon, Timestamp },
    setup() {
        const showToDo = (todo) => {
            console.log('show');
            state.todoSelected = todo;
            state.modal = TODOS.SHOW;
        };

        const deleteToDo = (todo, event) => {
            event.stopPropagation();
            state.todoSelected = todo;
            state.modal = TODOS.DELETE;
        };

        const toggleStatus = async (id, event) => {
            event.stopPropagation();
            await todoServices.toggle(id);
            actions.refreshToDos();
        };

        return { showToDo, deleteToDo, toggleStatus };
    },
};
</script>
