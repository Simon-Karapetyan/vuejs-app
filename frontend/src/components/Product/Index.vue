<template>
    <div class="product-container">
        <h2>Products</h2>
        <ul class="product-list">
            <li v-for="product in products" :key="product.id">
                <p><b class="bold">Name:</b> {{ product.name }}</p>
                <p><b class="bold">Price:</b> {{ product.price }}</p>
                <b class="bold" style="color: red" @click="handleDeleteProduct(product.id)">X</b>
            </li>
        </ul>

        <router-link :to="{ name: 'products.create' }">Create new one</router-link>
    </div>
</template>

<script>
import request from "../../utils/request";
import { useProductStore } from '../../stores/product.js';
import { toRaw } from "vue";

export default {
    name: 'ProductsIndex',

    data() {
        return {
            products: [],
        };
    },

    async mounted() {
        const productsStore = useProductStore();

        try {
            const products = await request('GET', 'products');
            if (products) {
                productsStore.setData(products?.data.data);
            }

            this.products = toRaw(productsStore.products);
        } catch (error) {
            console.error('Error retrieving products:', error);
        }
    },

    methods: {
        handleDeleteProduct(id) {
            const productsStore = useProductStore();

            request('DELETE', `products/${id}`);

            productsStore.deleteData(id);
        }
    }
}
</script>

<style>
.product-container {
    display: flex;
    flex-direction: column;
}

.bold {
    font-weight: bold;
}

.product-list {
    margin-bottom: 20px;
}
</style>
