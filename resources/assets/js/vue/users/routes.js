import Home from './views/Home'
import LoginRegister from './views/LoginRegister'

const routes = [
    {path:'/home', name:'home', component: Home},
    {path:'/', name:'loginRegister', component: LoginRegister},
]

export default routes