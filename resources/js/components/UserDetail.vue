<template>
    <div class="user-detail">
        <div class="user-detail-container" v-if="Object.keys(userDetailInfo).length !== 0">
            <div class="user-name">
                Name: {{ userDetailInfo.name.last }} {{ userDetailInfo.name.first }}
            </div>
            <div class="user-email">
                Email: {{ userDetailInfo.email }}
            </div>
            <div class="user-dob">
                DOB: {{ userDetailInfo.dob.date }}
            </div>
            <div class="user-gender">
                Gender: {{ userDetailInfo.gender }}
            </div>
            <div class="user-address">
                Address: {{ userDetailInfo.location.city }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        userDetailInfo: {
            type: Object
        }
    },
    // You can also write props: ['userDetailInfo'] but the above is recommended
}
</script>

<style lang="scss" scoped>
</style>
