<template>
    <div>
        <div class="w3-container w3-padding-32 w3-theme-d1">
            <h1>products</h1>
        </div>
        <div class="w3-row-padding w3-theme">
            <product v-for="product in products" :product="product" :key="product.id" class="w3-third w3-section"></product>

        </div>
        <div class="w3-container w3-theme-d4">
            <p class="w3-large">Europe Italy</p>
        </div>

    </div>
</template>

<script>

    import Product from './Product/Product'

    export default {
        data() {
            return {
                products: []
            }
        },
        created() {
            this.fetchProducts()
        },
        methods: {
            fetchProducts() {
                axios.get('/api/products').then(response => this.products = response.data.products)
            }
        },
        components: {
            Product
        }
    }
</script>

