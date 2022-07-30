import { createApp, VueElement } from 'vue'
import App from './App.vue'
import router from './router'




const app = createApp(App)


// Global variable define Vue3
// app.config.globalProperties.$hostname = 'test'
app.use(router)


app.mount('#app')
