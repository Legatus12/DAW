import { createRouter, createWebHistory } from "vue-router";
import Inicio from "@/views/Inicio.vue"
import LoginLogout from "@/views/LoginLogout.vue"
import Servicios from "@/views/Servicios.vue"

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    
    {
      path: "/",
      name: "Inicio",
      component: Inicio,
    },
    {
      path: "/Login",
      name: "Iniciar Sesión",
      component: LoginLogout,
    },
    {
      path: "/About",
      name: "Sobre Nosotros",
      component: () => import("@/views/About.vue"),
    },
    {
      path: "/Servicios",
      name: "Servicios",
      component: Servicios,
    },
    {
      path: "/:pathMatch(.*)*",
      redirect: () => ({ name: 'Inicio'}) 
    }
  ],
});

export default router;
