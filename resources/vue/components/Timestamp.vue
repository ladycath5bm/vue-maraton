<template>
    <div class="flex items-center gap-1 text-xs font-semibold italic text-gray-500">
        <ClockIcon class="h-4" />
        <span>creado hace 2 horas</span>
    </div>
</template>

<script>
import { ClockIcon } from '@heroicons/vue/outline';
export default {
    components: { ClockIcon },
};
</script>
