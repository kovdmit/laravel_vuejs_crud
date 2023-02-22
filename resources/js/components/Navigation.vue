<template>
    <nav>
        <router-link :to="{ name: 'people.index' }"
                     style="text-decoration: none; margin: 0 7px 0 7px; padding: 0 7px 0 7px; border: 1px solid #0ea3da;">
            Главная
        </router-link>
        <router-link :to="{ name: 'people.create' }"
                     style="text-decoration: none; margin: 0 7px 0 7px; padding: 0 7px 0 7px; border: 1px solid #0ea3da;">
            Добавить запись
        </router-link>
    </nav>
</template>

<script>
export default {
    name: "Navigation"
}
</script>

<style scoped>

</style>
