<?php

namespace App\Http\Services;

use App\Models\Client;

class ClientService {

    public function getAllClients(){
        return Client::all();
    }
    
    
    private function fillClientData(Client $client, array $data)
    {
        $client->client_name = $data['client_name'] ?? $client->client_name;
        $client->client_city = $data['client_city'] ?? $client->client_city;
        $client->client_zone = $data['client_zone'] ?? $client->client_zone;
        $client->client_type = $data['client_type'] ?? $client->client_type;
        $client->client_address = $data['client_address'] ?? $client->client_address;
        $client->client_email = $data['client_email'] ?? $client->client_email;
        $client->client_phone = $data['client_phone'] ?? $client->client_phone;
        $client->client_discount = $data['client_discount'] ?? $client->client_discount;
        $client->client_points = $data['client_points'] ?? $client->client_points;
        $client->points_system = $data['points_system'] ?? $client->points_system;
        $client->points_reset_date = $data['points_reset_date'] ?? $client->points_reset_date;
        $client->client_in_partnership = $data['client_in_partnership'] ?? $client->client_in_partnership;
        $client->payment_type = $data['payment_type'] ?? $client->payment_type;
    }
    public function addClient(array $data)
    {
       /* $client = new Client();
        $this->fillClientData($client, $data);
        $client->save();*/

        return Client::create($data);
    }

    public function updateClient($client_id,array $data){
        
        $client=Client::where('client_id',$client_id)->first();
        $this->fillClientData($client, $data);
        $client->save();
        return $client;
    }

    public function deleteClient(int $client_id){
        try {
            $client = Client::where('client_id',$client_id)->delete();
            return true;
        } catch (ModelNotFoundException $e) {
            $e->getMessage();
            return false;
        }
    }

    public function getClientyById(int $client_id){
        try {
            $client = Client::where('client_id',$client_id)->first();
            return  $client;
        } catch (ModelNotFoundException $e) {
            $e->getMessage();
            return null;
        }
        
    }


}
