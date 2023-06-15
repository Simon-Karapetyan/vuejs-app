import { defineStore } from 'pinia';

export const useProductStore = defineStore('productStore', {
    state: () => ({
        products: [],
    }),
    actions: {
        setData(data) {
            this.products = data;
        },
        deleteData(id) {
            const index = this.products.findIndex(product => product.id === id);
            if (index !== -1) {
                this.products.splice(index, 1);
            }
        }
    },
})
