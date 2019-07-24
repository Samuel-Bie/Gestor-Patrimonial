import axios from 'axios';
import store from '@/vuex'

export default function setup() {
    axios.interceptors.request.use(function(config) {
        const token = store.getters.getACCESS_TOKEN;
        if(token) {
            config.headers.Authorization = `Bearer ${token}`;
        }
        return config;
    }, function(err) {
        return Promise.reject(err);
    });
}
