<template>
    <div>
       <div class="container-">
           <div class="row">
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 ">
                                        <header class="bg-smart">
                                            <div class="row">
                                                <div class="col-8">
                                                    <img class="img-fluid float-center" src="img/contas/logo.jpg" alt="">
                                                </div>
                                                 <div class="col-4">
                                                    <div class="float-right user-painel ">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-comments"></i>
                                                        <span class="text-white">
                                                            | David Lira <i class="far fa-user"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        
                                    </div>
                                </div>
                                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                                        </li> |
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lançamentos</a>
                                        </li> |
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Consultas</a>
                                        </li> |
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Administração</a>
                                        </li>


                                        </ul>
                                        <form class="form-inline my-2 my-lg-0">
                                           <span class="text-white">Central de Ajuda</span>
                                        </form>
                                    </div>
                                </nav>

                                <div class="row">
                                    <div class="col-12">
                                    <div class="navbar">
                                        <h5 class="text-smart">
                                            Receitas e Despesas
                                    </h5>
                                    </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="btn btn-primary btn-sm">+ ADICIONAR</div>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ORDERNAR POR
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">#</a>
                                            <a class="dropdown-item" href="#">#</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6"> 
                                        <div class="form-group ">
                                            <input type="text" class="form-control">      
                                        </div>
                                                                 
                                    </div>
                                    <div class="col-1">
                                        <div class="btn-group  float-right" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                FILTRAR
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">#</a>
                                            <a class="dropdown-item" href="#">#</a>
                                        </div>
                                    </div>
                                </div>          

                                <div class="row">
                                   <div class="col-12">
                                        <div class="btn">< </div>
                                        <div class="btn btn-sm">2019</div>
                                        <div class="btn">> </div>  <div class="btn">< </div>
                                        <div class="btn btn-sm">JAN</div>
                                        <div class="btn btn-sm">FEV</div>
                                        <div class="btn btn-sm">MAR</div>
                                        <div class="btn btn-sm">ABR</div>
                                        <div class="btn btn-sm">MAI</div>
                                        <div class="btn btn-sm">JUN</div>
                                        <div class="btn btn-sm">JUL</div>
                                        <div class="btn btn-sm">AGO</div>
                                        <div class="btn btn-sm">SET</div>
                                        <div class="btn btn-sm">OUT</div>
                                        <div class="btn btn-sm">NOV</div>
                                        <div class="btn btn-sm">DEZ</div>
                                        <input type="date" class=""> <i class="far fa-calendar-alt"></i>
                                        <input type="date" class="">   <i class="far fa-calendar-alt"></i>
                                   </div>
                                   
                                </div>   
                            </div>

                                <div class="row">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                            <table class="table">
                                            <thead class="">
                                                <tr>
                                                    <th>
                                                        <input type="checkbox">
                                                    </th>
                                                    <th>Data</th>
                                                    <th>Descrição</th>
                                                    <th>Valor</th>
                                                    <th>Saldo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="8"> SALDO ANTERIOR</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>21/07/2019</td>
                                                    <td><span class="text-danger">  Smart + </span></td>
                                                    <td><span class="text-danger">  180,00 </span></td>
                                                    <td><span class="text-danger">  180,00 </span></td>
                                                    <td><span class="text-danger">  <i class="fas fa-circle"></i> </span></td>
                                                    <td><span class="text-danger">  <i class="fas fa-check"></i> </span></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>21/07/2019</td>
                                                    <td><span class="text-success">  Smart + </span></td>
                                                    <td><span class="text-success">  190,00 </span></td>
                                                    <td><span class="text-success">  10,00 </span></td>
                                                    <td><span class="text-success">  <i class="fas fa-circle"></i> </span></td>
                                                    <td><span class="text-success">  <i class="fas fa-check"></i> </span></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"> TOTAL DOS LANÇAMENTOS</td>
                                                     <td colspan="3" class="text-right">
                                                         <span class="text-success">190,00</span> - 
                                                         <span class="text-danger">180,00</span> = 
                                                         <span class="text-success">10,00</span>
                                                         </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                            </div>
                                        </div>
                                        </div>
                                        <br>
                                       <div class="row">
                                           <div class="col-12">
                                                <div class="btn btn-success btn-sm">PAGAR</div>
                                        <div class="btn btn-danger btn-sm">EXCLUIR</div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card">
                                            <div class="card-header">
                                                FILTRO RÁPIDO
                                            </div>
                                            <div class="card-body">
                                                Lançamentos <br>
                                                <div class="row">
                                                    <div class="col-6">
                                                    <input type="checkbox"> Crédito<br>
                                                     <input type="checkbox"> Realizado<br>
                                                      <input type="checkbox"> Vendido<br>
                                                </div>
                                                <div class="col-6">
                                                     <input type="checkbox"> Débito<br>
                                                      <input type="checkbox"> Não Realizado<br>
                                                       <input type="checkbox"> A Vencer<br>
                                                </div>
                                                </div>
                                                <div class="row content-justify-center">
                                                    <div class="col-12">
                                                        <div class="btn"><i class="fas fa-check"></i> FILTRAR</div>
                                                        <div class="btn"><i class="fas fa-times"></i> LIMPAR</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <div class="card">
                                            <div class="card-header">
                                                Saldos
                                            </div>
                                            <div class="card-body">                                               
                                                <div class="row">
                                                    <table class="table">
                                                        <tr>
                                                            <td>Saldo Anterior<br>
                                                                30/06/2019
                                                            </td>
                                                            <td>0,00</td>
                                                        </tr>                                                            
                                                        <tr>
                                                            <td>Saldo do Período <br>
                                                                01 a 31/07/2019
                                                            </td>
                                                               <td> 10,00</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>Saldo Acumulado<br>
                                                            30/06/2019
                                                            </td>
                                                            <td>10,00</td>
                                                        </tr>   
                                                        <tr class="text-danger">
                                                            <td>Saldo Atual</td>
                                                            <td>10,00</td>
                                                        </tr>
                                                    </table>                                             
                                                </div>                                               
                                            </div>
                                        </div>
                                            </div>
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
        name: "CaixaConta",
    }
</script>
<style>
    .bg-smart{
        background-color: #fe4101;
    }
    .user-painel {
    margin: 17px;
}
</style>
