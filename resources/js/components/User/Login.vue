<script>
export default {
    name: "Login",

    data() {
        return {
            email: null,
            password: null,
        }
    },

    methods: {
        login() {
            axios.post("/api/auth/login", {email: this.email, password: this.password})
                .then(res => {
                    localStorage.access_token = res.data.access_token
                    this.$router.push({ name: 'user.personal' })
                })
        }
    }
}
</script>


<template>
    <br><br>
    <div class="w-25">
        Login
        <input v-model="email" type="email" class="m-3 form-control" placeholder="email">
        <input v-model="password" type="password" class="m-3 form-control" placeholder="password">
        <input @click.prevent="this.login()" type="submit" class="m-3 btn btn-primary" value="Login">
    </div>
</template>


<style scoped>

</style>
