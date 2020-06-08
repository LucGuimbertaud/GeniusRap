import VueRouter from "vue-router";
import Test1 from "./components/Test1";


const routes = [
    {
        path: "/",
        component: Test1,
        name: "home",
    },
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
