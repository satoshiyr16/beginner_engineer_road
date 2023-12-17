import { createRouter, createWebHashHistory } from 'vue-router'
import topPage from './Vue/components/topPage.vue'

const routes = [
  { path: '/', component: topPage },
]
const router = createRouter({
  history: createWebHashHistory(),
  routes,
})

export default router
