import axios from "axios";
import router from "../Router/index";

let apiClient = axios.create({
    baseURL: import.meta.env.VITE_API_URL,
    withCredentials: false,
    headers: {
        Accept: "application/json",
    },
    timeout: 50000,
});

apiClient.interceptors.response.use(
    (response) => {
        return Promise.resolve(response);
    },
    (error) => {
        const { status, data } = error.response;
        if (status === 404 || status === 403) {
            router.push("/404");
        }
        return Promise.reject(error);
    }
);

export default apiClient;
