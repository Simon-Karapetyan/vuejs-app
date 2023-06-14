<template>
    <div class="products">
        <ProductsIndex />
    </div>
</template>

<style>
@media (min-width: 1024px) {
    .products {
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
}
</style>

<script>
import ProductsIndex from '@/components/Product/Index.vue';

export default {
    components: {
        ProductsIndex,
    }
}


</script>
