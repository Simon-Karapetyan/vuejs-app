import { createRouter, createWebHistory } from 'vue-router';

// View
import HomeView from '../views/HomeView.vue';
import ProductsView from '../views/Product/ProductsView.vue';
import ProductsForm from '../views/Product/ProductsForm.vue';

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeView
        },
        {
            path: '/products',
            name: 'products',
            component: ProductsView
        },
        {
            path: '/products/create',
            name: 'products.create',
            component: ProductsForm
        }
    ]
})

export default router
