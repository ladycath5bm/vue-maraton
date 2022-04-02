<template>
    <Component :is="modalSelected" />
    <Dashboard :importRoute="importRoute"/>
</template>

<script>
import ToDoModal from './components/modals/ToDoModal.vue';
import DeleteToDoModal from './components/modals/DeleteToDoModal.vue';
import Dashboard from './components/Dashboard.vue';

import { state, actions } from './store';
import { computed } from '@vue/runtime-core';

export default {
    components: { ToDoModal, DeleteToDoModal, Dashboard },
    setup() {
        actions.initialize();
        const modalSelected = computed(() => state.modal);

        return { modalSelected };
    },
};
</script>
