<template>
<div >
    <h3>Clients</h3>
</div>
<br/>
<div class="card flex">
    <div class="card-body " >
    <table class="table ">
     <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Client name</th>
      <th scope="col">Client City</th>
      <th scope="col">Client Zone</th>
      <th scope="col">Client Type</th>
      <th scope="col">Client Address</th>
      <th scope="col">Client Email</th>
      <th scope="col">Client Phone</th>
      <th scope="col">Client Discount</th>
      <th scope="col">Client Points</th>
      <th scope="col">Points System</th>
      <th scope="col">Points Reset Date</th>
      <th scope="col">Client In Partnership</th>
      <th scope="col">Payment Type</th>
      <th>
        <router-link to="/AddClient">
        <svg fill="#000000" width="35px" height="35px" viewBox="0 0 24 24" id="add-music-collection" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><rect id="secondary" x="3" y="3" width="14" height="14" rx="1" style="fill: rgb(44, 169, 188); stroke-width: 2;"></rect><path id="primary" d="M7,21H17a4,4,0,0,0,4-4V5" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-2" data-name="primary" d="M7,10h6M10,7v6m7,3V4a1,1,0,0,0-1-1H4A1,1,0,0,0,3,4V16a1,1,0,0,0,1,1H16A1,1,0,0,0,17,16Z" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
        </router-link>
      </th>
    </tr>
  </thead>
  <tbody>

    <tr v-for="(client, key) in clients" :key="client.client_id">
   
      <td>{{ client.client_id }}</td>
      <td>{{ client.client_name }}</td>
      <td>{{ client.client_city }}</td>
      <td>{{ client.client_zone }}</td>
      <td>{{ client.client_type}}</td>
      <td>{{ client.client_address }}</td>
      <td>{{ client.client_email }}</td>
      <td>{{ client.client_phone }}</td>
      <td>{{ client.client_discount }}</td>
      <td>{{ client.client_points }}</td>
      <td>{{ client.points_system }}</td>
      <td>{{ client.points_reset_date }}</td>
      <td>{{ client.client_in_partnership }}</td>
      <td>{{ client.payment_type }}</td>
    <td>
      <router-link :to="'/editClient/' + client.client_id" >
      <svg width="35px" height="35px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M714 762.2h-98.2c-16.6 0-30 13.4-30 30s13.4 30 30 30H714c16.6 0 30-13.4 30-30s-13.4-30-30-30zM487.4 762.2H147.1c-16.6 0-30 13.4-30 30s13.4 30 30 30h340.3c16.6 0 30-13.4 30-30s-13.4-30-30-30z" fill="#33CC99" /><path d="M838.253 130.023l65.548 65.548-57.982 57.983-65.549-65.549z" fill="#FFB89A" /><path d="M743.7 955.9H195.8c-53.7 0-97.4-43.7-97.4-97.4V174.8c0-53.7 43.7-97.4 97.4-97.4H615c16.6 0 30 13.4 30 30s-13.4 30-30 30H195.8c-20.6 0-37.4 16.8-37.4 37.4v683.7c0 20.6 16.8 37.4 37.4 37.4h547.9c20.6 0 37.4-16.8 37.4-37.4v-395c0-16.6 13.4-30 30-30s30 13.4 30 30v395.1c0 53.6-43.7 97.3-97.4 97.3z" fill="#45484C" /><path d="M907.7 122.1l-39.2-39.2c-24-24-65.1-21.9-91.7 4.7L419.5 445 347 643.6l198.6-72.4L903 213.8c12.1-12.1 19.6-27.7 21.1-44 1.8-18.1-4.3-35.5-16.4-47.7zM512.6 519.3L447.5 543l23.7-65.1 264.7-264.7 40.9 41.7-264.2 264.4z m348-347.9l-41.3 41.3-40.9-41.7 40.9-40.9c3.1-3.1 6.2-3.9 7.6-3.9l37.6 37.6c-0.1 1.3-0.9 4.5-3.9 7.6z" fill="#45484C" /></svg>
    </router-link>
    </td>
    <td @click="deleteClient( client.client_id)">
      <svg width="35px" height="35px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M460.8 166.4h179.2v76.8H460.8z" fill="#EEBE00" /><path d="M652.8 256H448v-102.4h204.8v102.4z m-179.2-25.6h153.6v-51.2H473.6v51.2z" fill="#231C1C" /><path d="M793.6 844.8c0 42.24-21.76 51.2-64 51.2H371.2c-42.24 0-64-8.96-64-51.2V256c0-42.24 34.56-38.4 76.8-38.4h332.8c42.24 0 76.8-3.84 76.8 38.4v588.8z" fill="#6FB0BE" /><path d="M729.6 908.8H371.2c-39.68 0-76.8-7.68-76.8-64V256c0-16.64 3.84-28.16 12.8-37.12 15.36-15.36 38.4-15.36 66.56-14.08h353.28c28.16 0 51.2 0 66.56 14.08 8.96 8.96 12.8 20.48 12.8 37.12v588.8c0 56.32-37.12 64-76.8 64zM364.8 230.4c-17.92 0-33.28 1.28-39.68 7.68-3.84 2.56-5.12 8.96-5.12 17.92v588.8c0 30.72 10.24 38.4 51.2 38.4h358.4c40.96 0 51.2-7.68 51.2-38.4V256c0-8.96-1.28-15.36-5.12-17.92-7.68-7.68-28.16-7.68-48.64-7.68H364.8z" fill="#231C1C" /><path d="M268.8 217.6h563.2v12.8H268.8z" fill="#EEBE00" /><path d="M256 204.8h588.8v38.4H256zM409.6 409.6h25.6v345.6h-25.6z" fill="#231C1C" /><path d="M537.6 384h25.6v384h-25.6z" fill="#231C1C" /><path d="M678.4 409.6h25.6v345.6h-25.6z" fill="#231C1C" /><path d="M307.2 294.4h486.4v25.6H307.2z" fill="#231C1C" /></svg>
    </td>
    </tr>
 
  </tbody>
</table>  
</div>
</div>  
</template>
<script>
import axios from "../config/axios.js";
export default {
    name: "clients",
    data() {
        return {
            clients: [], // Initial state
        };
    },
    mounted() {
        this.getClient();
    },
    methods: {
        async getClient() {
            let res = await axios.get("/api/clients");
            console.log(res.data.clients)
            this.clients = res.data.clients;
        },
        deleteClient(id){
            if(confirm("Are you sure to delete this client ?")){
               
                axios.get(`/api/deleteClient/${id}`).then(response=>{
                    this.getClient()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    },
};
</script>