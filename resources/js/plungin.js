// resources/js/plugin.js
import VcButton from './components/VcButton.vue'
import './css/vc.css'

export default {
    install(app) {
        app.component('VcButton', VcButton)
    }
}
