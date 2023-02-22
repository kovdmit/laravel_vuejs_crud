<template>
    <Navigation></Navigation>
    <router-view></router-view>
</template>

<script>
import Navigation from "./Navigation.vue";

export default {
    name: "Index",
    components: {Navigation},
    data() {
        return {}
    },
    mounted() {
    }
}
</script>

<style scoped>

</style>
