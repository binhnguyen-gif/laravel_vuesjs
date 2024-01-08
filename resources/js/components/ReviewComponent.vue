<script setup>
//c1
// import {ref} from "vue";
// const message = ref('Hello World');
//
// function updateMessage() {
//     message.value = 'Update ';
// }
//c2
// import {reactive} from "vue";
//
// const state = reactive({msg: "Hello World"});
// let count = reactive({count: 102});
//
//
// function updateMsg() {
//     state.msg = 'Test';
//     count.count++;
// }
</script>
<template>
    <div>
        <p>Test: {{ msg }}</p>
        <button @click="updateMsg">Submit</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            msg: "hello world"
        }
    },

    methods: {
        updateMsg() {
            this.msg = "update"
        }
    }
}
</script>

