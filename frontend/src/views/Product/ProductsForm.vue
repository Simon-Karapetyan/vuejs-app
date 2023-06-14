<template>
    <div class="products">
        <ProductsForm />
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
import ProductsForm from '@/components/Product/Form.vue';

export default {
    components: {
        ProductsForm,
    }
}

</script>
