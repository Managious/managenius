import ProductsList from "./Pages/Product/products.vue";
import AddProduct from "./Pages/Product/addProduct.vue";
import EditProduct from "./Pages/Product/ediProduct.vue";
import ClientList from "./Pages/Client/clients.vue";
import AddClient from "./Pages/Client/addClient.vue";
import EditClient from "./Pages/Client/editClient.vue";
import Orders from "./Pages/Orders/orders.vue";
import AddOrder from "./Pages/Orders/addOrder.vue";
import { createRouter, createWebHistory } from 'vue-router'
export const routes = [
    {
        path: "/product",
        name: "ProductsList",
        component: ProductsList,
    },
    {
        path: "/addProduct",
        name: "AddProduct",
        component: AddProduct,
    },
    {
        path: "/editProduct/:productId",
        name: "EditProduct",
        component: EditProduct,
    },
    {
        path: "/clients",
        name: "ClientList",
        component: ClientList,
    },
    {
        path: "/addClient",
        name: "AddClient",
        component: AddClient,
    },
    {
        path: "/editClient/:clientId",
        name: "EditClient",
        component: EditClient,
    },
    {
        path: "/orders",
        name: "Orders",
        component: Orders,
    },
    /*{
        path: "/addOrder/:id",
        name: "AddOrder",
        component: AddOrder,
    },*/

];
const router= createRouter({
    history: createWebHistory(),
    routes
})

export default router