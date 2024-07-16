<template>
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Client</h4>
                </div>
                <div class="card-body">
                  <form method="post" class="mt-3">
            
                    <div class="form-group mb-3">
                        <label for="client_name">Client Name</label>
                        <input type="text" name="client_name" placeholder="Client name"
                            v-model="client.client_name" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_city">Client City</label>
                        <input type="text" name="client_city" placeholder="Client city"
                        v-model="client.client_city" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_zone">Client Zone</label>
                        <input type="text" name="client_zone" placeholder="Client zone"
                        v-model="client.client_zone" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_type">Client Type</label>
                        <input type="text" name="client_type" placeholder="Client type"
                        v-model="client.client_type" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_address">Client Address </label>
                        <input type="text" name="client_address" placeholder="Client address"
                        v-model="client.client_address" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_discount">Client Discount</label>
                        <input type="number" name="client_discount" placeholder="Client discount"
                        v-model="client.client_discount" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_phone">Client Phone</label>
                        <input type="text" name="client_phone" placeholder="Client phone"
                        v-model="client.client_phone" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_phone">Client Email</label>
                        <input type="email" name="client_email" placeholder="Client email"
                        v-model="client.client_email" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_points">Client Points</label>
                        <input type="number" name="client_points" placeholder="Client points"
                        v-model="client.client_points" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="points_system">Points System</label>
                        <input type="number" name="points_system" placeholder="Points system"
                        v-model="client.points_system" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="points_reset_date">Points Reset Date</label>
                        <input type="date" name="points_reset_date" placeholder="Points Reset Date"
                        v-model="client.points_reset_date" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_in_partnership">Client In Partnership</label>
                        <input type="text" name="client_in_partnership" placeholder="Client In Partnership"
                        v-model="client.client_in_partnership" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="payment_type">Payment Type</label>
                        <input type="text" name="payment_type" placeholder="Payment type"
                        v-model="client.payment_type" >
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" @click="saveClient()">
                            Submit
                        </button>

                    </div>
                  </form>

                </div>
            </div>
        </div>
    </div>  
</template>
<script >
import axios from "axios";
export default{

data(){
        return {
            client:{
                    client_id:"",
                    client_name:"",
                    client_city:"",
                    client_zone:"",
                    client_type:"",
                    client_address:"",
                    client_email:"",
                    client_phone:"",
                    client_discount:"",
                    client_points:"",
                    points_system:"",
                    points_reset_date:"",
                    client_in_partnership:"",
                    payment_type:""
            }
        }
    },
    methods:{
      /*  async saveClient() {
        const formData= new FormData()
        formData.append('client_name', client.value.client_name)
        formData.append('client_city', client.value.client_city)
        formData.append('client_zone', client.value.client_zone)
        formData.append('client_type', client.value.client_type)
        formData.append('client_address', client.value.client_address)
        formData.append('client_email', client.value.client_email)
        formData.append('client_phone', client.value.client_phone)
        formData.append('client_discount', client.value.client_discount)
        formData.append('client_points', client.value.client_points)
        formData.append('points_system', client.value.points_system)
        formData.append('points_reset_date', client.value.points_reset_date)
        formData.append('client_in_partnership', client.value.client_in_partnership)
        formData.append('payment_type', client.value.payment_type)


        axios.post('/api/submitClient',formData)
        .then((response)=>{
            client.value.client_name='',
            client.value.client_city='',
            client.value.client_zone='',
            client.value.client_type='',
            client.value.client_address='',
            client.value.client_email='',
            client.value.client_phone='',
            client.value.client_discount='',
            client.value.client_points='',
            client.value.points_system='',
            client.value.points_reset_date='',
            client.value.client_in_partnership='',
            client.value.payment_type='',
            console.log(client);
            
            this.$router.push({ name: 'ClientList' });

        }   

        )

    
    }*/
    async saveClient(){
            await axios.post('/api/submitClient',this.client).then(response=>{
                console.log(response.data)
                this.$router.push({ name: 'ClientList' });
            }).catch(error=>{
                console.log(error)
            })
            
    }
}
}
     
</script>