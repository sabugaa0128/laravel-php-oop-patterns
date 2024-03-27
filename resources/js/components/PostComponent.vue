<script>
    import SinglePostComponent from "./SinglePostComponent.vue";
    export default {
        name: "PostComponent",

        data() {
            return {
                name: 'Test components',
                persons: null
            }
        },
        mounted() {
            this.getPersons()
        },
        methods: {
            getPersons() {
                axios.get('/persons')
                    .then(result => {
                        this.persons = result.data
                        console.log(result)
                    })
            }
        },

        computed: {

        },

        components: {
            SinglePostComponent
        }
    }
</script>

<template>
    <div>
         Post component test block {{ name }}
        <SinglePostComponent></SinglePostComponent>
        <button>Click</button>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
