<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Product Name</label>
                                    <input type="text"  placeholder="Product name" class="form-control"
                                            v-model="product.product_name" >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                     <label >Product Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image"  >
                                        <label class="custom-file-label" for="image">choose</label>
                                    </div>
                                </div>
                            </div>
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
                                <button type="button" class="btn btn-primary" @click="saveProduct()">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script >
import axios from "axios"

   
export default {
    data(){
        return {
            product:{
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
    methods:{
        async saveProduct(){
            await axios.post('/api/submitProduct',this.product).then(response=>{
                console.log(response.data)
                this.$router.push({ name: 'ProductsList' });
            }).catch(error=>{
                console.log(error)
            })
            
    }
    }
}
/*
    const saveProduct = () => {
        const formData= new FormData()
        formData.append('product_name', product.value.product_name)
        formData.append('product_location', product.value.product_location)
        formData.append('product_image_link', product.value.product_image_link)
        formData.append('product_ean_code', product.value.product_ean_code)
        formData.append('product_price', product.value.product_price)
        formData.append('product_subcategory', product.value.product_subcategory)
        formData.append('product_supplier', product.value.product_supplier)
        formData.append('product_brand', product.value.product_brand)
        formData.append('product_category', product.value.product_category)
        formData.append('product_in_partnership', product.value.product_in_partnership)
        formData.append('product_points', product.value.product_points)
        formData.append('product_stock_1', product.value.product_stock_1)
        formData.append('product_return_condition', product.value.product_return_condition)
        formData.append('product_cmup', product.value.product_cmup)
        formData.append('product_discount', product.value.product_discount)


        axios.post('/api/submitProduct',formData)
        .then((response)=>{
            product.value.product_name='',
            product.value.product_location='',
            product.value.product_image_link='',
            product.value.product_ean_code='',
            product.value.product_price='',
            product.value.product_subcategory='',
            product.value.product_supplier='',
            product.value.product_brand='',
            product.value.product_category='',
            product.value.product_in_partnership='',
            product.value.product_points='',
            product.value.product_stock_1='',
            product.value.product_return_condition='',
            product.value.product_cmup='',
            product.value.product_discount='',

            this.$router.push({ name: 'ProductsList' });

        }   

        )

    }*/
     
</script>
