<template>
    <li class="flex cursor-pointer items-center gap-4 rounded bg-white px-4 py-2 shadow-md duration-100 hover:scale-105">
        <input type="checkbox" class="rounded-full text-green-600 focus:ring-green-600" />
        <div class="flex flex-col justify-center">
            <span class="font-semibold text-gray-800">Hacer las compras</span>
            <div class="flex items-center gap-1 text-xs font-semibold italic text-gray-500">
                <ClockIcon class="h-4" />
                <span>creado hace 2 horas</span>
            </div>
        </div>
    </li>
</template>

<script>
import { ClockIcon } from '@heroicons/vue/outline';

export default {
    components: { ClockIcon },
};
</script>
