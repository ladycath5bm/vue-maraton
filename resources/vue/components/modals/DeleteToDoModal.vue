<template>
    <LayoutModal>
        <h2 class="font-semibold text-gray-800">Delete ToDo</h2>
        <div class="flex items-center gap-1 text-xs font-semibold italic text-yellow-500">
            <ExclamationIcon class="h-4" />
            <span>This action can not be undone</span>
        </div>
        <div class="mt-4 flex justify-around">
            <button @click="deleteToDo" class="btn btn-danger text-xs">Delete</button>
            <button @click="close" class="btn btn-secondary text-xs">Cancel</button>
        </div>
    </LayoutModal>
</template>

<script>
import LayoutModal from './LayoutModal.vue';
import { actions, state } from '../../store';
import { XIcon, ExclamationIcon } from '@heroicons/vue/outline';
import { todoServices } from '../../../js/services/todoServices';

export default {
    components: { XIcon, ExclamationIcon, LayoutModal },
    setup() {
        const deleteToDo = async () => {
            await todoServices.destroy(state.todoSelected.id);
            actions.closeModal();
            actions.refreshToDos();
        };

        return { close: actions.closeModal, deleteToDo };
    },
};
</script>
