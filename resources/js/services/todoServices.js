import axios from 'axios';

const URL = 'http://todolist.test/api/todos';

export const todoServices = {
    all: () => axios.get(URL),
    create: (data) => axios.post(URL, data),
    destroy: (id) => axios.delete(`${URL}/${id}`),
};
