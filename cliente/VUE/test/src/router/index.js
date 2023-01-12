import { createRouter, createWebHistory } from "vue-router";
import HomePage from "@/elementos/pages/HomePage.vue";
import SubMenu from "@/elementos/pages/SubMenu.vue";
import SubMenu1 from "@/elementos/pages/SubMenu1.vue";
import SubMenu2 from "@/elementos/pages/SubMenu2.vue";
import UsuarioPage from "@/elementos/pages/UsuarioPage.vue";
import Signup from "@/elementos/pages/Signup.vue";

import { estaPermitido, estaPermitidoAalgunos } from "@/shared/LocalStorage/LocalStorage";

const router = createRouter({
    history: createWebHistory( import.meta.env.BASE_URL),
    routes: [
        //Públicas
        {   
            path: '/', 
            name:'Inicio',
            component: HomePage
        },
        {
            path: '/usuario/:nombre',
            name: 'Usuario',
            component: UsuarioPage     
        },
        
        {   
            path: '/about', 
            name:'Sobre Nosotros',
            //Realicemos una carga "perezosa" ya que esta página no será muy visitada ¿o sí?
            component: ()=> import("@/elementos/pages/AboutPage.vue")
        },
        {   
            path: '/SubMenu', 
            name:'SubMenu',
            component: SubMenu,
            children: [
                {
                    //Ahora el path no tiene un / al inicio
                    //ya que se añade al path de la ruta padre
                    path:'submenu1',
                    name: 'SubMenu 1',
                    component: SubMenu1,
                    beforeEnter:[estaPermitidoAalgunos],
                },
                {
                    path:'submenu2',
                    name: 'SubMenu 2',
                    component: SubMenu2,
                    
                }
            ]
        },
        {
            path: '/signup',
            name: 'Signup',
            component: Signup,
        },

        //Si se produce un error
        {
            path: '/:pathMatch(.*)*',
            redirect:() => ({ name:'home'})
        }
    ]

});

/*Para no permitir nada más que el acceso a SubMenu 2 donde podemos cambiar los permisos
router.beforeEach((to, from, next) => {
    if (to.name !== 'SubMenu 2' && !estaPermitido()) next({ name: 'SubMenu 2' })
    else next()
});


*/

export default router;