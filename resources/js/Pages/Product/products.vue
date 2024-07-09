<template>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Products</h1>
                <router-link to="/create-post" class="btn btn-secondary"><Create></Create></router-link>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(product, key) in products" :key="product.product_id">
                    <td>{{ key }}</td>
                    <td>{{ product.product_name }}</td>
                    <td>{{ product.product_brand }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from "../config/axios.js";
import toastr from "toastr";
export default {
    name: "Products",
    data() {
        return {
            products: [], // Initial state
        };
    },
    mounted() {
        this.getProducts();
    },
    methods: {
        async getProducts() {
            let res = await axios.get("/api/products");
            this.products = res.data.products;
        }
    },
};
</script>

