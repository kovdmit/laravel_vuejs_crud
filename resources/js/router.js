import {createRouter, createWebHistory} from 'vue-router'
import PostComponent from "./components/PostComponent.vue";

const routes = [
    {
        path: '/',
        component: PostComponent
    },
]

export const router = createRouter({
    history: createWebHistory(),
    routes
})
