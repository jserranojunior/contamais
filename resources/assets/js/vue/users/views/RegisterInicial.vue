<template>
    <div>
        <div class="container-fluid">
            <div class="row justify-content-sm-center bg-black-smart">
                <div class="col-12 text-center">
                    <img class="img-logo img-fluid" src="img/banco-do-futuro.png" alt="">
                </div>
            </div>              
        </div> <br>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row row-space justify-content-sm-center">
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control input-main-login" v-model="inputs.name" type="text" placeholder="NOME COMPLETO">
                    </div>
    
                    <div class="form-group">
                        <input class="form-control input-main-login" v-model="inputs.email" type="text" placeholder="EMAIL">
                    </div>
    
                    <div class="form-group">                        
                            <div class="col-12">
                                <input class="form-control input-main-login" v-model="inputs.celular" v-mask="'(##) #####-####'" type="text" placeholder="TELEFONE">
                            </div>                               
                    </div>

                    <div class="form-group">                        
                            <div class="col-12">
                                <input class="form-control input-main-login" v-model="inputs.cpf" v-mask="'###.###.###-##'" type="text" placeholder="CPF">
                           
                            </div>                        
                    </div>
    
                    <div class="form-group">
                            <div class="col-12">
                                <input class="form-control input-main-login" v-model="inputs.password" type="password" placeholder="SENHA">
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6 text-left">
                                <a href="./login">
                                <div class="btn btn-outline-light font-weight-bold">JÁ POSSUO CADASTRO</div>
                                </a>
                            </div>

                            <div class="col-6 text-right">
                                <div class="btn btn-outline-light font-weight-bold" 
                                @click="Register(inputs)">CADASTRAR</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" v-if="message === 'Cadastrado'">
                        <div class="col-12">
                            <h5 class="text-center">CADASTRADO COM SUCESSO</h5>
                        </div>
                    </div>

                    <div class="row" v-else>
                        <div class="col-12">
                            <h5 class="text-center">{{message}}</h5>
                        </div>
                    </div>

                </div>
            </div>
    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mask } from "vue-the-mask";
import axios from 'axios'
export default {
    name: "RegisterInicial",
    data() {
        return {
            inputs: {},
            data: "",
            message: "",
        }
    },
    methods: {
        cadastrar() {
            console.log(this.inputs)
        },
 
          Register(inputs) {        
            let url = '/api/users/register';        
            
            axios
                .post(url, inputs)
                .then(response => {
                    this.message = response.data.message   
                    this.data = response.data.data
                    console.log(this.message) 
                    this.inputs = ""     
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
    },
    directives: { mask }
}
</script>

<style>
input.form-control.input-main-login {
    margin-bottom: 10px;
    border: aliceblue;
    border-bottom: 1px solid white;
    background-color: #f0f8ff00;
    color: white;
    border-radius: 0rem;
}

.form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
}
.form-control::-moz-placeholder {
    color: white;
}
.form-control:-ms-input-placeholder {
    color: white;
}
.form-control::-ms-input-placeholder {
    color: white;
}

.hr-space {
    margin-bottom: 40px;
    margin-top: 40px;
}

.bg-black-smart {
    background-color: #252525;
}

body {
    background-color: #FF4C03
}

.text-smart {
    color: #FF4C03
}

.img-logo {
    margin-bottom: 20px;
    margin-top: 30px;
}

.row-suporte {
    margin-top: 30px;
    margin-bottom: 15px;
}

input.form-control.input-main-login {
    margin-bottom: 10px;
    border: aliceblue;
    border-bottom: 1px solid white;
    background-color: #f0f8ff00;
    color: white;
    border-radius: 0rem;
}

.form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
}

.form-control::-webkit-input-placeholder {
    color: white;
    text-align: center;
}
.form-control:-moz-placeholder {
    color: white;
    text-align: center;
}
.form-control::-moz-placeholder {
    color: white;
    text-align: center;
}
.form-control:-ms-input-placeholder {
    color: white;
    text-align: center;
}
.form-control::-ms-input-placeholder {
    color: white;
    text-align: center;
}
</style>