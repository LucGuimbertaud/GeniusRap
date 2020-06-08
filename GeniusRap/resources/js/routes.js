import VueRouter from "vue-router";
import Test from "./test/Test";


const routes = [
    {
        path: "/",
        component: Test,
        name: "test",
    },
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

export default router;
