<template>
    <div class="absolute z-40 flex h-screen w-screen items-center justify-center bg-black bg-opacity-25">
        <div class="relative max-w-md rounded-md bg-white px-4 py-2 shadow-lg">
            <button class="absolute right-4">
                <XIcon class="h-5 text-gray-400 hover:text-gray-600" />
            </button>
            <button class="absolute right-12">
                <PencilAltIcon class="h-5 text-indigo-400 hover:text-indigo-700" />
            </button>
            <h2 class="font-semibold text-gray-800">MODAL TITLE</h2>
            <Timestamp />
            <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore harum iure temporibus exercitationem
                corrupti nulla, at inventore voluptatum sit provident ipsam quasi eaque delectus ducimus alias
                perferendis veritatis explicabo quod?
            </p>
        </div>
    </div>
</template>

<script>
import Timestamp from '../Timestamp.vue';
import { XIcon, PencilAltIcon } from '@heroicons/vue/outline';

export default {
    components: { Timestamp, XIcon, PencilAltIcon },
};
</script>
