<template>
    <li
        class="flex cursor-pointer rounded bg-white shadow-md duration-100 hover:scale-105 overflow-hidden"
    >
        <div class="flex items-center gap-4 px-4 py-2">
            <input type="checkbox" class="rounded-full text-green-600 focus:ring-green-600" />
            <div class="flex flex-col justify-center">
                <span class="font-semibold text-gray-800">Hacer las compras</span>
                <Timestamp />
            </div>
        </div>
        <button class="bg-red-400 flex items-center px-2 hover:bg-red-700" title="Delete ToDo">
            <TrashIcon class="h-5 text-white"/>
        </button>
    </li>
</template>

<script>
import { ClockIcon, TrashIcon } from '@heroicons/vue/outline';
import Timestamp from './Timestamp.vue';

export default {
    components: { ClockIcon, TrashIcon, Timestamp },
};
</script>
