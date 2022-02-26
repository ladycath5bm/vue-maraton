import { state } from './state';
import { todoServices } from '../../js/services/todoServices';

export const actions = {
    initialize: async () => {
        console.log('TODO APP | initialize');
        await actions.refreshToDos();
    },

    refreshToDos: async () => {
        state.todos = (await todoServices.all()).data.data;
    },

    closeModal: () => {
        state.modal = null;
    },
};
