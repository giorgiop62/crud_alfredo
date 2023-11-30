import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Contact from "../pages/Contact.vue";
import Projets from "../pages/Projets.vue";
import Date from "../pages/Date.vue"

const routes = [
  {
    path: '',
    redirect: 'home',
  },
  {
    path: "/home",
    name: "home",
    component: Home,
  },
  
  {
    path: "/projets",
    name: "projets",
    component: Projets,
  },
  {
    path: "/contact",
    name: "contact",
    component: Contact,
  },
  {
    path: "/date",
    name: "date",
    component: Date,
  }
];

const router = createRouter({ history: createWebHistory(), routes });
router.replace(router.currentRoute.value.fullPath);
export default router;
