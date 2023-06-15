<template>
  <form class="form" @submit.prevent="submit">
      <input type="text" v-model="name" name="name" placeholder="Name">
      <input type="number" v-model="price" name="price" placeholder="Price">
      <button>Submit</button>
  </form>
</template>

<script>

import request from "../../utils/request";

export default {
    name: 'ProductsForm',

    data() {
        return {
            name: '',
            price: null,
        }
    },
    methods: {
        submit() {
            request('post', 'products', {
                name: this.name,
                price: this.price,
            }).then(() => {
                this.$router.push({ name: 'products' });
            });
        }
    }
}

</script>
