<template>
    <div>

   <div class="row-space-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">            
                <img class="img-logo img-fluid" src="img/logosmart.png" alt="">          
        </a> 
        

         <span class="navbar-text text-right">
                <i class="fab fa-whatsapp text-success"></i> (11) 98675-2530
            </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
            </ul>              
            <ul class="navbar-nav">                 
                <li class="nav-item">
                    <a class="nav-link" href="">HOME</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="">Register</a>
                </li> -->
            </ul>
        </div>
    </nav>
   </div>
</div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style>
.row-space-header {
    /* margin-top: 20px; */
}
body{
    background-color:#FF4C03
}
.img-logo{
        width: 200px;
}
@media (min-width: 260px) and (max-width: 400px) {
   .img-logo{
        width: 120px;
}
}

</style>

