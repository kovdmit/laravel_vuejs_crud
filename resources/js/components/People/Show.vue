<template>
    <div class="my-4">
        <p>Имя: {{ name }}</p>
        <p>Возраст: {{ age }}</p>
        <p>Должность: {{ job }}</p>
    </div>
</template>

<script>
export default {
    name: "Show",
    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },
    mounted() {
        this.getPerson()
    },
    methods: {
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}`)
                .then(res => {
                    this.name = res.data.name
                    this.age = res.data.age
                    this.job = res.data.job
                })
        }
    }
}
</script>

<style scoped>

</style>
