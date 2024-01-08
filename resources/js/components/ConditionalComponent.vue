<template>
    <div>
<!--        <div v-if="isActive == true">Show popup</div>-->
<!--        <div v-if="isActive == false">Hide popup</div>-->
        <div v-if="isActive == true">Test 1</div>
        <div v-else-if="isActive == false">Test 2</div>
        <div v-else>Test 3</div>
        <button @click="isActive = !isActive">
            onClick
        </button>
    </div>
</template>

<script setup>
    import { ref } from 'vue';

    let isActive = ref(true);

    function update() {
        isActive.value = false;
    }
</script>
