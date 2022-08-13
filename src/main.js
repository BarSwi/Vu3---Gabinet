import { createApp, VueElement } from 'vue'
import App from './App.vue'
import router from './router'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'
import {library} from '@fortawesome/fontawesome-svg-core'
import {faBars, faPhoneFlip, faEnvelope, faClock, faCircleUp, faCircleDown, faXmark, faAngleUp, faRectangleList, faLocationDot} from '@fortawesome/free-solid-svg-icons'

library.add(faBars, faPhoneFlip, faEnvelope, faClock, faCircleUp, faCircleDown, faXmark, faAngleUp, faRectangleList, faLocationDot)


const app = createApp(App)


// Global variable define Vue3
// app.config.globalProperties.$hostname = 'test'
app.use(router)


app
.component('fa', FontAwesomeIcon)
.mount('#app')
