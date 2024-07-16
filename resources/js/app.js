import { createApp } from 'vue/dist/vue.esm-bundler';
import { createRouter, createWebHashHistory } from "vue-router";
import { routes } from "./routes.js";
import 'bootstrap/dist/css/bootstrap.min.css'
import 'toastr/build/toastr.min.css'
import router from './routes.js'
import App from './Pages/App.vue'
import Products from './Pages/Product/products.vue';
import createProduct from './Pages/Product/addProduct.vue';
import AddOrder from "./Pages/Orders/addOrder.vue";
const app =createApp({}).use(router)
app.component('product-list',Products);
app.component('create-product',createProduct);
app.component('add-order',AddOrder);
app.mount('#app')
/*
const list=createApp({})
list.component('product-list',Products);
list.mount('#list')*/