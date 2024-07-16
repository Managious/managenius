<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Product</h4>
                </div>
                <div class="card-body">
                    <form >
                        <div class="row">
                            <input type="hidden"  placeholder="Product name" class="form-control"
                                            v-model="product.product_id" >
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Name</label>
                                    <input type="text"  placeholder="Product name" class="form-control"
                                            v-model="product.product_name" >
                                </div>
                            </div>
                           <!-- <div class="col-12 mb-2">
                                <div class="form-group">
                                     <label >Product Image</label>
                                    <div class="custom-file">
                                        <input type="text" class="custom-file-input" id="image" v-model="product.product_image_link" >
                                        <label class="custom-file-label" for="image">choose</label>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Brand</label>
                                    <input type="text"  placeholder="Product Brand" class="form-control"
                                           v-model="product.product_brand" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product barcode</label>
                                    <input type="text" placeholder="Product barcode" class="form-control"
                                           v-model="product.product_ean_code" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Category</label>
                                    <input type="text"  placeholder="Product Category" class="form-control"
                                           v-model="product.product_category" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product SubCategory</label>
                                    <input type="text"  placeholder="Product SubCategory" class="form-control"
                                           v-model="product.product_subcategory" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Price</label>
                                    <input type="number" placeholder="Product Price" class="form-control"
                                           v-model="product.product_price" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Supplier</label>
                                    <input type="text"  placeholder="Product Supplier" class="form-control"
                                           v-model="product.product_supplier" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product CMUP</label>
                                    <input type="number"  placeholder="Product CMUP" class="form-control"
                                           v-model="product.product_cmup" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product location</label>
                                    <input type="text"  placeholder="Product location" class="form-control"
                                           v-model="product.product_location" >
                                </div>
                            </div>
                           
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Stock</label>
                                    <input type="number"  placeholder="Product Stock" class="form-control"
                                           v-model="product.product_stock_1" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Return Condition</label>
                                    <input type="text"  placeholder="Product Return Condition" class="form-control"
                                           v-model="product.product_return_condition" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product discount</label>
                                    <input type="number"  placeholder="Product discount" class="form-control"
                                           v-model="product.product_discount" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Points</label>
                                    <input type="number"  placeholder="Product Points" class="form-control"
                                           v-model="product.product_points" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product In Partnership</label>
                                    <input type="text"  placeholder="Product In Partnership" class="form-control"
                                           v-model="product.product_in_partnership" >
                                </div>
                            </div>


                            <div class="col-12">
                                <button type="button" class="btn btn-primary" @click="updateProduct()" >Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data(){
        return {
            product:{
                    product_id:"",
                    product_name:"",
                    product_image_link:"",
                    product_ean_code:"",
                    product_price:"",
                    product_brand:"",
                    product_category:"",
                    product_subcategory:"",
                    product_supplier:"",
                    product_cmup:"",
                    product_location:"",
                    product_stock_1:"",
                    product_return_condition:"",
                    product_discount:"",
                    product_points:"",
                    product_in_partnership:"",
                    
            }
        }
    },
    mounted(){
        this.showProduct()
    },
    methods:{
        async showProduct(){
            await axios.get(`/api/editProduct/${this.$route.params.productId}`).then(response=>{
               /* const { product_name, location, image,barcode,price, stock, mark,category,subCategory, supplier, cmup,condition,discount,points,in_partnership} = response.data
                this.product.product_name = name
                this.product.product_ean_code = barcode
                this.product.product_location = location
                this.product.product_brand=mark
                this.product.product_image_link=image
                this.product.product_category=category
                this.product.product_price=price
                this.product.product_subcategory=subCategory
                this.product.product_supplier=supplier
                this.product.product_cmup=cmup
                this.product.product_in_partnership=in_partnership
                this.product.product_stock_1=stock
                this.product.product_return_condition=condition
                this.product.product_discount=discount
                this.product.product_points=points*/
                this.product=response.data
                console.log(this.product)
            }).catch(error=>{
                console.log(error)
            })
        },
        async updateProduct(){
            await axios.post('/api/updateProduct',this.product).then(response=>{
                console.log(response.data)
                this.$router.push({ name: 'ProductsList' });
            }).catch(error=>{
                console.log(error)
            })
            
    }
}
}
</script>