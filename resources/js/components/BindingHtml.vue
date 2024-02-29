<template>
    <div class="binding-html">
        <!--        <div class="text-title" :class="{active: isActive}">-->
        <!--            This is text-->
        <!--        </div>-->
        <!--        <div>-->
        <!--            <button @click="isActive = !isActive">Active text</button>-->
        <!--        </div>-->
        <p>example scoped css</p>
        <h2 class="text-scoped">How are you?</h2>

        <Scoped :class="text-scoped"></Scoped>
    </div>
</template>

<script>
import Scoped from './ScopedComponent.vue';

export default {
    data() {
        return {
            isActive: false
        }
    },
    components: {
        Scoped
    }
}
</script>

<style lang="scss" scoped>
.active {
    color: red;
}

.text-scoped {
    color: red;
}
</style>
