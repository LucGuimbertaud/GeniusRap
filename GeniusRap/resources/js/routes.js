import VueRouter from "vue-router";
import TracksPreview from "./Tracks/TracksPreview";
import Tracks from "./Tracks/Tracks";
import Track from "./Track/Track";
import Artist from "./Artist/Artist";


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
    },
    {
        path: "/track/:id",
        component: Track,
        name: "track",
    },
    {
        path: "/artist/:id",
        component: Artist,
        name: 'artist',
    }
];

const router = new VueRouter({
    mode: 'history',
    routes,
});

export default router;
