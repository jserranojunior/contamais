<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tables\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class NewRegisterController extends Controller
{

    public function __construct(User $Users){
        $this->Users = $Users;
    }
  
        public function create(Request $data)
        {       
                    //  return response()->json([
                    //     'message' => $data->all(),  
                    //     'data' => $data,              
                    // ]);
           
            $messages = [
                'email.required' => 'Email está vazio',
                'cpf.required' => 'CPF está vazio',
                'cpf.unique' => 'Já existe esse CPF cadastrado',
                'email.unique' => 'Já existe esse EMAIL cadastrado',
                'password.required' => 'É necessario colocar a senha',
            ];                         
                $validate = Validator::make($data->all(), $this->Users->rules, $messages);
                if($validate->fails()){               
                    return response()->json([
                        'message' => $validate->errors(),  
                        'data' => '',              
                    ]);
                }else{
                    $data['password'] = Hash::make($data->password);
                    
                    $this->Users = $this->Users->create($data->all());
                    $this->Users->save();   
                   
    
                    return response()->json([
                        'message' => 'Cadastrado',  
                        'data' => $this->Users->id,              
                    ]);
    
                   
                }    
                
                
        }
    
}
