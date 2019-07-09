<template>
    <div>
        <div class="container-fluid">
            <div class="row justify-content-sm-center bg-black-smart">
                <div class="col-12 text-center">
                    <img class="img-logo img-fluid" src="img/banco-do-futuro.png" alt="">
                </div>
                <!-- <div class="col-6 text-left ">
                                    <h3 class="text-smart">O banco do futuro</h3>
                                </div> -->
            </div>              
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row row-space justify-content-sm-center">
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control input-main-login" v-model="inputs.nome" type="text" placeholder="NOME COMPLETO">
                    </div>
    
                    <div class="form-group">
                        <input class="form-control input-main-login" v-model="inputs.email" type="text" placeholder="EMAIL">
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control input-main-login" v-model="inputs.telefone" type="text" placeholder="TELEFONE">
                            </div>
    
    
                            <div class="col-6">
                                <input class="form-control input-main-login" v-model="inputs.cpfcnpj" type="text" placeholder="CPF/CNPJ">
                            </div>
    
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control input-main-login" v-model="inputs.password" type="password" placeholder="SENHA">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 text-right">
                                <div class="btn btn-outline-light font-weight-bold" @click="cadastrar()">CADASTRAR</div>
                            </div>
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
export default {
    name: "RegisterInicial",
    data() {
        return {
            inputs: {}
        }
    },
    methods: {
        cadastrar() {
            console.log(this.inputs)
        }
    }
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

/* Mozilla Firefox 19+ */

.form-control:-ms-input-placeholder {
    color: white;
}

/* Internet Explorer 10-11 */

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
}

.form-control:-moz-placeholder {
    color: white;
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
</style>