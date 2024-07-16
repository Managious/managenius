<template>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Products</h1>
                <router-link to="/AddProduct" class="alert alert-danger text-center">Add</router-link>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
               
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Code</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>SubCategory</th>
                    <th>Supplier</th>
                    <th>CMUP</th>
                    <th>location</th>
                    <th>Stock</th>
                    <th>Return Condition</th>
                    <th>Discount</th>
                    <th>Points</th>
                    <th>In Partnership</th>
                    <th colspan="2">Actions</th>
                    
                </tr>
                </thead>
                <tbody>
                <tr v-for="(product, key) in products" :key="product.product_id">
                    <td>{{ product.product_id }}</td>
                   
                    <td>{{ product.product_name }}</td>
                    <td>{{ product.product_brand }}</td>
                    <td>{{ product.product_ean_code }}</td>
                    <td>{{ product.product_price }}</td>
                    <td>{{ product.product_category }}</td>
                    <td>{{ product.product_subcategory }}</td>
                    <td>{{ product.product_supplier }}</td>
                    <td>{{ product.product_cmup }}</td>
                    <td>{{ product.product_location }}</td>
                    <td>{{ product.product_stock_1 }}</td>
                    <td>{{ product.product_return_condition }}</td>
                    <td>{{ product.product_discount }}</td>
                    <td>{{ product.product_points }}</td>
                    <td>{{ product.product_in_partnership }}</td>
                    <td>
                        <router-link :to="'/editProduct/' + product.product_id" >
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="44px" height="44px"><linearGradient id="0O0q6J4HBgQKyT39nvTa~a" x1="46.807" x2="46.807" y1="9.849" y2="24.215" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#0O0q6J4HBgQKyT39nvTa~a)" d="M49.482,24.392l-9.874-9.874l4.232-4.232c0.39-0.39,1.021-0.39,1.411,0l8.464,8.464 c0.39,0.39,0.39,1.021,0,1.411L49.482,24.392z"/><linearGradient id="0O0q6J4HBgQKyT39nvTa~b" x1="32" x2="32" y1="8.084" y2="55.83" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"/><stop offset="1" stop-color="#c822ff"/></linearGradient><path fill="url(#0O0q6J4HBgQKyT39nvTa~b)" d="M50.697,25.999l4.428-4.428c1.167-1.167,1.167-3.065,0-4.232l-8.464-8.464 c-1.167-1.167-3.065-1.167-4.232,0l-4.428,4.428c-0.664-0.175-1.4-0.011-1.92,0.509l-1.411,1.411c-0.52,0.52-0.684,1.256-0.509,1.92 L11.198,40.106l-0.508,0.508l-0.2,0.2l-2.373,9.967c-0.343,1.442,0.078,2.928,1.126,3.976s2.534,1.469,3.976,1.125l9.967-2.373 l0.2-0.2l0.508-0.508l22.964-22.964c0.664,0.175,1.4,0.011,1.92-0.509l1.411-1.411C50.708,27.399,50.872,26.663,50.697,25.999z M47.367,27.92L36.081,16.634l1.411-1.411l11.285,11.285L47.367,27.92z M23.46,50.414c-0.28-1.063-0.682-2.077-1.198-3.034 l20.872-20.872l2.116,2.116L23.46,50.414z M14.916,53.428c-0.12-1.074-0.58-2.115-1.405-2.939c-0.825-0.825-1.865-1.285-2.939-1.405 l0.698-2.931c1.649,0.266,3.173,1.036,4.357,2.22c1.184,1.184,1.954,2.709,2.22,4.357L14.916,53.428z M17.038,46.962 c-1.447-1.447-3.301-2.396-5.306-2.75l0.463-1.943c2.382,0.441,4.533,1.562,6.254,3.282s2.841,3.872,3.282,6.254l-1.943,0.463 C19.433,50.263,18.485,48.409,17.038,46.962z M19.859,44.141c-0.477-0.477-0.987-0.907-1.517-1.304l20.561-20.561l2.821,2.821 L21.163,45.658C20.766,45.128,20.336,44.618,19.859,44.141z M16.62,41.738c-0.957-0.516-1.971-0.918-3.034-1.198l21.79-21.79 l2.116,2.116L16.62,41.738z M43.84,10.286c0.389-0.389,1.022-0.389,1.411,0l8.464,8.464c0.389,0.389,0.389,1.022,0,1.411 l-4.232,4.232l-9.874-9.874L43.84,10.286z"/></svg>
                        </router-link>
                    </td>
                    <td @click="deleteProduct( product.product_id)">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="44px" height="44px" baseProfile="basic"><ellipse cx="32" cy="61" opacity=".3" rx="19" ry="3"/><path fill="#9c34c2" d="M43.299,55H20.701c-1.535,0-2.823-1.159-2.984-2.686L14,17h36l-3.717,35.314	C46.122,53.841,44.834,55,43.299,55z"/><path fill="#ffa1ac" d="M50,22H14c-1.657,0-3-1.343-3-3v-2c0-1.657,1.343-3,3-3h36c1.657,0,3,1.343,3,3v2	C53,20.657,51.657,22,50,22z"/><path d="M43.965,26.469l-2.248,21.757C41.602,49.237,40.746,50,39.729,50H33c-2.762,0-4.997,2.239-4.997,5	h15.296c1.535,0,2.823-1.159,2.984-2.686l3.152-30.249C46.712,21.784,44.274,23.747,43.965,26.469z" opacity=".15"/><path fill="#fff" d="M21.111,37.65l-1.585-16.205c-0.004-0.04-0.009-0.08-0.015-0.119	C19.346,20.102,20.244,19,21.48,19h9.385c2.762,0,4.997-2.239,4.997-5H14c-1.657,0-3,1.343-3,3v2c0,1.657,1.343,3,3,3h0.558	l2.139,21.174C19.441,42.868,21.418,40.395,21.111,37.65z" opacity=".3"/><line x1="17.5" x2="23.5" y1="17.5" y2="17.5" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/><path fill="#9c34c2" d="M39,14H25v-2c0-1.657,1.343-3,3-3h8c1.657,0,3,1.343,3,3V14z"/></svg>
                    </td>

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
        },
        deleteProduct(id){
            if(confirm("Are you sure to delete this product ?")){
               
                axios.get(`/api/deleteProduct/${id}`).then(response=>{
                    this.getProducts()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    },
};
</script>

