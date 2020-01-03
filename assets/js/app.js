import 'onsenui/css/onsenui.css';
import 'onsenui/css/onsen-css-components.css';

// JS import
import Vue from 'vue';
import VueOnsen from 'vue-onsenui'; // This imports 'onsenui', so no need to import it separately
Vue.use(VueOnsen); 
import Example from './components/Example'
/**
* Create a fresh Vue Application instance
*/
new Vue({
  el: '#app',
  components: {Example}
});