<script>
export default {
    name: "IndexComponent"
}
</script>

<template>
    <div>
        <br><br>
        This is Main IndexComponent<br><br>
        <router-link :to="{ name: 'fruit.index' }">List of fruits</router-link><br>
        <router-link :to="{ name: 'user.login' }">Login</router-link><br>
        <router-link :to="{ name: 'user.registration' }">Registration</router-link><br>
        <router-link :to="{ name: 'user.personal' }">Personal</router-link><br>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
