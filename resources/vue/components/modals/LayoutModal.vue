<template>
    <div @click="close" class="absolute z-40 flex h-screen w-screen items-center justify-center bg-black bg-opacity-25">
        <div @click="preventClose" class="relative max-w-md rounded-md bg-white px-4 py-2 shadow-lg">
            <button class="absolute right-4">
                <XIcon @click="close" class="h-5 text-gray-400 hover:text-gray-600" />
            </button>
            <slot />
        </div>
    </div>
</template>

<script>
import Timestamp from '../Timestamp.vue';
import { XIcon, PencilAltIcon } from '@heroicons/vue/outline';
import { actions } from '../../store';

export default {
    components: { Timestamp, XIcon, PencilAltIcon },
    setup() {
        return { close: () => actions.closeModal(), preventClose: (event) => event.stopPropagation() };
    },
};
</script>
