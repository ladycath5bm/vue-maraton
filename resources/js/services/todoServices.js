import axios from 'axios';

const URL = 'http://todolist.test/api/todos';

export const todoServices = {
    all: () => axios.get(URL),
    create: (data) => axios.post(URL, data),
    show: (id) => axios.get(`${URL}/${id}`),
    destroy: (id) => axios.delete(`${URL}/${id}`),
    toggle: (id) => axios.patch(`${URL}/${id}/toggle`),
};
