<template>
    <div class="flex h-screen flex-col">
        <HeaderApp />
        <div class="flex flex-grow justify-center">
            <div class="flex flex-col gap-4 bg-gray-200 py-4 px-8">
                <CreateTodoForm :importRoute="importRoute"/>
                <TodoList />
            </div>
        </div>
    </div>
</template>

<script>
import HeaderApp from './HeaderApp.vue';
import CreateTodoForm from './forms/CreateTodoForm.vue';
import TodoList from './TodoList.vue';

export default {
    components: { HeaderApp, CreateTodoForm, TodoList },

};
</script>
