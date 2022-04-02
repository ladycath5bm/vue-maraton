import axios from 'axios';

const URL = 'http://127.0.0.1:8000/api/todos';

export const todoServices = {
    all: () => axios.get(URL),
    create: (data) => axios.post(URL, data),
    show: (id) => axios.get(`${URL}/${id}`),
    destroy: (id) => axios.delete(`${URL}/${id}`),
    toggle: (id) => axios.patch(`${URL}/${id}/toggle`),
};
