<template>
    <LayoutModal>
        <button class="absolute right-12">
            <PencilAltIcon class="h-5 text-indigo-400 hover:text-indigo-700" />
        </button>
        <h2 class="font-semibold text-gray-800">{{ todo.title }}</h2>
        <Timestamp :date="todo.created_at" />
        <p class="mt-2 w-96 text-sm">
            {{ todo.description ?? 'Has no description' }}
        </p>
    </LayoutModal>
</template>

<script>
import Timestamp from '../Timestamp.vue';
import LayoutModal from './LayoutModal.vue';
import { state } from '../../store';
import { PencilAltIcon } from '@heroicons/vue/outline';

export default {
    components: { Timestamp, LayoutModal, PencilAltIcon },
    setup() {
        return { todo: state.todoSelected };
    },
};
</script>
