<template>
    <div>
        <div>Name: {{ person.name }}</div>
    </div>
    <div>
        <div>Nickname: {{ person.nickname }}</div>
    </div>
    <div>
        <button @click="changeName">Change Name</button>
    </div>
    <div>
        <button @click="changeNickname">Change Nick Name</button>
    </div>
    <div>
        <button @click="changeNicknameProperly">Change Nick name properly</button>
    </div>
</template>


<script>
export default {
    data() {
        return {
            person: {
                name: 'Edson'
            }
        }
    },
    methods: {
        changeName() {
            this.person.name = 'Arantes';
        },
        changeNickname() {
            this.person.nickname = Math.random().toString(36).substring(7);
            // this.$forceUpdate();
        },
        changeNicknameProperly() {
            // Vue.set(this.person, 'nickname', 'Louis');
            this.person['nickname'] = 'Louis';
        }
    }
}
</script>

<style lang="scss" scoped>
</style>
