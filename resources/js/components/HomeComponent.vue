<template>
    <div>
        <h2 class="title">Home</h2>
        <section>
            <div class="about">
                <h3>Binding data</h3>
                <p>Binding: {{
                        message
                    }}</p>

                <button class="btn" @click="updateMessage('Hello', $event)">Update data</button>
            </div>
        </section>
        <section class="watch">
            <h2 class="title">
                Watch
            </h2>
            <watch-component></watch-component>
        </section>
    </div>
</template>

<script>
import WatchComponent from "./WatchComponent.vue";

export default {
    data() {
        return {
            message: "Learn to V"
        }
    },
    computed: {},
    watch: {},
    methods: {
        updateMessage(v, event) {
            console.log(v);
            console.log(event);
            this.message = "Update to v1"
        }
    }
    ,
    components: {
        WatchComponent
    }
}
</script>
<script setup>
import {ref} from "vue";

const msg = ref("Hello World");
</script>


<style lang="css" scoped>
h2.title {
    text-align: center;
}

.btn {
    border-radius: 15px;
    background-color: #ccc;
    color: #fff;
}

.btn:hover {
    opacity: 0.5;
}
</style>
