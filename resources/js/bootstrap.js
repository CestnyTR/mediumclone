import axios from 'axios';
window.axios = axios;
window.axios.defaults.baseURL = 'http://localhost/dashboard/project-test/public';

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
