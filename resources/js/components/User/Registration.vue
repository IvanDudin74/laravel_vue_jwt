<script>
export default {
    name: "Registration",

    data() {
        return {
            name: null,
            email: null,
            password: null,
            password_confirmation: null,
            error: null,
        }
    },

    methods: {
        store() {
            axios.post("/api/users/", {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation:
                this.password_confirmation
            })
                .then(res => {
                    localStorage.access_token = res.data.access_token;
                    this.$router.push({ name: 'user.personal' })
                })
                .catch(error => {
                    this.error = error.response.data.error
                })
        }
    },

    mounted() {
    }
}
</script>


<template>
    <br><br>
    <div class="w-25">
        Registration
        <input v-model="name" type="text" class="m-3 form-control" placeholder="name">
        <input v-model="email" type="email" class="m-3 form-control" placeholder="email">
        <input v-model="password" type="password" class="m-3 form-control" placeholder="password">
        <input v-model="password_confirmation" type="password" class="m-3 form-control" placeholder="repeat password">
        <div class="text-danger">{{ this.error }}</div>
        <input @click.prevent="this.store" type="submit" class="m-3 btn btn-primary" value="Registration">
    </div>
</template>


<style scoped>

</style>
