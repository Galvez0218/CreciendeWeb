require('./bootstrap');
// window.Swal = require("sweetalert2");

import axios from 'axios'

Vue.prototype.$http = axios

const el = document.getElementById('app')