<template>
    <div class="container">
    
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
    
        <section class="section-funcoes">
            <div class="row">
                <div class="col">
                    <div class="card-deck">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="fas fa-money-bill-alt"></i></h5>
                            <p class="card-text">Saldo</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-qrcode"></i>
                            </h5>
                            <p class="card-text">Extrato</p>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-exchange-alt"></i>
                            </h5>
                            <p class=" text-btn-func text-center">Transferência</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    
    
        <div class="row row-space">
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-donate"></i>
                    </h4>
                    <p class=" text-btn-func text-center"> Deposito </p>
                </div>
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="far fa-credit-card"></i>
                    </h4>
                    <p class=" text-btn-func text-center"> Saque </p>
                </div>
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-chart-line"></i>
                    </h4>
                    <p class=" text-btn-func text-center"> Smart Invest </p>
                </div>
            </div>
        </div>
    
        <div class="row row-space">
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-donate"></i>
                    </h4>
                    <span class=" text-btn-func text-center"> Envio</span><br>
                    <p class=" text-btn-func text-center">(Câmbio)</p>
                </div>
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-history"></i>
                    </h4>
                    <p class=" text-btn-func text-center">Apoio</p>
                    <p class=" text-btn-func text-center">Contabio Mei </p>
                </div>
            </div>
            <div class="col-4">
                <div class="btn-inicial-func border border-light text-center text-white">
                    <h4>
                        <i class="fas fa-bold"></i>
                    </h4>
                    <p class=" text-btn-func text-center">BPP</p><br><br>
                </div>
            </div>
        </div>
        </section>
    
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
    padding: 15px;
    margin-bottom: 3px;
}

.section-funcoes {
    margin-top: 15px;
}

.btn-inicial-mini {
    width: 100%;
    margin-bottom: 2px;
}

@media (min-width: 260px) and (max-width: 400px) {
    .text-btn-func {
        font-size: 0.6rem;
        font-weight: bold;
    }
}
</style>


