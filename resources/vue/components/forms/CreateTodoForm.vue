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
<!-- component -->
        <form id="import" method="POST" action="/import" accept-charset="utf-8" enctype="multipart/form-data">
        <input type="hidden" name="_token" :value="token">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="rounded-md bg-gray-100" type="file" name="file" placeholder="file">
                    </div>
                </div>              
                <div >
                    <button type="submit" class="btn btn-primary btn-md w-100" id="file" form="import">Import</button>
                </div>
            </div>     
        </form>
<!--export-->
    </div>
        <form id="export" method="GET" action="/export" accept-charset="utf-8">
        <input type="hidden" name="_token" :value="token">
            <div class="row">
            <select name="export" id="export">
            <option value="PENDING">PENDING</option>
            <option value="PROCESSING">PROCESSING</option>
            <option value="FINISHED">FINISHED</option>
            </select>
                <div >
                    <button type="submit" class="btn btn-primary btn-md w-100" id="file" form="export">Export</button>
                </div>
            </div>     
        </form>
    
    
</template>

<script>
import { ref } from 'vue';
import { todoServices } from '../../../js/services/todoServices';
import { actions } from '../../store';

export default {
    setup() {
        const title = ref(null);
        const description = ref(null);

        const token = document.querySelector('meta[name="csrf-token"]').content

        const createTodo = async () => {
            await todoServices.create({ title: title.value, description: description.value });
            actions.refreshToDos();
            title.value = null;
            description.value = null;
        };

        return { title, description, createTodo, token };
    },

};
</script>
