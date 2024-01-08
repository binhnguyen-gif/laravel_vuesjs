<template>
    <div class="list-user mt-4">
        <table class="tbl-list-user">
            <thead>
            <th>Name</th>
            <th>Location</th>
            <th>DOB</th>
            </thead>
            <tbody>
            <tr v-for="user in userData">
                <td><a @click="selectUser(user)" class="cursor-pointer">{{ user.name.title }} - {{ user.name.last }}
                    {{ user.name.first }}</a>
                </td>
                <td>{{ user.location.city }}</td>
                <td>{{ user.dob.date }}</td>
            </tr>
            </tbody>
        </table>
        <p id="my-text">
            Test copon
        </p>
    </div>
</template>

<script>
import data from '../data/data.json';

export default {

    data() {
        return {
            message: 'test',
            userData: data,
        }
    },
    methods: {
        selectUser(user) {
            this.$emit('userSelected', user);
        }
    },
    // beforeCreate() {
    //     console.log(this.message)
    // },
    beforeMount() {
    },
    created() {
     console.log(this.message);
     console.log(document.getElementById('my-text').innerHTML)
    }
}
</script>

<style lang="scss" scoped>
</style>
