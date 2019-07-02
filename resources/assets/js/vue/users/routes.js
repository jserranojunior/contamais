import Home from './views/Home'
import HomeLogin from './views/HomeLogin'
import Register from './views/Register'
import Login from './views/Login'
import Receber from './views/Receber'

import RegisterComplete from './views/Register'

const routes = [
    {path:'/', name:'Home', component: Home},


    {path:'/login', name:'Login', component: Login},
    {path:'/register', name:'Register', component: Register},
    {path:'/registercomplete', name:'RegisterComplete', component: RegisterComplete},
    {path:'/receber', name:'Receber', component: Receber},


    {path:'/user/home', name:'HomeLogin', component: HomeLogin},
]

export default routes