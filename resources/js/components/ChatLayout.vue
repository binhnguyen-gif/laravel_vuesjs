<template>
    <div class="message-box">
        <input type="text" v-model="message" @keyup.enter="sendMessage" class="message-input"
               placeholder="Type message..."/>
        <button type="button" class="message-submit" @click="sendMessage">Send</button>
    </div>

</template>
<script setup>
import {ref} from 'vue';

const message = ref('')
const list_messages = ref([])

async function loadMessage() {
    try {
        const response = await axios.get('/messages')
        list_messages.value = response.data
    } catch (error) {
        console.log(error)
    }
}

async function sendMessage() {
    try {
        const response = await axios.post('/messages', {
            message: message.value
        })
        list_messages.value.push(response.data.message)
        message.value = ''
    } catch (error) {
        console.log(error)
    }
}

loadMessage()
</script>

