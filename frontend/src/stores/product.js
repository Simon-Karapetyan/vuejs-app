import { defineStore } from 'pinia';

export const useProductStore = defineStore('productStore', {
    state: () => ({
        products: [],
    }),
    actions: {
        setData(data) {
            this.products = data;
        },
    },
})
