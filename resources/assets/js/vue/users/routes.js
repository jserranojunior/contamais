import Home from './views/Home'
import LoginRegister from './views/LoginRegister'
import Register from './views/Register'

const routes = [
    {path:'/home', name:'home', component: Home},
    {path:'/', name:'loginRegister', component: LoginRegister},
    {path:'/register', name:'register', component: Register},
]

export default routes