<template>
    <div>
        <div class="row row-space justify-content-sm-center">    
            <div class="col-sm-11">
                                
                <input type="text" class="form-control input-main-login" placeholder="Digite o número do celular ou CPF/CNPJ">
                <input type="password" class="form-control input-main-login" placeholder="Digite sua senha">
            </div>
            <div class="col-12 text-left">
                <button type="button" class="btn btn-link text-white">Esqueci minha senha</button>
                <router-link to="/user/home">
                    <div class="btn btn-sm btn-outline-light font-weight-bold float-right">ACESSE</div>
                </router-link>
            </div>    
        </div>
    </div>
</template>

<script>
export default {
    name: "Login"
}
</script>

