<template>
<div class="container">
<div  class="partie">
    <table class="table ">
     <thead>
    <tr>
      
      <th scope="col">Product Id</th>
      <th scope="col">Uniiit Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Discount</th>
      <th scope="col">Total Price</th>
      <th></th>
    </tr>
  </thead>
    <tbody>
      <!-- <tr v-for="(order, key) in orders" :key="order.order_id">
        <td >
            --<select name="product_id" id="product_id" >
                
                <option v-for="(product, key) in products" :key="product.product_id" value="{{ product.product_id }}"> {{ product.product_name }}</option>
            </select>--
            {{ order.product_id }}
        </td>
        -- <input type="number" name="unitprice[]" class="form-control" v-model="orders.unitprice">--
            {{ order.unitprice }}
        </td>
        <td>
            <input type="number" name="quantity[]" class="form-control" v-model="orders.quantity">
        </td>
        <td>
         <input type="number" name="discount[]" class="form-control" v-model="orders.discount">
        </td>
        <td>
       <-- <input type="number" name="total[]" class="form-control" v-model="orders.total">--
        {{ order.total }}
        </td>
        <td >
      <svg width="35px" height="35px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M460.8 166.4h179.2v76.8H460.8z" fill="#EEBE00" /><path d="M652.8 256H448v-102.4h204.8v102.4z m-179.2-25.6h153.6v-51.2H473.6v51.2z" fill="#231C1C" /><path d="M793.6 844.8c0 42.24-21.76 51.2-64 51.2H371.2c-42.24 0-64-8.96-64-51.2V256c0-42.24 34.56-38.4 76.8-38.4h332.8c42.24 0 76.8-3.84 76.8 38.4v588.8z" fill="#6FB0BE" /><path d="M729.6 908.8H371.2c-39.68 0-76.8-7.68-76.8-64V256c0-16.64 3.84-28.16 12.8-37.12 15.36-15.36 38.4-15.36 66.56-14.08h353.28c28.16 0 51.2 0 66.56 14.08 8.96 8.96 12.8 20.48 12.8 37.12v588.8c0 56.32-37.12 64-76.8 64zM364.8 230.4c-17.92 0-33.28 1.28-39.68 7.68-3.84 2.56-5.12 8.96-5.12 17.92v588.8c0 30.72 10.24 38.4 51.2 38.4h358.4c40.96 0 51.2-7.68 51.2-38.4V256c0-8.96-1.28-15.36-5.12-17.92-7.68-7.68-28.16-7.68-48.64-7.68H364.8z" fill="#231C1C" /><path d="M268.8 217.6h563.2v12.8H268.8z" fill="#EEBE00" /><path d="M256 204.8h588.8v38.4H256zM409.6 409.6h25.6v345.6h-25.6z" fill="#231C1C" /><path d="M537.6 384h25.6v384h-25.6z" fill="#231C1C" /><path d="M678.4 409.6h25.6v345.6h-25.6z" fill="#231C1C" /><path d="M307.2 294.4h486.4v25.6H307.2z" fill="#231C1C" /></svg>
    </td>
    </tr>
    --> 


    <tr>
            
        <td >
            <!----<select name="product_id" id="product_id" >
                
                <option v-for="(product, key) in products" :key="product.product_id" value="{{ product.product_id }}"> {{ product.product_name }}</option>
            </select>-->
            <input type="number" readonly name="product_id" class="form-control" v-model="order.product_id">
           
        </td>
        <td>
            <input type="number" readonly name="unitprice" class="form-control" v-model="order.unitprice">
            
        </td>
        <td>
            <input type="number" name="quantity" class="form-control" v-model="order.quantity" ref="quantityInput">
        </td>
        <td>
         <input type="number" name="discount" class="form-control" v-model="order.discount">
        </td>
        <td>
       <input type="number" readonly name="total" class="form-control" v-model="order.total">
       
        </td>
        <td >
      <svg width="35px" height="35px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M460.8 166.4h179.2v76.8H460.8z" fill="#EEBE00" /><path d="M652.8 256H448v-102.4h204.8v102.4z m-179.2-25.6h153.6v-51.2H473.6v51.2z" fill="#231C1C" /><path d="M793.6 844.8c0 42.24-21.76 51.2-64 51.2H371.2c-42.24 0-64-8.96-64-51.2V256c0-42.24 34.56-38.4 76.8-38.4h332.8c42.24 0 76.8-3.84 76.8 38.4v588.8z" fill="#6FB0BE" /><path d="M729.6 908.8H371.2c-39.68 0-76.8-7.68-76.8-64V256c0-16.64 3.84-28.16 12.8-37.12 15.36-15.36 38.4-15.36 66.56-14.08h353.28c28.16 0 51.2 0 66.56 14.08 8.96 8.96 12.8 20.48 12.8 37.12v588.8c0 56.32-37.12 64-76.8 64zM364.8 230.4c-17.92 0-33.28 1.28-39.68 7.68-3.84 2.56-5.12 8.96-5.12 17.92v588.8c0 30.72 10.24 38.4 51.2 38.4h358.4c40.96 0 51.2-7.68 51.2-38.4V256c0-8.96-1.28-15.36-5.12-17.92-7.68-7.68-28.16-7.68-48.64-7.68H364.8z" fill="#231C1C" /><path d="M268.8 217.6h563.2v12.8H268.8z" fill="#EEBE00" /><path d="M256 204.8h588.8v38.4H256zM409.6 409.6h25.6v345.6h-25.6z" fill="#231C1C" /><path d="M537.6 384h25.6v384h-25.6z" fill="#231C1C" /><path d="M678.4 409.6h25.6v345.6h-25.6z" fill="#231C1C" /><path d="M307.2 294.4h486.4v25.6H307.2z" fill="#231C1C" /></svg>
    </td>

    </tr>
    </tbody>
  </table>
</div>
<div class="partie">
    <div class="card-body " >
        <table class="table table-bordered table-hover">
                <thead>
                <tr>

               
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th></th>
                    
                </tr>
                </thead>
                <tbody>
                <tr v-for="(product, key) in products" :key="product.product_id"  @click="fillOrder(product)">
                   
                    <td>{{ product.product_name }}</td>
                    <td>{{ product.product_brand }}</td>
                    <td>{{ product.product_price }} Dhs</td>
                    <td>{{ product.product_category }}</td>
                    <td @click="add( product.product_id)">
                        <img src="/resources/images/panier.png" alt="panier" style="width: 40px;">
                    </td>

                </tr>
                </tbody>
            </table>
  </div>
  </div>

</div>
</template>
<style>
.container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            
        }
        .partie {
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            margin: 10px;
        }
</style>
<script>
import axios from "../config/axios.js";
export default {
    data() {
        return {
            products: [],
            orders:[] ,
            order:{
                product_id:"",
                quantity:"",
                unitprice:"",
                total:"",
                discount:""
            },
            product_id:"",
        };
    },
    mounted() {
        this.getProducts();
       
    },
    methods: {
        async getProducts() {
            let res = await axios.get("/api/orders");
            this.products = res.data.products;
            this.orders=res.data.orders
        },
        add(id){
       let res = axios.get(`/api/addOrder/${id}`);
       this.order=res;
       this.product_id=res.product_id;
       console.log(this.order);
    },
    fillOrder(product) {
      this.order.product_id = product.product_id;
      this.order.unitprice = product.product_price;
      this.order.quantity = "";
      this.order.discount = "";
      this.order.total = this.order.quantity* this.order.unitprice;

      this.$refs.quantityInput.focus();
    },
   /* async getOrder() {
             await axios.get(`/api/addOrder/${this.product_id}`).then(response=>{
                this.order=response.data;
                console.log(this.order);
             }).catch(error=>{
                console.log(error);
            })
            
        },*/
        
    },
    
};
</script>