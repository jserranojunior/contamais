<template>
    <div>              
            <Header></Header>     
            <router-view></router-view>       
    </div>
</template>

<script>
    import Header from './Header'
    // import Footer from './layouts/Footer'

    export default {
        name: "App",
        components: {
            Header,
    //         Footer,
            },
        
    }
</script>

