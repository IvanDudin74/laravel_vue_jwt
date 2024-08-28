<script>
import api from "../api"
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
        },

        logout() {
            api.post('api/auth/logout')
                .then(res => {
                    localStorage.removeItem('access_token')
                    this.$router.push({ name: 'user.login' })
                })
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
        <a v-if="accessToken" @click.prevent="logout()" href="#">Logout</a><br>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
