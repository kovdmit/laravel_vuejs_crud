<template>
    <div class="my-4">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Должность</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <tr>
                    <th scope="row">{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            people: null
        }
    },
    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
                })
        }
    },
    mounted() {
        this.getPeople()
    }
}
</script>

<style scoped>

</style>
