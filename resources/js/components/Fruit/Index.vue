<script>
    import api from "../../api"

    export default {
        name: "Index",

        data() {
            return {
                fruits: null,
            }
        },

        methods: {
            getFruits() {
                api.get("/api/auth/fruits/")
                    .then(res => {
                        if (res) {
                            this.fruits = res.data.data
                        }
                    })
            },
        },

        mounted() {
            this.getFruits()
        }
    }

</script>


<template>
    <br><br>
    List of fruits

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="fruit in fruits">
            <th scope="row">{{ fruit.id }}</th>
            <td>{{ fruit.name }}</td>
            <td>{{ fruit.price }}</td>
        </tr>
        </tbody>
    </table>
</template>



<style scoped>

</style>
