import VueRouter from "vue-router";
import TracksPreview from "./Tracks/TracksPreview";
import Tracks from "./Tracks/Tracks";


const routes = [
    {
        path: "/",
        component: TracksPreview,
        name: "home",
    },
    {
        path: "/tracks",
        component: Tracks,
        name: "tracks",
    }
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

export default router;
