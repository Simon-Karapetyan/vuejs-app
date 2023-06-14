import axios from 'axios';


const axiosApi = axios.create({
    baseURL: 'http://localhost:8000/api/',
});

const request = (method, url, data, params) => {
    return axiosApi.request({
        method,
        url,
        data,
        params,
    }).then((response) => {
        return response;
    }).catch((error) => {
        console.log(method, url, error.message);
        return error.response;
    });
};

export default request;
