<template>
    <div class="my-4">
        <h4>Редактирование записи</h4>
        <div class="form-group w-50">
            <div class="my-1">
                <input type="text" v-model="name" placeholder="Имя" class="form-control">
            </div>
            <div class="my-1">
                <input type="number" v-model="age" placeholder="Возраст" class="form-control">
            </div>
            <div class="my-1">
                <input type="text" v-model="job" placeholder="Должность" class="form-control">
            </div>
            <div class="my-3">
                <input :disabled="!isDisabled" @click.prevent="update" class="btn btn-primary" type="submit" value="Обновить">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Edit",
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
                    this.name = res.data.data.name
                    this.age = res.data.data.age
                    this.job = res.data.data.job
                })
        },
        update() {
            axios.patch(`/api/people/${this.$route.params.id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$router.push({name: 'people.show', params: {id: this.$route.params.id}})
                })
                .catch(res => {
                    console.log('Валидация не пройдена')
                })
        }
    },
    computed: {
        isDisabled() {
            return this.name && this.age && this.job
        }
    }
}
</script>

<style scoped>

</style>
