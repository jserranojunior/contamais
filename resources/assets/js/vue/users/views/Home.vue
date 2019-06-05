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

                <p  v-if="mostrarSaldo == false" class="text-center"><i class="fas fa-chevron-down"></i></p>


            </div>


            <div class="col-6 text-white">
                <div class="btn btn-light btn-sm">Extrato</div><br>
                <div class="btn btn-light btn-sm">Transfêrencias</div><br>
                <div class="btn btn-light btn-sm">Pagamentos</div>
            </div>
        </div>
    
        <div class="row row-space">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center text-white">
                        <h4>
                            <i class="fas fa-money-bill-alt"></i>
                        </h4>
                        Saldo
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body text-center text-white">
                        <h4>
                            <i class="fas fa-qrcode"></i>
                        </h4>
                        EXTRATO
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body text-center text-white">
                        <h4>
                            <i class="fas fa-exchange-alt"></i>
                        </h4>
                        TRANSFÊRENCIA
                    </div>
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
    data(){ 
        return{
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
</style>


