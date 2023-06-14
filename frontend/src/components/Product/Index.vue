<template>
    <div class="product-container">
        <h2>Products</h2>
        <ul>
            <li v-for="product in products" :key="product.id">
                <p><b class="bold">Name:</b> {{ product.name }}</p>
                <p><b class="bold">Price:</b> {{ product.price }}</p>
            </li>
        </ul>

        <router-link :to="{ name: 'products.create' }">Create new one</router-link>
    </div>
</template>

<script>
import request from "../../utils/request";
import { useProductStore } from '../../stores/product.js';
import { mapActions } from 'pinia';
const productsStore = useProductStore();
export default {
    name: 'ProductsIndex',

    async mounted() {
        const products = await request('GET','products');

        if (products) {
            productsStore.setData(products?.data.data);
        }
    },
    methods: {
        ...mapActions(useProductStore, ['setData']),
    },

    setup() {
        const products = productsStore.products;

        return { products };
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

.create-btn {
    margin-top: 20px;
}
</style>
