// loadash
import _ from 'lodash';
window._ = _;

// axios
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// sass
import "~res/scss/app.scss";

// bootstrap (js only, css is imported in app.scss)
import * as bootstrap from 'bootstrap'

