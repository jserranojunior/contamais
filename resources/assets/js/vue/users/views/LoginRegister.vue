<template>
    <div>
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-12">
                    <img class="img-logo img-fluid" src="img/logo-white-conta-smart.png" alt="">
                    <p class="font-weight-bold text-center text-white">BEM VINDO!</p>
                    <hr/>
                </div>
            </div>
    
            <div class="row row-space justify-content-sm-center">
                
                <div class="col-sm-11">
                    <input type="text" class="form-control input-main-login" placeholder="Digite o número do celular ou CPF/CNPJ">
                    <input type="password" class="form-control input-main-login" placeholder="Digite sua senha">
                </div>
                <div class="col-12 text-left">
                    <button type="button" class="btn btn-link text-white">Esqueci minha senha</button>
                <router-link to="/home">
                    <div class="btn btn-sm btn-outline-light font-weight-bold float-right">ACESSE</div>
                    </router-link>
                </div>
               
            </div>

            <hr class="hr-space"/>

             <div class="row row-space justify-content-sm-center">                
                <div class="col-sm-11">                    
                    <input type="text" class="form-control input-main-login" placeholder="Digite seu celular ou CPF/CNPJ">
                    <input type="password" class="form-control input-main-login" placeholder="Crie uma senha">
                </div>
                <div class="col-sm-11 text-right">
                    <router-link to="/register">
                    <div class="btn btn-sm btn-outline-light font-weight-bold">CADASTRAR</div>
                    </router-link>
                </div>
            </div>
    
    
     <hr/>
    
            <div class="row row-space row-suporte">
                <div class="col-6">
                    <div class="btn btn-outline-light ">SUPORTE</div>
                </div>
                <div class="col-6 text-right">
                    <div class="btn btn-outline-light ">SMART PAY</div>
                </div>
            </div>
    
        </div>
    </div>
</template>

<script>
export default {
    name: "LoginRegister"
}
</script>

<style>
.hr-space{
    margin-bottom:40px;
    margin-top:40px;
}
body{
    background-color:#FF4C03
}
.img-logo {
    margin-bottom:20px;
    margin-top:30px;
}
.row-suporte {
    margin-top: 30px;
    margin-bottom:15px;
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
    color: #ced4da;
}

/* WebKit, Blink, Edge */

.form-control:-moz-placeholder {
    color: #ced4da;
}

/* Mozilla Firefox 4 to 18 */

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

/* Microsoft Edge */
</style>