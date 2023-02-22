<template>
    <div class="my-4" v-if="person">
        <p>Имя: {{ person.name }}</p>
        <p>Возраст: {{ person.age }}</p>
        <p>Должность: {{ person.job }}</p>
        <router-link :to="{ name: 'people.edit', params: { id: person.id }}" class="btn btn-outline-success">
            Редактировать
        </router-link>
    </div>
</template>

<script>
export default {
    name: "Show",
    data() {
        return {
            person: null
        }
    },
    mounted() {
        this.getPerson()
    },
    methods: {
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}`)
                .then(res => {
                    this.person = res.data.data
                })
        }
    }
}
</script>

<style scoped>

</style>
