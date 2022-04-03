<script setup>
  import Metric1 from "./components/Metric1.vue";
  import data from "/Fixtures/todoData.json";

  const m1Data = {
    labels: ['Completed', 'Pending', 'Processing'],
    data: [data.completedTodos, data.pendingTodos, data.inProcessTodos]
  }
</script>

<template>
  <div class="min-h-screen grid grid-cols-2">
    <div class="bg-gray-100">
      <Metric1 v-bind="m1Data"/>
    </div>
    <div class="bg-green-400"></div>
  </div>  
</template>


<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
