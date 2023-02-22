<template>
    <div class="my-4" v-if="person">
        <p>Имя: {{ this.person.name }}</p>
        <p>Возраст: {{ this.person.age }}</p>
        <p>Должность: {{ this.person.job }}</p>
        <router-link :to="{ name: 'people.edit', params: { id: this.person.id }}" class="btn btn-success">
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
                    this.person = res.data
                })
        }
    }
}
</script>

<style scoped>

</style>
