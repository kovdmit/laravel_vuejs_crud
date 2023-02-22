import {createRouter, createWebHistory} from 'vue-router'


const routes = [
    {
        path: '/',
        component: () => import('./components/People/Index.vue'),
        name: 'people.index'
    },
    {
        path: '/create',
        component: () => import('./components/People/Create.vue'),
        name: 'people.create'
    },
]

export const router = createRouter({
    history: createWebHistory(),
    routes
})
