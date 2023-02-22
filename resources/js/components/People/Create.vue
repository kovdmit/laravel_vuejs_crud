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
            <div class="my-1">
                <input @click.prevent="store" class="btn btn-primary" type="submit" value="Добавить">
            </div>
        </div>
    </div>
</template>

<script>
import {router} from "../../router";

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
                    router.push({ name: 'people.index' })
                })
        }
    }
}
</script>

<style scoped>

</style>
