import { createRouter, createWebHashHistory } from 'vue-router'
import topPage from './Vue/components/topPage.vue'
import addPost from './Vue/components/addPost.vue'


const routes = [
  { path: '/', component: topPage },
  { path: '/add_post', component: addPost },

]
const router = createRouter({
  history: createWebHashHistory(),
  routes,
})

export default router
