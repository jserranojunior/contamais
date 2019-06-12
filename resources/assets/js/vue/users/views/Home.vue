<template>
    <div>
        <div class="row row-space justify-content-sm-center">
            <div class="col-sm-12">
                <p class=" text-center text-white">Ola, nome da pessoa</p>
                <hr/>
            </div>
        </div>
    
        <div class="row row-space">
            <div @click="mostrarSaldo = !mostrarSaldo" class="col-6 text-white text-center">
                MOSTRAR SALDO <br>
    
                <p v-if="mostrarSaldo">R$0,00</p>
    
                <p v-if="mostrarSaldo == false" class="text-center"><i class="fas fa-chevron-down"></i></p>
    
    
            </div>
    
    
            <div class="col-6 text-white">
                <div class="btn btn-light btn-sm btn-inicial-mini">Extrato</div><br>
                <div class="btn btn-light btn-sm btn-inicial-mini">Transfêrencias</div><br>
                <div class="btn btn-light btn-sm btn-inicial-mini">Pagamentos</div>
            </div>
        </div>
    
        <div class="row row-space">
            <div class="col-4">    
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-money-bill-alt"></i>
                    </h4>
                    Saldo
                </div>    
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-qrcode"></i>
                    </h4>
                    Extrato    
                </div>
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-exchange-alt"></i>
                    </h4>
                    Transferência
                </div>    
            </div>
        </div>

        <div class="row row-space">
            <div class="col-4">    
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-donate"></i>
                    </h4>
                    Deposito
                </div>    
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="far fa-credit-card"></i>
                    </h4>
                    Saque    
                </div>
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-chart-line"></i>
                    </h4>
                    Smart Invest
                </div>    
            </div>
        </div>

           <div class="row row-space">
            <div class="col-4">    
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-donate"></i>
                    </h4>
                    Envio<br>
                    (Câmbio)
                </div>    
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-history"></i>
                    </h4>
                    Apoio<br>
                    Contabio Mei    
                </div>
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-bold"></i>
                    </h4>
                    BPP<br><br>
                </div>    
            </div>
        </div>

        <div class="row row-space">
    
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            mostrarSaldo: false
        }
    }
}
</script>

<style>
.card {
    background-color: #FF4C03;
    border: 1px solid #f8f9fa;
    color: white;
}

.btn-inicial-func {
    padding: 15px
}

.btn-inicial-mini {
    width: 100%;
    margin-bottom: 2px;
}
</style>


