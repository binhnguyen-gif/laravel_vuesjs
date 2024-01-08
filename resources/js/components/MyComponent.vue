<script setup>
// vue 3
// c1
import {ref} from "vue";
import {reactive} from 'vue'

const msg = ref('Hello World');

function updateMsg() {
    msg.value = 'My name is Jammes';
}

// c2

const state = reactive({message: 'Hello World!'})

function updateMessage() {
    state.message = "My name is James"
}
</script>
<template>
    <div class="my-component">This is my first component - {{ msg }} - {{ state.message }}</div>
    <button @click="updateMessage">Update</button>
</template>

<script>
//vue js 2
// export default {
//     data() {
//         return {
//             msg: 'Hello World!'
//         }
//     },
//     methods: {
//         updateMsg() {
//             this.msg = "My name is James"
//         }
//     }
// }
</script>

<style lang="scss" scoped>
.my-component {
    color: red;
}
</style>
