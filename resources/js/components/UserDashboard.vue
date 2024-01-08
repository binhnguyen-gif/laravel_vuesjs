<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <h4>List User</h4>
            <ListUser @userSelected="userSelected"></ListUser>
        </div>
        <div class="user-detail-comp mt-4">
            <h4>User Detail</h4>
            <UserDetail :userDetailInfo="userDetail"></UserDetail>
        </div>
    </div>
</template>

<script>
import ListUser from './ListUser.vue'
import UserDetail from './UserDetail.vue'
export default {
    components: {
        ListUser,
        UserDetail
    },
    data() {
        return {
            userDetail: {},
        }
    },
    methods: {
        userSelected (user) {
            console.log(user);
            this.userDetail = user;
        }
    }
}
</script>

<style lang="scss" scoped>
</style>
