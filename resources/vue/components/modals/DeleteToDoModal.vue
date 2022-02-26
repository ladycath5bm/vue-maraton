<template>
    <div class="absolute z-40 flex h-screen w-screen items-center justify-center bg-black bg-opacity-25">
        <div class="relative max-w-md rounded-md bg-white px-4 py-2 shadow-lg">
            <XIcon class="absolute right-4 h-5 cursor-pointer text-gray-400" />
            <h2 class="font-semibold text-gray-800">Delete ToDo</h2>
            <div class="flex items-center gap-1 text-xs font-semibold italic text-yellow-500">
                <ExclamationIcon class="h-4" />
                <span>This action can not be undone</span>
            </div>
            <div class="flex justify-around mt-4">
                <button class="btn btn-danger text-xs">Delete</button>
                <button class="btn btn-secondary text-xs">Cancel</button>
            </div>
        </div>
    </div>
</template>

<script>
import { XIcon, ExclamationIcon } from '@heroicons/vue/outline';

export default {
    components: { XIcon, ExclamationIcon },
};
</script>
