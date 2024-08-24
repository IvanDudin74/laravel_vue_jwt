<script>
export default {
    name: "IndexComponent",

    data() {
        return{
            accessToken: null,
        }
    },

    methods: {
        getAccessToken(){
            this.accessToken = localStorage.getItem('access_token')
        }
    },

    mounted() {
        this.getAccessToken()
    },

    updated() {
        this.getAccessToken()
    },
}
</script>

<template>
    <div>
        <br><br>
        This is Main IndexComponent<br><br>
        <router-link v-if="accessToken" :to="{ name: 'fruit.index' }" :key="$route.fullPath">List of fruits</router-link><br>
        <router-link v-if="!accessToken" :to="{ name: 'user.login' }" :key="$route.fullPath">Login</router-link><br>
        <router-link v-if="!accessToken" :to="{ name: 'user.registration' }"  :key="$route.fullPath">Registration</router-link><br>
        <router-link v-if="accessToken" :to="{ name: 'user.personal' }" :key="$route.fullPath">Personal</router-link><br>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
