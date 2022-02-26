<template>
    <LayoutModal>
        <button class="absolute right-12">
            <PencilAltIcon class="h-5 text-indigo-400 hover:text-indigo-700" />
        </button>
        <h2 class="font-semibold text-gray-800">MODAL TITLE</h2>
        <Timestamp />
        <p class="mt-2 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore harum iure temporibus exercitationem
            corrupti nulla, at inventore voluptatum sit provident ipsam quasi eaque delectus ducimus alias perferendis
            veritatis explicabo quod?
        </p>
    </LayoutModal>
</template>

<script>
import Timestamp from '../Timestamp.vue';
import LayoutModal from './LayoutModal.vue';
import { PencilAltIcon } from '@heroicons/vue/outline';

export default {
    components: { Timestamp, LayoutModal, PencilAltIcon },
};
</script>
