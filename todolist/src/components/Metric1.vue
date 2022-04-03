<script setup>
    import { Chart, DoughnutController, ArcElement, Tooltip } from 'chart.js';
    import { DoughnutChart } from 'vue-chart-3';
    Chart.register(DoughnutController, ArcElement, Tooltip);

    const props = defineProps({
        labels: Array,
        data: Array,
    })
        
    const testData = {
        labels: props.labels,
        datsets: [
            {
                data: props.data,
                backgroundColor: ['#77CEFF', '#A5C8ED', '#123E6B'],
            },
        ],
    };
</script>

<template>
    <DoughnutChart :chartData="testData"/>
</template>