<?php

namespace App\Http\Controllers;
use App\Http\Services\ClientService;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientStoreRequest;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }


    public function index(){
        $clients= $this->clientService->getAllClients();
        return  response(['status' => 'success', 'clients'=>$clients , 'code' => 200]);
    }

    public function create(){
        return response()->json(['message' => 'Show create form ']);
    }

    public function store(Request $request){
       
     $client =$this->clientService->addClient($request->except('__token'));
     return response()->json($client);
    }


    public function edit($client_id){
        $client=$this->clientService->getClientyById($client_id);
        return response()->json($client);

    }

    public function submitEdit(Request $request){
        $data = $request->except('__token');
        $client=$this->clientService->updateClient($request->client_id,$data);
        return response()->json($client);
    }

    public function deleteClient($client_id) {
        if($this->clientService->deleteClient($client_id))
        return response()->json(['message' => 'Product Deleted Successfully!! ']);
        else
            return 'erreur';
    }
}
