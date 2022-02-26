<template>
    <div class="flex items-center gap-1 text-xs font-semibold italic text-gray-500">
        <ClockIcon class="h-4" />
        <span>{{ time }}</span>
    </div>
</template>

<script>
import { formatDistanceToNow } from 'date-fns';
// import { es } from 'date-fns/locale';
import { ClockIcon } from '@heroicons/vue/outline';
export default {
    props: { date: { type: String, required: true } },
    components: { ClockIcon },
    setup(props) {
        // return { time: formatDistanceToNow(new Date(props.date), { locale: es, addSuffix: true }) };
        return { time: formatDistanceToNow(new Date(props.date), { addSuffix: true }) };
    },
};
</script>
