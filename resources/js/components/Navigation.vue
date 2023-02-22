<template>
    <nav>
        <router-link :to="{ name: 'people.index' }" class="btn btn-success mx-4">Главная</router-link>
        <router-link :to="{ name: 'people.create' }" class="btn btn-success">Добавить запись</router-link>
    </nav>
</template>

<script>
export default {
    name: "Navigation"
}
</script>

<style scoped>

</style>
