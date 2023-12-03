import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/products/:productID',
      name: 'product',
      component: () => import('../views/ProductView.vue'),
    },
    {
      path: '/categories/:categoryID',
      name: 'category',
      component: () => import("../views/CategoryView.vue"),
    },
    {
      path: '/:pathMatch(.*)*',
      name: 'notFoundView',
      component: () => import("../views/NotFoundView.vue"),
    },
  ]
})

export default router
