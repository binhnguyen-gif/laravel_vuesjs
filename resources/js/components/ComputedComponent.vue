<!--<script setup>-->
<!--    import {ref,computed} from "vue";-->

<!--    let count = ref(13);-->
<!--    const number = ref(0)-->

<!--    let msg = computed(() => {-->
<!--        console.log(1);-->
<!--        return `This is ${count.value} - ${number.value}`;-->
<!--    })-->

<!--    // function updateMsg() {-->
<!--    //     count.value = 'Test';-->
<!--    // }-->

<!--    function updateNumber() {-->
<!--        number.value = 0;-->
<!--        console.log('update');-->
<!--        number.value = parseInt(Math.random() * 100);-->
<!--    }-->
<!--</script>-->

<template>
    <div>
        <p>Learning Computed: {{ setData }}</p>
        <br>
        <button @click="updateNumber">Submit</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            initNumber: 0,
        }
    },
    computed: {
        setData() {
            console.log(1);
            return `Test: ${this.initNumber}`;
        }
    },
    methods: {
        updateNumber() {
            // this.initNumber = parseInt(Math.random() * 100);
            this.initNumber = 0;
        }
    }
}
</script>
