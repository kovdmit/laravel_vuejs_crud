<template>
    <div class="my-4">
        <h4>Добавление новой записи</h4>
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
                <input :disabled="!isDisabled" @click.prevent="store" class="btn btn-primary" type="submit" value="Добавить">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },
    methods: {
        store() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$router.push({ name: 'people.index' })
                })
                .catch(res => {
                    console.log('Валидация не пройдена')
                })
        },
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
