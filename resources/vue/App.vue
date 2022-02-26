<template>
    <ToDoModal v-if="false" />
    <DeleteToDoModal v-if="false" />
    <div class="flex h-screen flex-col">
        <HeaderApp />
        <div class="flex flex-grow justify-center">
            <div class="flex flex-col gap-4 bg-gray-200 py-4 px-8">
                <CreateTodoForm />
                <div class="relative flex flex-col items-center">
                    <h2 class="z-10 bg-gray-200 px-4 text-xl text-gray-500">List</h2>
                    <hr class="absolute top-3 w-full border-2 border-gray-500" />
                    <ul class="mt-4 flex flex-col gap-2">
                        <ToDoCard />
                        <ToDoCard />
                        <ToDoCard />
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import HeaderApp from './components/HeaderApp.vue';
import CreateTodoForm from './components/forms/CreateTodoForm.vue';
import ToDoCard from './components/ToDoCard.vue';
import ToDoModal from './components/modals/ToDoModal.vue';
import DeleteToDoModal from './components/modals/DeleteToDoModal.vue';

export default {
    components: { HeaderApp, CreateTodoForm, ToDoCard, ToDoModal, DeleteToDoModal },
};
</script>
